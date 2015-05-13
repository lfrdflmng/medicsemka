<?php
 /*
 * @package WordPress
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
					<?php
						/*$args = array(
							'posts_per_page' => 10,
							'post_type' => 'post'
						);

						$items = get_posts( $args );*/

						foreach ($posts as $item) :
							$img = get_blog_image($item, 'medium');
					?>
					<article class="fadeIn">
						<a href="<?php print_link($item); ?>">
							<div class="row">
								<!-- image -->
								<div class="col-sm-6">
									<figure style="background-image:url(<?php echo $img; ?>)"></figure>
								</div>
								<!-- content -->
								<div class="col-sm-6">
									<h1><?php print_title($item); ?></h1>
									<p><?php print_blog_content($item, false); ?></p>
								</div>
							</div>
						</a>
					</article>
					<?php endforeach; ?>
				</div>
			</div>

			<!-- sidebar -->
			<div class="col-sm-4">
				<!-- subscribe box -->
				<?php include('templates/subscribe-box.php'); ?>

				<div class="separator"></div>

				<!-- categories -->
				<?php include('templates/blog-categories.php'); ?>

				<div class="separator"></div>

				<!-- social icons -->
				<div class="social-box">
					<ul class="social-icons">
						<?php include('templates/social-icons.php'); ?>
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