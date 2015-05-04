<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage MedicSemka
 * @since 1.0
 */

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

get_header(); ?>

	<!--article class="single">
		< ?php if (!empty($feat_image)) : ?>
		<figure></figure>
		< ?php endif; ?>

		<h1>< ?php print_title($post); ?></h1>

		<p>< ?php print_blog_content($post); ?></p>
	</article-->

	<div class="container noticias">
		<div class="row">
			<!-- noticia -->
			<div class="col-sm-8">
				<div class="news-preview">
					
					<article class="single fadeIn">
						<div class="row">
							<!-- content -->
							<div class="col-sm-12">
								<!-- image -->
								<?php if (!empty($feat_image)) : ?>
								<figure style="background-image:url(<?php echo $feat_image; ?>)"></figure>
								<br>
								<?php endif; ?>
								<h1><?php print_title($post); ?></h1>
								<div class="content">
									<?php print_blog_content($post); ?>
								</div>
							</div>
						</div>
					</article>

				</div>
			</div>

			<!-- sidebar -->
			<div class="col-sm-4">
				<!-- subscribe box -->
				<div class="subscribe-box">
					<h1>Recibe Nuestras Noticias en tu Email</h1>
					<form>
						<div class="input">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<input type="email" name="subscribe_email" required>
						</div>
						<div class="buttons">
							<button type="submit">Enviar</button>
						</div>
					</form>
				</div>

				<div class="separator"></div>

				<!-- categories -->
				<div class="category-box">
					<h1>Categorías</h1>
					<ul>
						<li><a href="#">Lorem</a></li>
						<li><a href="#">Ipsum</a></li>
						<li><a href="#">Dolor</a></li>
						<li><a href="#">Sit amet</a></li>
						<li><a href="#">Consectetuer</a></li>
					</ul>
				</div>

				<div class="separator"></div>

				<!-- social icons -->
				<div class="social-box">
					<ul class="social-icons">
						<li><a href="#" class="instagram"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="facebook"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>