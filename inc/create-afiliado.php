<?php
require('wp_connect.php');

$nombres			= $_POST['nombres'];
$apellidos			= $_POST['apellidos'];
$ci 				= $_POST['ci'];
$genero 			= $_POST['genero'];
$fecha_nacimiento	= $_POST['fecha_nacimiento'];
$direccion_hab 		= $_POST['direccion_hab'];
$tlf_cel 			= $_POST['tlf_cel'];
$tlf_local 			= $_POST['tlf_local'];
$correo 			= $_POST['correo'];
$facebook 			= $_POST['facebook'];
$twitter 			= $_POST['twitter'];
$instagram 			= $_POST['instagram'];
$pin 				= $_POST['pin'];
$empresa 			= $_POST['empresa'];
$cargo 				= $_POST['cargo'];
$ci_file 			= $_FILES['ci_file'];
$foto_file 			= $_FILES['foto_file'];
$servicios			= $_POST['servicios'];
$profesion			= $_POST['profesion'];
$type 				= $_POST['medicsemka_type'];

$banco		= $_POST['banco'];
$num_cuenta	= $_POST['num_cuenta'];
$num_ref	= $_POST['num_ref'];
$fecha 		= $_POST['fecha'];
$monto		= $_POST['monto'];
$constancia	= $_FILES['constancia'];

if (isset($nombres, $apellidos, $ci, $fecha_nacimiento, $direccion_hab, $tlf_cel, $tlf_local, $correo, $facebook, $twitter, $instagram, $pin, $empresa, $cargo, $ci_file, $foto_file)) {
	if (username_exists($correo) == null) {
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL) === false) {

			$paths = array();
			$files_moved = upload_user_files(array(
				$ci_file,
				$foto_file,
				$constancia
			), $paths);

			if ($files_moved) {
				$vals = array(
					'Nombres' 				=> $nombres,
					'Apellidos' 			=> $apellidos,
					'C.I.' 					=> $ci,
					'Género' 				=> $genero,
					'Fecha de Nacimiento'	=> $fecha_nacimiento,
					'Dirección de Hab.'		=> $direccion_hab,
					'Teléfono Celular'		=> $tlf_cel,
					'Teléfono Local'		=> $tlf_local,
					'Correo' 				=> $correo,
					'Facebook' 				=> $facebook,
					'Twitter' 				=> $twitter,
					'Instagram' 			=> $instagram,
					'Pin' 					=> $pin,
					'Empresa' 				=> $empresa,
					'Cargo' 				=> $cargo
				);
				if (!empty($servicios)) {
					$vals['Servicios que ofrece'] => $servicios;
				}
				if (!empty($profesion)) {
					$vals['Profesion'] => $profesion
				}
				$html = email_template_afiliado($vals, array(
					'Banco'					=> $banco,
					'Número de Cuenta'		=> $num_cuenta,
					'Número Dep./Transf.'	=> $num_ref,
					'Fecha'					=> $fecha,
					'Monto'					=> $monto
				), $paths);

				//adding subs
				if (isset($_POST['ci_sub']) && is_array($_POST['ci_sub'])) {
					$nombres_sub			= $_POST['nombres_sub'];
					$apellidos_sub			= $_POST['apellidos_sub'];
					$ci_sub					= $_POST['ci_sub'];
					$genero_sub				= $_POST['genero_sub'];
					$fecha_nacimiento_sub	= $_POST['fecha_nacimiento_sub'];
					$direccion_hab_sub 		= $_POST['direccion_hab_sub'];
					$tlf_cel_sub 			= $_POST['tlf_cel_sub'];
					$tlf_local_sub 			= $_POST['tlf_local_sub'];
					$correo_sub 			= $_POST['correo_sub'];
					$facebook_sub 			= $_POST['facebook_sub'];
					$twitter_sub 			= $_POST['twitter_sub'];
					$instagram_sub 			= $_POST['instagram_sub'];
					$pin_sub 				= $_POST['pin_sub'];
					$empresa_sub 			= $_POST['empresa_sub'];
					$cargo_sub 				= $_POST['cargo_sub'];
					$ci_file_sub 			= $_FILES['ci_file_sub'];
					$foto_file_sub 			= $_FILES['foto_file_sub'];

					foreach ($ci_sub as $key => $ci) {
						if (empty($ci)) continue;
						$paths = array();
						$files_moved = upload_user_files(array(
							$ci_file_sub[$key],
							$foto_file_sub[$key]
						), $paths);

						//if ($files_moved) {
							$html .= email_template_sub_afiliado(array(
								'Nombres' 				=> $nombres_sub[$key],
								'Apellidos' 			=> $apellidos_sub[$key],
								'C.I.' 					=> $ci,
								'Género' 				=> $genero_sub[$key],
								'Fecha de Nacimiento'	=> $fecha_nacimiento_sub[$key],
								'Dirección de Hab.'		=> $direccion_hab_sub[$key],
								'Teléfono Celular'		=> $tlf_cel_sub[$key],
								'Teléfono Local'		=> $tlf_local_sub[$key],
								'Correo' 				=> $correo_sub[$key],
								'Facebook' 				=> $facebook_sub[$key],
								'Twitter' 				=> $twitter_sub[$key],
								'Instagram' 			=> $instagram_sub[$key],
								'Pin' 					=> $pin_sub[$key],
								'Empresa' 				=> $empresa_sub[$key],
								'Cargo' 				=> $cargo_sub[$key]
							), $paths);
						//}
					}
				}

				$send_email = send_email('Datos de Afiliación', $html);

				if ($send_email) {
					$name = explode('@', $correo);
					createUser($correo, $name[0], empty($type) ? 'natural' : $type);

					json_resp(1);
				}
				else {
					json_resp(0, 'Ha ocurrido un error al intentar enviar la información.');
				}
			}
			else {
				json_resp(0, 'Error al subir los archivos.');
			}

		}
		else {
			json_resp(0, 'El correo electrónico no es válido.');
		}
	}
	else {
		json_resp(0, 'Error, el correo ya está registrado.');
	}

}
json_resp(0, 'Por favor verifique que los datos sean correctos.');


