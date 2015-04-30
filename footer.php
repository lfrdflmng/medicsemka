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
?>

	<footer>
		<div class="container">
			<div class="row">
				<!-- la empresa -->
				<div class="col-sm-4">
					<h2>
						<a href="#">La Empresa</a>
					</h2>
					<ul>
						<li><a href="#">¿Quiénes somos?</a></li>
						<li><a href="#">Misión y visión</a></li>
						<li><a href="#">Beneficios</a></li>
					</ul>
				</div>

				<!-- contacto -->
				<div class="col-sm-4">
					<h2>
						<a href="#">Contacto</a>
					</h2>
					<p>
						Paseo Meneses, Edif. Ana frente al BDO, 1er piso, oficina 3<br>
						Ciudad Bolívar, Edo. Bolívar Venezuela.
					</p>
				</div>

				<!-- afiliate -->
				<div class="col-sm-4">
					<h2>
						<a href="#">Afíliate</a>
					</h2>
					<ul>
						<li><a href="#">Personal Natural</a></li>
						<li><a href="#">Personal Jurídica</a></li>
						<li><a href="#">Empresa</a></li>
						<li><a href="#">Contacto a un asesor</a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 copyrights">
					<p>MEDIC SEMKA C.A. Rif: J-40532918-1  -  Derechos reservados</p>
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