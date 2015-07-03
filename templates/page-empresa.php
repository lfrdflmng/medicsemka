<?php
 /*
 * Template Name: La Empresa
 * @subpackage MedicSemka
 * @since 1.0
 */

$page_vars = get_post_custom( get_page_by_path('la-empresa')->ID );

//$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

$content = $page_vars['descripcion'][0];
$mission = $page_vars['mision'][0];
$vision = $page_vars['vision'][0];

get_header(); ?>

	<div class="container default">
		<!-- header -->
		<div class="row">
			<div class="col-sm-12">
				<div class="title lightblue-bg">
					<h1 class="magictime slideLeftRetourn">¿Quienes Somos?</h1>
				</div>
			</div>
		</div>

		<div class="separator"></div>

		<div class="row">
			<div class="col-sm-12">
				<div class="color-box light">
					<p><b><?php echo nl3br($content); ?></b></p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php if (!empty($mission)) : ?>
			<div class="col-sm-6">
				<h1 class="magictime slideLeftRetourn">Misión y Visión</h1>
				<div class="color-box light match1">
					<p><?php echo nl3br($mission); ?></p>
				</div>
			</div>
			<?php endif; ?>

			<?php if (!empty($vision)) : ?>
			<div class="col-sm-6">
				<h1>Visión</h1>
				<div class="color-box light match1">
					<p><?php echo nl3br($vision); ?></p>
				</div>
			</div>
			<?php endif; ?>
		</div>

		<div class="separator"></div>
	</div>

<?php
	$url = get_template_directory_uri();
	$GLOBALS['script'] = <<<EOT
<script type="text/javascript" src="{$url}/js/jquery.matchheight.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$('.match1').matchHeight();
	});
</script>
EOT;
?>
<?php get_footer(); ?>