<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage MedicSemka
 * @since 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<link type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic" rel="stylesheet">
	
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.m-custom-scrollbar.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/magic.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/datepicker/css/bootstrap-datepicker3.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/awesome-bootstrap-checkbox.css" rel="stylesheet">
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="row header">
			<div class="col-sm-offset-4 col-sm-8">
				<!-- login module -->
				<div class="row sign-bar cropped">
					<!-- username and passowrd -->
					<div class="col-sm-8 col-xs-9">
						<div class="row">
							<!-- username -->
							<div class="col-sm-2 hidden-xs">
								<label for="username">Usuario </label>
							</div>
							<div class="col-sm-4 col-xs-6">
								<input type="text" id="username" name="username" placeholder="Usuario">
							</div>
							<!-- password -->
							<div class="col-sm-2 hidden-xs">
								<label for="password">Clave </label>
							</div>
							<div class="col-sm-4 col-xs-6">
								<input type="password" id="password" name="password" placeholder="Clave">
							</div>
						</div>
					</div>
					<!-- login button -->
					<div class="col-sm-1 col-xs-3">
						<button class="cropped">&#8629;</button>
					</div>
					<!-- sign up button -->
					<div class="col-sm-offset-0 col-sm-3 col-xs-offset-6 col-xs-6 text-right">
						<a class="cropped" href="<?php echo get_page_by_path('afiliado-natural')->guid; ?>">Afíliate</a>
					</div>
				</div>
				<!-- /login module -->
			</div>

			<header>
				<div class="row">
					<!-- logo -->
					<div class="col-sm-4">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<figure></figure>
							</a>
						</div>
					</div>

					<!-- menu -->
					<div class="col-sm-8">
						<?php wp_nav_menu( array( 'menu' => 'Superior' ) ); ?>
						<!--ul class="menu"-->
							<!--li><a href="#">La Empresa</a></li>
							<li><a href="#">Servicios</a></li>
							<li><a href="#">Noticias</a></li>
							<li><a href="#">Contacto</a></li>
						</ul-->
					</div>
				</div>
			</header>
		</div>
	</div>