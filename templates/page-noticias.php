<?php
 /*
 * Template Name: Noticias
 * @subpackage MedicSemka
 * @since 1.0
 */

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

get_header(); ?>

	<div class="container noticias">
		<!-- header -->
		<div class="row">
			<div class="col-sm-9">
				<div class="title match1 lightblue-bg">
					<h1 class="magictime slideLeftRetourn">Noticias</h1>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="match1 blank-space hidden-xs"></div>
			</div>
		</div>

		<div class="separator"></div>

		<div class="row">
			<!-- noticias -->
			<div class="col-sm-8">
				<div class="news-preview">
					<!-- to be looped -->
					<article class="fadeIn">
						<a href="#">
							<div class="row">
								<!-- image -->
								<div class="col-sm-6">
									<figure style="background-image:url(<?php echo get_template_directory_uri() ?>/img/img_placeholder.jpg)"></figure>
								</div>
								<!-- content -->
								<div class="col-sm-6">
									<h1>Lorem Ipsum</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
								</div>
							</div>
						</a>
					</article>
					<article class="fadeIn">
						<a href="#">
							<div class="row">
								<!-- image -->
								<div class="col-sm-6">
									<figure style="background-image:url(<?php echo get_template_directory_uri() ?>/img/img_placeholder.jpg)"></figure>
								</div>
								<!-- content -->
								<div class="col-sm-6">
									<h1>Lorem Ipsum</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
								</div>
							</div>
						</a>
					</article>
					<article class="fadeIn">
						<a href="#">
							<div class="row">
								<!-- image -->
								<div class="col-sm-6">
									<figure style="background-image:url(<?php echo get_template_directory_uri() ?>/img/img_placeholder.jpg)"></figure>
								</div>
								<!-- content -->
								<div class="col-sm-6">
									<h1>Lorem Ipsum</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
								</div>
							</div>
						</a>
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

<?php
	$url = get_template_directory_uri();
	$GLOBALS['script'] = <<<EOT
<script type="text/javascript" src="{$url}/js/jquery.matchheight.min.js"></script>
<script type="text/javascript" src="{$url}/js/functions_news.js"></script>
EOT;
?>
<?php get_footer(); ?>