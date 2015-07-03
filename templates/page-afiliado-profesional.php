<?php
 /*
 * Template Name: Afiliado Profesional
 * @subpackage MedicSemka
 * @since 1.0
 */

$page_vars = get_post_custom( get_page_by_path('afiliado-profesional')->ID );

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

/*$terms = <<<EOT
<p>LA EMPRESA MEDIC SEMKA C.A, domiciliada en Ciudad Bolívar, Municipio Autónomo HERES del Estado Bolívar, inscrita en el Registro de la Circunscripción Judicial del Estado Bolívar bajo el número 46, tomo 6-A, de fecha 2 de Febrero del año 2015, quien en lo sucesivo y a los efectos de este contrato se denomina servicios médicos, declara que ha resuelto hacer oferta pública del presente contrato para el uso de los servicios médicos que ofrece, quedando expresamente entendido que todo usuario de los servicios médicos de MEDIC SEMKA C.A, se adhiere a las clausulas, términos y modalidades QUE A CONTINUACIÓN SE ESTABLECEN:</p>
<ol>
<li>El contrato y sus beneficios solo serán para el afiliado, no puede utilizarlo una segunda persona.</li>
<li>El afiliado debe entregar al asesor una copia de su cédula de identidad, y una foto tipo carnet, copia del carnet del colegio al que pertenece, enviar resumen curricular más la información en el contrato de afiliación, para hacer un perfil en nuestro sistema y página web.</li>
<li>El afiliado recibirá un certificado/sticker de aliado MEDIC SEMKA, C.A. posterior a su afiliación.</li>
<li>La tarifa será fijada por MEDIC SEMKA, C.A. y aceptada por el cliente afiliado en el presente contrato de afiliación.</li>
<li>El profesional afiliado realizará el pago de la tarifa por medio de nuestros representantes autorizados o de las oficinas de atención al cliente.</li>
<li>Una vez pagada la tarifa de afiliación de servicios a MEDIC SEMKA, C.A. se celebrará el contrato de afiliación.</li>
<li>El profesional afiliado al pertenecer a MEDIC SEMKA, C.A. se compromete a ofrecer descuentos de _______ los días de mayor afluencia y de _______ los días de menor afluencia.</li>
<li>El contrato de afiliación vence a los 12 meses contados a partir de la fecha de inicio del presente contrato de afiliación y debe ser renovado para seguir recibiendo las bondades y beneficios de nuestros servicios.</li>
<li>El afiliado recibirá atención VIP si se comunica vía telefónica  con 48 horas de antelación para pautar su cita a una hora exacta disponible en el momento. En caso de no ser puntual deberá esperar.</li>
<li>El profesional afiliado si se muda a otra ciudad o país podrá transferir los servicios suscritos a un colega al presentar una carta explicativa formal que será estudiada por nuestra junta evaluadora para su aprobación. Una vez aprobado el nuevo afiliado deberá hacer un pago mínimo de gastos administrativos para hacer el traspaso.</li>
<li>MEDIC SEMKA, C.A. hará llegar promociones y descuentos vía e-mail a los afiliados y/o a través de nuestra página web.</li>
<li>MEDIC SEMKA, C.A. se comunicará con el profesional afiliado para darle la bienvenida.</li>
<li>MEDIC SEMKA, C.A. actualizará listaados de afiliados regularmente en función a la frecuencia de afiliación y los entregará a los profesionales afiliados.</li>
<li>El profesional afiliado, debe solicitar al momento de prestar sus servicios a un afiliado MEDIC SEMKA C.A., carnet de afiliación, C.I. laminada, original del contrato de afiliación y fotocopia de la partida de nacimiento en caso de ser menor.</li>
<li>En caso de que el afiliado solicite reintegro de afiliación, tendrá un lapso de 10 días contados a partir de la fecha de afiliación para presentar carta de solicitud de reintegro con motivo de exposición de la misma en nuestras oficinas de atención principal, y se procederá a realizar deducción del 30% de gastos administrativos.</li>
<li>El afiliado acepta todas las condiciones y términos aclarados en este contrato.</li>
</ol>
<p>CONTRATO N° 00001<br>
<p>El presente contrato de afiliación, tiene validez por 12 meses a partir de la fecha de inicio de contrato y culmina 12 meses posteriores a la misma.</p>
EOT;*/
$terms = $page_vars['terminos_condiciones'][0];

