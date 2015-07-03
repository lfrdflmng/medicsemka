<?php
 /*
 * Template Name: Contacta a un Asesor
 * @subpackage MedicSemka
 * @since 1.0
 */

$page_vars = get_post_custom( get_page_by_path('contacta-asesor')->ID );

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

	<div class="container afiliar asesor"> <!-- class="container afiliar profesional" -->
		<!-- header -->	
			

			<div class="match7 color-button brown-bg"> <!--color-button head-title match1 color-bg -->
			
				<div class="heart-plus white"></div>
				<div class="label">
					<span>Contacta a un</span>
					<h1>Asesor</h1>
				</div>

			
				<div class="col-sm-9">
					<div class="match1 blank-space"></div>
				</div>
			</div>

			
<!--
			<div class="row">
				<div class="col-sm-3">
					<div class="color-button brown-bg match1 color-bg">
						<div class="heart-plus white"></div>
						<div class="label">
							<span>Contacta a un</span>
							<h1>Asesor3</h1>
						</div>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="match1 blank-space"></div>
				</div>
			</div>			
-->
			<div class="separator"></div>

		<!-- second row -->
			<div class="row">
				<div class="col-sm-12">
					<figure class="full" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/slide-1-small.jpg)">
						<div class="image-overlay professional-overlay-1 magictime spaceInLeft">
							<img src="<?php echo get_template_directory_uri() ?>/img/overlay_asesores.png" alt="">
						</div>
					</figure>
				</div>
			</div>

		<div class="line-separator"></div>


		<!-- third row -->
			<div class="row">
				<!-- Asesores -->
				<div class="col-sm-8">
					<div class="box match2 color-bg right-arrow">
						<h1><?php print_var('asesores_titulo', $page_vars); ?></h1>						
						<ul>
							<?php
								/* $icons_array = array('people', 'peoples', 'money', 'megaphone', 'arrow');
								$max = count($icons_array); */
								$text_array = explode('<br />', nl3br($page_vars['asesores_contenido_nombres'][0]));
								$i = 0;
								foreach ($text_array as $text) :
							?> 
							<!-- <li><span class="lbl"><?php echo $text; ?></span><span class="circle-icon icon-<?php echo $icons_array[$i]; ?>"></span></li> -->
							<!--<li><span class="circle-icon icon-<?php echo $icons_array[$i]; ?>"></span>Nombre1 </li>
							<li><span class="lbl">Nombre2</span> test</li>-->
							<li> Iliana Hackshaw &emsp;&emsp; todoportusalud.is@gmail.com</li>
							<li> Niurka Gómez &emsp;&emsp;&emsp; niurk_gomez@hotmail.com</li>
							<li> Rhona Rondón &emsp; &emsp; &nbsp;  sujhayl@gmail.com</li>
							<li> Franchesca Muratti &emsp; franchesca_081@hotmail.com</li>
							<li> Esleiver Macabi &emsp; &emsp; emacabi89@gmail.com</li>
							<li> Josue Calderón &emsp; &emsp;&nbsp; josueraulcamejo@hotmail.com</li>


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
					<figure class="match2" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/board-small1.jpg)"></figure>
				</div>
			</div>


			<!--<div class="line-separator"></div>-->

		<!-- fourth row -->
		<div class="row">
			<!-- servicios especializados ofertados -->
			<!--<div class="col-sm-6">
				<div class="box match4 color-bg">
					
					<h1><?php print_var('asesores_titulo', $page_vars); ?></h1>
						
						<p><?php print_var('asesores_contenido_nombres', $page_vars); ?></p>

						<h4> Iliana Hackshaw</h4>
						<h4> Niurka Gómez</h4>
						<h4> Rhona Rondón</h4>
						<h4> Franchesca Muratti</h4>
						<h4> Esleiver Macabi</h4>
						<h4> Josue Calderón</h4>
				</div>
			</div>-->
			<!-- img -->
			<!-- <div class="col-sm-6">
				<div class="box match4 color-bg">					
					
					<h1>E-mail</h1>
					<ul>						
						
						<li class="mail-icon">&nbsp;&nbsp;&nbsp;&nbsp;todoportusalud.is@gmail.com</li> <br/>
						<li class="mail-icon">&nbsp;&nbsp;&nbsp;&nbsp;niurk_gomez@hotmail.com</li><br/>
						<li class="mail-icon">&nbsp;&nbsp;&nbsp;&nbsp;sujhayl@gmail.com</li><br/>
						<li class="mail-icon">&nbsp;&nbsp;&nbsp;&nbsp;franchesca_081@hotmail.com</li><br/>
						<li class="mail-icon">&nbsp;&nbsp;&nbsp;&nbsp;emacabi89@gmail.com</li><br/>
						<li class="mail-icon">&nbsp;&nbsp;&nbsp;&nbsp;josueraulcamejo@hotmail.com</li>						
					</ul>					
				</div>
			</div> -->
		</div>

		<!--<div class="line-separator"></div>-->
		<div class="separator"></div>
		<div class="separator"></div>

		<!-- fifth row -->
		<!--<div class="row">
			<div class="col-sm-12">
				<div class="color-bg cropped-arrow-box">
					
					<h1><?php print_var('asesores_titulo', $page_vars); ?></h1>
						
						<h4> Iliana Hackshaw</h4>
						<h4> Niurka Gómez</h4>
						<h4> Rhona Rondón</h4>
						<h4> Franchesca Muratti</h4>
						<h4> Esleiver Macabi</h4>
						<h4> Josue Calderón</h4>
						<li class="mail-icon">&nbsp;&nbsp;&nbsp;&nbsp;josueraulcamejo@hotmail.com</li>
				</div>
			</div>
		</div>	-->	
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