// functions:

function email_template_afiliado($user_data, $payment_data, $user_files) {
	$logo = get_template_directory_uri() . '/img/logo.png';
	$user_data_html = '';
	foreach ($user_data as $key => $value) {
		$user_data_html .= html_row_cell($key, $value);
	}
	$payment_data_html = '';
	foreach ($payment_data as $key => $value) {
		$payment_data_html .= html_row_cell($key, $value);
	}
	$files_html = '';
	foreach ($user_files as $path) {
		if (!empty($path)) {
			$files_html .= html_image($path);
		}
	}
	return <<<EOT
	<div style="margin:10px">
		<img src="{$logo}" alt="Medic Semka">
		<h1>Nuevo Solicitud de Afiliación</h1>
		<p>Datos ingresados por el usuario:</p>
		<table>
			{$user_data_html}
		</table>
		<h2>Datos del Pago</h2>
		<table>
			{$payment_data_html}
		</table>
		{$files_html}
	</div>
EOT;
}


function email_template_sub_afiliado($user_data, $user_files) {
	$user_data_html = '';
	foreach ($user_data as $key => $value) {
		$user_data_html .= html_row_cell($key, $value);
	}
	$payment_data_html = '';
	foreach ($payment_data as $key => $value) {
		$payment_data_html .= html_row_cell($key, $value);
	}
	$files_html = '';
	foreach ($user_files as $path) {
		if (!empty($path)) {
			$files_html .= html_image($path);
		}
	}
	return <<<EOT
	<div style="margin:10px">
		<hr>
		<h1>+ Afiliado Adicional</h1>
		<p>Datos ingresados por el usuario:</p>
		<table>
			{$user_data_html}
		</table>
		{$files_html}
	</div>
EOT;
}


function createUser($email, $name, $type) {
	$password = wp_generate_password(12, true);
	$user_id = wp_create_user($email, $password, $email);
	wp_update_user(array(
		'ID'       => $user_id,
		'nickname' => $name
	));
	$user = new WP_User($user_id);
	$user->set_role('subscriber'); //contributor
	wp_mail($email, 'Bienvenido a Medic Semka', 'Su contraseña es: ' . $password);

	add_user_meta($user_id, 'medicsemka_type', $type);
}

//---moved to functions.php---
/*function upload_user_files($files, &$paths) {
	$paths = array();
	if ( ! function_exists( 'wp_handle_upload' ) ) {
	    require_once( ABSPATH . 'wp-admin/includes/file.php' );
	}

	$upload_overrides = array( 'test_form' => false );

	foreach ($files as $file) {
		$file = wp_handle_upload( $file, $upload_overrides );
		$file_moved = $file && !isset($file['error']);
		if (!$file_moved) break;
		$paths[] = $file['url'];
	}

	return $file_moved;
}*/