get_header(); ?>

	<div class="container afiliar profesional">
		<!-- header -->
		<div class="row">
			<div class="col-sm-3">
				<div class="color-button head-title match1 color-bg">
					<div class="heart-plus white"></div>
					<div class="label">
						<span>Afiliado</span>
						<h1>Profesional</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="match1 blank-space"></div>
			</div>
		</div>

		<div class="separator"></div>

		<!-- second row -->
		<div class="row">
			<div class="col-sm-12">
				<figure class="full" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/stock_doctor_smiling.jpg)">
					<div class="image-overlay professional-overlay-1 magictime spaceInLeft">
						<img src="<?php echo get_template_directory_uri() ?>/img/overlay_professional.png" alt="">
					</div>
				</figure>
			</div>
		</div>

		<!-- third row -->
		<div class="row">
			<!-- beneficios -->
			<div class="col-sm-8">
				<div class="box match2 color-bg right-arrow">
					<h1><?php print_var('beneficios_titulo', $page_vars); ?></h1>
					<ul>
						<?php
							$icons_array = array('people', 'peoples', 'money', 'megaphone', 'arrow');
							$max = count($icons_array);
							$text_array = explode('<br />', nl3br($page_vars['beneficios_contenido'][0]));
							$i = 0;
							foreach ($text_array as $text) :
						?>
						<li><span class="lbl"><?php echo $text; ?></span><span class="circle-icon icon-<?php echo $icons_array[$i]; ?>"></span></li>
						<?php
								$i++;
								if ($i >= $max) break;
							endforeach;
						?>
					</ul>
					<!--ul>
						<li><span class="lbl">Entrenamiento al personal para atención al paciente</span><span class="circle-icon icon-people"></span></li>
						<li><span class="lbl">Canalización de mayor cantidad de pacientes</span><span class="circle-icon icon-peoples"></span></li>
						<li><span class="lbl">Cancelación inmediata</span><span class="circle-icon icon-money"></span></li>
						<li><span class="lbl">Publicidad en inclusión de sus servicios en nuestra web</span><span class="circle-icon icon-megaphone"></span></li>
						<li><span class="lbl">Ventajas de comercialización y optimización de la atención médica especializada</span><span class="circle-icon icon-arrow"></span></li>
					</ul-->
				</div>
			</div>
			<!-- img -->
			<div class="col-sm-4">
				<figure class="match2" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/stock_doctor_patient_small.jpg)"></figure>
			</div>
		</div>

		<div class="line-separator"></div>

		<!-- fourth row -->
		<div class="row">
			<!-- servicios especializados ofertados -->
			<div class="col-sm-6">
				<div class="box match4 color-bg">
					<h1><?php print_var('lineamientos_titulo', $page_vars); ?></h1>
					<p><?php print_var('lineamientos_contenido', $page_vars); ?></p>
				</div>
			</div>
			<!-- img -->
			<div class="col-sm-6">
				<div class="box match4 color-bg">
					<h1><?php print_var('requisitos_titulo', $page_vars); ?></h1>
					<ul>
						<?php
							$items = explode('<br />', nl3br($page_vars['requisitos_contenido'][0]));
							foreach ($items as $item) :
						?>
						<li><?php echo $item; ?></li>
						<?php
							endforeach;
						?>
					</ul>
					<!--ul>
						<li>Celebrar contrato de Servicios</li>
						<li>Copia de C.I. y foto tipo carnet</li>
						<li>Fotocopia del carnet del colegio del gremio respectivo</li>
						<li>Resumen curricular en físico y digital</li>
						<li>Información de la especialidad o servicios ofrecidos</li>
					</ul-->
				</div>
			</div>
		</div>

		<div class="line-separator"></div>

		<!-- fifth row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="color-bg cropped-arrow-box">
					<h1 class="single">¿DESEAS ADQUIRIR NUESTRO SERVICIO?</h1>
				</div>
			</div>
		</div>
		<div class="buttons">
			<div class="match7 color-button purple-bg">
				<a class="btn-afiliate" href="#">
					<div class="heart-plus white"></div>
					<div class="label">
						<!--span>Afiliado Persona</span-->
						<h1>Afíliate</h1>
					</div>
				</a>
			</div>
			<div class="match7 color-button brown-bg">
				<!--<a href="<?php echo get_page_by_path('contacta-asesor')->guid; ?>">-->
				<a href="?page_id=117">
					<div class="heart-plus white"></div>
					<div class="label">
						<span>Contacta a un</span>
						<h1>Asesor</h1>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="overlay"></div>
	<div class="popup-holder popup-afiliate">
		<div class="content">
			<h1 id="current_afiliate_title" class="purple">Profesional Afiliado</h1>
			<form id="frm_afiliates" class="form-horizontal">
				<input type="hidden" name="medicsemka_type" value="profesional">

				<!-- afiliado principal -->
				<div id="afiliado_principal">
					<div class="form-group">
						<label for="nombres" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
						</div>
						<!--label for="apellidos" class="col-sm-2 control-label">Apellidos</label-->
						<div class="col-sm-5">
							<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
						</div>
					</div>
					<div class="form-group">
						<label for="ci" class="col-sm-2 control-label">C.I.</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="ci" name="ci" placeholder="C.I.">
						</div>

						<div class="radio radio-primary radio-inline">
		                    <input type="radio" id="genero_female" name="genero" value="0">
		                    <label for="genero_female"> Femenino </label>
		                </div>
		                <div class="radio radio-primary radio-inline">
		                    <input type="radio" id="genero_male" name="genero" value="1">
		                    <label for="genero_male"> Masculino </label>
		                </div>
					</div>

					<div class="form-group">
						<label for="fecha_nacimiento" class="col-sm-2 control-label">Fecha de Nacimiento</label>
						<div class="col-sm-10">
							<input type="text" class="form-control date-input" id="fecha_nacimiento" name="fecha_nacimiento">
						</div>
					</div>

					<div class="form-group">
						<label for="direccion_hab" class="col-sm-2 control-label">Dirección de Habitación</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="direccion_hab" name="direccion_hab" placeholder="Dirección de Habitación">
						</div>
					</div>

					<div class="form-group">
						<label for="tlf_cel" class="col-sm-2 control-label">Telf. celular</label>
						<div class="col-sm-4">
							<input type="tel" class="form-control" id="tlf_cel" name="tlf_cel" placeholder="Telf. celular">
						</div>

						<label for="tlf_local" class="col-sm-2 control-label">Telf. local</label>
						<div class="col-sm-4">
							<input type="tel" class="form-control" id="tlf_local" name="tlf_local" placeholder="Telf. local">
						</div>
					</div>

					<div class="form-group">
						<label for="correo" class="col-sm-2 control-label">Correo</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo">
						</div>
					</div>

					<div class="form-group">
						<label for="facebook" class="col-sm-2 control-label">Facebook</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook">
						</div>

						<label for="twitter" class="col-sm-2 control-label">Twitter</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter">
						</div>
					</div>

					<div class="form-group">
						<label for="instagram" class="col-sm-2 control-label">Instagram</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram">
						</div>

						<label for="pin" class="col-sm-2 control-label">Pin</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="pin" name="pin" placeholder="Pin">
						</div>
					</div>

					<div class="form-group">
						<label for="empresa" class="col-sm-2 control-label">Empresa</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa en la que trabaja">
						</div>
					</div>

					<div class="form-group">
						<label for="profesion" class="col-sm-2 control-label">Profesion</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="profesion" name="cargo" placeholder="Profesión">
						</div>
					</div>

					<div class="form-group">
						<label for="servicios" class="col-sm-12 control-label" style="text-align:left !important">Breve descripción de los servicios que ofrece</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="servicios" name="servicios" placeholder="Servicios que ofrece">
						</div>
					</div>

					<div class="row">
						<div class="col-sm-offset-2 col-sm-10">
							<h2>Requisitos Administrativos</h2>

							<div class="form-group">
								<label for="ci_file" class="col-sm-4 control-label">Cédula de Identidad</label>
								<div class="col-sm-8">
									<input type="file" id="ci_file" name="ci_file">
								</div>
							</div>

							<div class="form-group">
								<label for="foto_file" class="col-sm-4 control-label">Foto tipo Carnet</label>
								<div class="col-sm-8">
									<input type="file" id="foto_file" name="foto_file">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="checkbox checkbox-primary">
							<input type="checkbox" id="accept_conditions">
							<label for="accept_conditions">
								He leído y aceptado los <a class="terms-conditions" href="#">términos y condiciones</a>
							</label>
						</div>
					</div>
				</div>
				
				<div class="buttons">
					<div id="btn_done" class="color-button static purple-bg disabled">
						<a href="#">
							<div class="label">
								<h1>Finalizar</h1>
							</div>
						</a>
					</div>
				</div>

				<div class="separator"></div>

			</form>
		</div>
		<div class="popup-close">
			<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</div>
	</div>

	<!-- terms & conditions -->
	<div class="popup-holder popup-terms-conditions">
		<div class="content">
			<div class="user-content">
				<?php echo $terms; ?>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-8">
					<div class="color-button static purple-bg">
						<a href="#" class="btn-close">
							<div class="heart-plus white"></div>
							<div class="label">
								<h1>Acepto</h1>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- payment -->
	<div class="popup-holder popup-pay">
		<div class="title purple-bg">
			<h1>Registra tu Pago</h1>
		</div>
		<div class="content">
			<form id="frm_payment" class="form-horizontal" enctype="multipart/form-data" action="<?php echo get_template_directory_uri(); ?>/inc/create-afiliado.php">
				<?php $_COLOR = 'purple'; require('payment-form.php'); ?>
			</form>
		</div>
	</div>

<?php
	$url = get_template_directory_uri();
	$thank_you_page = append_var_to_url(get_page_by_path('gracias')->guid, 'p', 'profesional');
	$GLOBALS['script'] = <<<EOT
<script type="text/javascript" src="{$url}/js/jquery.matchheight.min.js"></script>
<script type="text/javascript" src="{$url}/js/datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="{$url}/js/datepicker/locales/bootstrap-datepicker.es.min.js"></script>
<script type="text/javascript" src="{$url}/js/functions_afiliate.js"></script>
<script type="text/javascript">
	var thank_you_page = '{$thank_you_page}';
</script>
EOT;
?>
<?php get_footer(); ?>