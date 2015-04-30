<?php
 /*
 * Template Name: Gracias Afiliación
 * @subpackage MedicSemka
 * @since 1.0
 */

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

get_header(); ?>

	<div class="container post-afiliar <?php echo isset($_GET['p']) ? $_GET['p'] : 'natural'; ?>">

		<div class="separator"></div>

		<div class="row">
			<div class="color-box">
				<h1 class="magictime spaceInDown">Gracias por afiliarse a Medic Semka C.A,</h1>
				<p class="fadeIn">Recibirá un correo con un número de afiliado provicional hasta que confirmemos su pago y sus datos.</p>
			</div>
		</div>

		<div class="separator"></div>

		<div class="row">
			<div class="col-sm-offset-4 col-sm-4">
				<a class="large-button small-text" href="<?php echo home_url(); ?>">
					Volver a la página de Inicio
				</a>
			</div>
		</div>

	</div>

<?php
	$GLOBALS['script'] = '';
?>
<?php get_footer(); ?>