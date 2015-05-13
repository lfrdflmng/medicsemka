<?php
if (!isset($_POST) || !is_array($_POST) || !count($_POST)) goto Redirect;
require('wp_connect.php');

$html = '';

foreach ($_POST as $key => $val) {
	if ($key == 'redirect') continue;
	if (strpos($key, '_lbl') === false) {
		$label = isset($_POST[$key . '_lbl']) ? $_POST[$key . '_lbl'] : false;
		if ($label !== false) {
			$html .= html_row_cell($label, $val);
		}
	}
}

$html = <<<EOT
	<div style="margin:10px">
		<h1>Contacto</h1>
		<p>Datos ingresados por el usuario:</p>
		<table>
			{$html}
		</table>
	</div>
EOT;

//files
if (isset($_FILES) && is_array($_FILES)) {
	$paths = array();
	$files_moved = upload_user_files($_FILES, $paths);
	$files_html = '';
	foreach ($paths as $path) {
		if (!empty($path)) {
			$files_html .= html_image($path);
		}
	}
	$html .= $files_html;
}

$subject = !empty($_POST['subject']) ? $_POST['subject'] : 'Contacto';
$sent = send_email($subject, $html);

Redirect:
$page = isset($_POST['redirect']) ? get_page_by_path($_POST['redirect'])->guid : home_url();
if (isset($sent)) {
	$page = append_var_to_url($page, 'sent', (int)$sent);
}
header('Location: ' . $page);
die();