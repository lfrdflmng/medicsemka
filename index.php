<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage MedicSemka
 * @since 1.0
 */

$inicio_vars = get_post_custom( get_page_by_path('inicio')->ID );

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

						<?php
							$args = array(
								'posts_per_page' => 5,
								'post_type' => 'post'
							);

							$items = get_posts( $args );

							foreach ($items as $item) :
								$img = get_blog_image($item, 'thumbnail');
						?>
						<!-- to be looped -->
						<article>
							<figure style="background-image:url(<?php echo $img ?>)">
								<a href="<?php print_link($item); ?>"></a>
							</figure>
							<a href="<?php print_link($item); ?>">
								<h1><?php print_title($item); ?></h1>
							</a>
							<p><?php print_blog_content($item, false); ?></p>
							<a class="more" href="<?php print_link($item); ?>">Leer más...</a>
						</article>
						<!-- end loop -->
						<?php endforeach; ?>
						<!--article>
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
						</article-->

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
		        <?php for ($i=1; $i<=4; $i++) : ?>
		        	<?php if (!empty($inicio_vars['t_video_' . $i][0])) : ?>
		        <div class="swiper-slide">
					<article>
						<div class="video-container">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $inicio_vars['t_video_' . $i][0]; ?>?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
						</div>
						<h1><?php echo $inicio_vars['t_titulo_' . $i][0]; ?></h1>
						<p><?php echo $inicio_vars['t_descripcion_' . $i][0]; ?></p>
					</article>
				</div>
					<?php endif; ?>
				<?php endfor; ?>
		        <!--div class="swiper-slide">
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
				</div-->
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
<?php
	$total_beneficiarios = (int)$inicio_vars['cantidad_beneficiarios'][0];
	$total_establecimientos = (int)$inicio_vars['cantidad_establecimientos_afiliados'][0];
	$total_empresas = (int)$inicio_vars['cantidad_empresas'][0];
	$GLOBALS['script'] = <<<EOT
<script type="text/javascript">
	function twoDigits(val) {
		return val < 10 ? ('0' + val) : val;
	}

	var _counter = null;

	function countUpItems() {
		var $ = jQuery;
		if (_counter != null) {
			clearInterval(_counter);
			_counter = null;
		}
		var total_beneficiarios = {$total_beneficiarios};
		var total_establecimientos = {$total_establecimientos};
		var total_empresas = {$total_empresas};
		var max = Math.max(total_beneficiarios, total_establecimientos, total_empresas);

		if (max > 0) {
			var holder = $('.current-sr-slide-visible');
			if (!holder.find('#num_beneficiarios').length) {
				holder = $('.rev_slider');
			}
			var beneficiarios = holder.find('#num_beneficiarios');
			var establecimientos = holder.find('#num_establecimientos');
			var empresas = holder.find('#num_empresas');

			var cur_max = 0;
			var cur_beneficiarios = 0;
			var cur_establecimientos = 0;
			var cur_empresas = 0;

			setTimeout(function() {
				_counter = setInterval(function() {
					var percent = cur_max / max;
					if (cur_beneficiarios < total_beneficiarios) {
						cur_beneficiarios = Math.round(total_beneficiarios * percent);
						beneficiarios.html( twoDigits(cur_beneficiarios) );
					}
					if (cur_establecimientos < total_establecimientos) {
						cur_establecimientos = Math.round(total_establecimientos * percent);
						establecimientos.html( twoDigits(cur_establecimientos) );
					}
					if (cur_empresas < total_empresas) {
						cur_empresas = Math.round(total_empresas * percent);
						empresas.html( twoDigits(cur_empresas) );
					}
					if (cur_max >= max) {
						clearInterval(_counter);
						_counter = null;
					}
					cur_max++;
				}, 50);
			}, 5500);
			return true;
		}
		return false;
	}

	jQuery(document).ready(function($) {
		$('.rev_slider').bind('revolution.slide.onchange', function(event, data) {
    		var current_slide = data.slideIndex;
    		if (current_slide <= 2) {
    			setTimeout(function() {
					countUpItems();
				}, 1000);
    		}
		});
	});
</script>
EOT;
?>
<?php get_footer(); ?>