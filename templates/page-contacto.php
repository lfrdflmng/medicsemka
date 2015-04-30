<?php
 /*
 * Template Name: Contacto
 * @subpackage MedicSemka
 * @since 1.0
 */

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

get_header(); ?>

	<div class="container contacto">
		<!-- header -->
		<div class="row">
			<div class="col-sm-12">
				<div class="title lightblue-bg">
					<h1 class="magictime slideLeftRetourn">Contáctanos</h1>
				</div>
				<div class="lightblue-bg hidden-xs">
					<ul class="social-icons text-right">
						<li><a href="#" class="instagram"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="facebook"></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="separator"></div>

		<div class="row">
			<div class="col-sm-12">
				<div class="address-box fadeIn">
					<p><b>Dirección:</b> Paseo Meneses, Edificio Ana frente al BOD, 1er piso Oficina 3 Ciudad Bolívar</p>
					<p><b>Teléfonos:</b> (0285) 635.02.81 / (0426) 591.44.90</p>
					<p><b>E-mail:</b> medicsemka@gmail.com</p>
				</div>
			</div>
		</div>

		<div class="separator"></div>

		<div class="row">
			<!-- contact form -->
			<div class="col-sm-7">
				<div class="contact-form match1">
					<h1>¿Qué opina de nosotros?</h1>
					<form class="form-horizontal">
						<!-- name -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombres</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nombre" placeholder="Nombres" required>
							</div>
						</div>

						<!-- lastname -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellidos</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="apellido" placeholder="Apellidos">
							</div>
						</div>

						<!-- email -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
						</div>

						<!-- phone -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Teléfono</label>
							<div class="col-sm-9">
								<input type="tel" class="form-control" name="telefono" placeholder="Teléfono">
							</div>
						</div>

						<!-- how you find us -->
						<div class="form-group">
							<label class="col-sm-3 control-label">¿Cómo nos conoció?</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="como_conocio" placeholder="¿Cómo nos conoció?">
							</div>
						</div>

						<!-- subject -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Asunto</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="asunto" placeholder="Asunto">
							</div>
						</div>

						<!-- comment -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Comentario</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="comentario" placeholder="Comentario"></textarea>
							</div>
						</div>
						
						<div class="buttons">
							<button type="submit">Enviar</button>
						</div>
					</form>
				</div>
			</div>

			<!-- map -->
			<div class="col-sm-5">
				<div class="right-panel match1">
					<div id="google_map"></div>

					<div class="separator"></div>

					<a class="large-button work-with-us" href="#">Trabaja con nosotros</a>
				</div>
			</div>
		</div>
	</div>

	<!-- work with us form -->
	<div class="overlay"></div>
	<div class="popup-holder popup-work-with-us">
		<div class="content">
			<h1>Forma parte de nuestro equipo</h1>
			<form class="form-horizontal">
				<!-- name -->
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombres</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nombre" placeholder="Nombres" required>
					</div>
				</div>

				<!-- lastname -->
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellidos</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="apellido" placeholder="Apellidos">
					</div>
				</div>

				<!-- email -->
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" name="email" placeholder="Email" required>
					</div>
				</div>

				<!-- phone -->
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-9">
						<input type="tel" class="form-control" name="telefono" placeholder="Teléfono">
					</div>
				</div>

				<!-- job position -->
				<div class="form-group">
					<label class="col-sm-3 control-label">Cargo al que aspira</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="cargo" placeholder="Cargo al que aspira">
					</div>
				</div>

				<!-- cv -->
				<div class="form-group">
					<label class="col-sm-3 control-label">Adjuntar CV</label>
					<div class="col-sm-9">
						<input type="file" name="cv">
					</div>
				</div>

				<div class="buttons">
					<button type="submit">Enviar</button>
				</div>
			</form>
		</div>
		<div class="popup-close">
			<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</div>
	</div>
<?php
	$url = get_template_directory_uri();
	$GLOBALS['script'] = <<<EOT
<script type="text/javascript" src="{$url}/js/jquery.matchheight.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="{$url}/js/functions_contact.js"></script>
EOT;
?>
<?php get_footer(); ?>