<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage MedicSemka
 * @since 1.0
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 line-separator">
				<?php putRevSlider('main') ?>
				<?php /*echo do_shortcode('[rev_slider main]');*/ ?>
			</div>
		</div>

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
					<a href="#">
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

		<div class="separator"></div>

		<!-- highlighted news -->
		<div class="row">
			<!--div class="col-sm-3">
				<div class="blank-col hidden-xs"></div>
			</div-->
			<div class="col-sm-6">
				<div class="highlighted-news-lbl arrow_box">
					<span>Noticias</span>
					<h2>Destacadas</h2>
				</div>
				<div class="hearts-holder">
					<div class="heart-plus hp1"></div>
					<div class="heart-plus hp2"></div>
					<div class="heart-plus hp3"></div>
					<div class="heart-plus hp4"></div>
					<div class="heart-plus hp5"></div>
					<div class="heart-plus hp6"></div>
					<div class="heart-plus hp7"></div>
					<div class="heart-plus hp8"></div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="news-preview-holder">
					<div class="scrollable-content">

						<!-- to be looped -->
						<article>
							<figure style="background-image:url(<?php echo get_template_directory_uri() ?>/img/img_placeholder.jpg)"></figure>
							<a href="#">
								<h1>Hello world</h1>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a class="more" href="#">Leer más...</a>
						</article>
						<article>
							<figure style="background-image:url(<?php echo get_template_directory_uri() ?>/img/img_placeholder.jpg)"></figure>
							<a href="#">
								<h1>Hello world</h1>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a class="more" href="#">Leer más...</a>
						</article>
						<article>
							<figure style="background-image:url(<?php echo get_template_directory_uri() ?>/img/img_placeholder.jpg)"></figure>
							<a href="#">
								<h1>Hello world</h1>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a class="more" href="#">Leer más...</a>
						</article>
						<article>
							<figure style="background-image:url(<?php echo get_template_directory_uri() ?>/img/img_placeholder.jpg)"></figure>
							<a href="#">
								<h1>Hello world</h1>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a class="more" href="#">Leer más...</a>
						</article>
						<!-- end loop -->

					</div>
				</div>
			</div>

		</div>
		<!-- /highlighted news -->

		<div class="separator"></div>

		<!-- testimonials -->
		<div class="row">
			<div class="col-sm-offset-4 col-sm-4 text-center">
				<div class="cropped-arrow-box">
					<h1>Testimonios</h1>
				</div>
			</div>
		</div>
		<!-- slider container -->
		<div class="swiper-container testimonials-holder">
		    <div class="swiper-wrapper">
		        <!-- Slides -->
		        <!-- to be looped -->
		        <div class="swiper-slide">
					<article>
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/LFYNP40vfmE?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
						</div>
						<h1>Lorem ipsum 1</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</article>
				</div>
		        <div class="swiper-slide">
					<article>
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/LFYNP40vfmE?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
						</div>
						<h1>Lorem ipsum 2</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</article>
				</div>
		        <div class="swiper-slide">
					<article>
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/LFYNP40vfmE?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
						</div>
						<h1>Lorem ipsum 3</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</article>
				</div>
		        <div class="swiper-slide">
					<article>
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/LFYNP40vfmE?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
						</div>
						<h1>Lorem ipsum 4</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</article>
				</div>
				<!-- end loop -->
		    </div>
		    <div class="swiper-pagination hidden-xs"></div>
		    
		    <div class="swiper-button-prev hidden-xs"></div>
		    <div class="swiper-button-next hidden-xs"></div>
		    
		    <!-- If we need scrollbar -->
		    <div class="swiper-scrollbar"></div>
		</div>
		<!-- /testimonials -->

	</div>

<?php get_footer(); ?>
