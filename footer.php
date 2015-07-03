<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage MedicSemka
 * @since 1.0
 */

	$company_link = get_page_by_path('la-empresa')->guid;

	$home_id = get_page_by_path('inicio')->ID;

	$address = get_post_meta($home_id, 'direccion_contacto', true);
	$copyrights = get_post_meta($home_id, 'derechos_autor', true);
?>

	<footer>
		<div class="container">
			<div class="row">
				<!-- la empresa -->
				<div class="col-sm-4">
					<h2>
						<a href="<?php echo $company_link; ?>">La Empresa</a>
					</h2>
					<ul>
						<li><a href="<?php echo $company_link; ?>#nosotros">¿Quiénes somos?</a></li>
						<li><a href="<?php echo $company_link; ?>#mision_vision">Misión y visión</a></li>
						<li><a href="<?php echo $company_link; ?>#beneficios">Beneficios</a></li>
					</ul>
				</div>

				<!-- contacto -->
				<div class="col-sm-4">
					<h2>
						<a href="<?php echo $contacto = get_page_by_path('contacto')->guid; ?>">Contacto</a>
					</h2>
					<p>
						<?php echo $address; ?>
						<!--Paseo Meneses, Edif. Ana frente al BDO, 1er piso, oficina 3<br>
						Ciudad Bolívar, Edo. Bolívar Venezuela.-->
					</p>
				</div>

				<!-- afiliate -->
				<div class="col-sm-4">
					<h2>
						<a href="<?php echo $natural = get_page_by_path('afiliado-natural')->guid; ?>">Afíliate</a>
					</h2>
					<ul>
						<li><a href="<?php echo $natural; ?>">Personal Natural</a></li>
						<li><a href="<?php echo get_page_by_path('afiliado-profesional')->guid; ?>">Personal Jurídica</a></li>
						<li><a href="<?php echo get_page_by_path('comercio-afiliado')->guid; ?>">Comercios</a></li>
						<!--<li><a href="<?php echo $contacto; ?>">Contacto a un asesor</a></li>-->
						<li><a href="?page_id=117">Contacto a un asesor</a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 copyrights">
					<p><?php echo $copyrights; ?></p>
					<!-- MEDIC SEMKA C.A. Rif: J-40532918-1  -  Derechos reservados -->
				</div>
			</div>
		</div>
	</footer>

	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.m-custom-scrollbar.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/swiper.jquery.min.js'></script>
<?php wp_footer(); ?>
<?php if (isset($GLOBALS['script'])) echo $GLOBALS['script']; ?>
</body>
</html>