<?php
 /*
 * Template Name: Servicios
 * @subpackage MedicSemka
 * @since 1.0
 */

//$page_vars = get_post_custom( get_page_by_path('servicios')->ID );

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

get_header(); ?>

	<div class="container default">
		<!-- header -->
		<div class="row">
			<div class="col-sm-12">
				<div class="title lightblue-bg">
					<h1 class="magictime slideLeftRetourn">Nuestros Servicios</h1>
				</div>
			</div>
		</div>

		<div class="separator"></div>
		<div class="separator"></div>

		<div class="page-content">
			<!-- buttons -->
			<div class="row">
				<!-- afilieado persona natural -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="color-button green-bg">
						<a href="<?php echo get_page_by_path('afiliado-natural')->guid; ?>">
							<div class="heart-plus white"></div>
							<div class="label">
								<span>Afiliado Persona</span>
								<h1>Natural</h1>
							</div>
						</a>
					</div>
				</div>

				<!-- afilieado profesional -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="color-button purple-bg">
						<a href="<?php echo get_page_by_path('afiliado-profesional')->guid; ?>">
							<div class="heart-plus white"></div>
							<div class="label">
								<span>Afiliado</span>
								<h1>Profesional</h1>
							</div>
						</a>
					</div>
				</div>

				<!-- comercio afiliaado -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="color-button orange-bg">
						<a href="<?php echo get_page_by_path('comercio-afiliado')->guid; ?>">
							<div class="heart-plus white"></div>
							<div class="label">
								<span>Comercio</span>
								<h1>Afiliado</h1>
							</div>
						</a>
					</div>
				</div>

				<!-- Contacta a un asesor -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="color-button brown-bg">
						<a href="<?php echo get_page_by_path('contacto')->guid; ?>">
							<div class="heart-plus white"></div>
							<div class="label">
								<span>Contacta a un</span>
								<h1>Asesor</h1>
							</div>
						</a>
					</div>
				</div>
			</div>
			<!-- /buttons -->
		</div>
	</div>

<?php
	$url = get_template_directory_uri();
	$GLOBALS['script'] = <<<EOT

EOT;
?>
<?php get_footer(); ?>