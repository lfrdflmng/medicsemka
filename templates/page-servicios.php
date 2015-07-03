<?php
 /*
 * Template Name: Servicios
 * @subpackage MedicSemka
 * @since 1.0
 */

//$page_vars = get_post_custom( get_page_by_path('servicios')->ID );

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

get_header(); ?>

	<div class="container default">
		<!-- header -->
		<div class="row">
			<div class="col-sm-12">
				<div class="title lightblue-bg">
					<h1 class="magictime slideLeftRetourn">Nuestros Servicios</h1>
				</div>
			</div>
		</div>

		<div class="separator"></div>
		<div class="separator"></div>

		<div class="page-content">
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
					<!--<a href="<?php echo get_page_by_path('contacta-asesor')->guid; ?>">-->
					<a href="?page_id=117">
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
		</div>

		
		<div class="title lightblue-bg">
			<h1 class="magictime slideLeftRetourn">Directorio</h1>
		</div>

		<div class="row">
			<div class="col-sm-2">
				<ul class="initials">
				<?php
					$args = array(
						'type'			=> 'post',
						//'hide_empty'	=> 1,
						//'exclude'		=> '',
						'taxonomy'		=> 'especialidad'

					);
					$types = get_categories( $args );
					$initials = array();

					//getting the initial letters
					$last = '';
					foreach($types as $type) {
						$char = ucfirst(substr($type->name, 0, 1));
						if ($last != $char) {
							$initials[] = $char;
						}
					}

					//outputing initials
					//$first = true;
					foreach ($initials as $initial) :
				?>
					<li><a href="#"<?php /*if ($first) { echo ' class="active"'; $first = false; };*/ ?> data-initial="<?php echo $initial; ?>"><?php echo $initial; ?></a></li>
				<?php
					endforeach;
				?>
				</ul>
			</div>

			<div class="col-sm-10 directorio-holder">
				<?php
					//another loop to get the items per specialty
					foreach ($types as $type) :
						$args = array(
							'posts_per_page' => -1,
							'post_type' => 'directorio',
							'especialidad' => $type->slug
						);
					
						//get the directory items
						$directorios = get_posts( $args );
					
						$char = ucfirst(substr($type->name, 0, 1));
						$first = true;
						foreach ($directorios as $directorio) :
							$vars = get_post_custom($directorio->ID);
							if ($first) :
							//$especialidad = get_the_terms($directorio->ID, 'especialidad');
				?>
				<h1 class="specialty directorio-<?php echo $char; ?>">
					<?php echo $type->name; ?>
				</h1>
				<?php
							endif;
				?>
				<div class="directorio directorio-<?php echo $char; ?>">
					<h1><?php echo $directorio->post_title; ?></h1>
					<h2><?php echo reset($especialidad)->name; ?></h2>
					<!-- horario -->
					<p>
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 
						<?php echo $vars['horario'][0]; ?>
					</p>
					<!-- direccion -->
					<p>
						<span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> 
						<?php echo $vars['direccion'][0]; ?>
					</p>
					<!-- telefono -->
					<p>
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 
						<?php echo $vars['telefono'][0]; ?>
					</p>
					<?php if (is_user_logged_in()) : //only logged in users will see this values ?>
					<div class="special">
						<!-- costo de la consulta -->
						<p>
							<span class="glyphicon glyphicon-tag" aria-hidden="true"></span> 
							<?php echo $vars['costo_consulta'][0]; ?>
						</p>
						<!-- descuento -->
						<p>
							<span class="glyphicon glyphicon-piggy-bank<?php /*asterisk*/ ?>" aria-hidden="true"></span> 
							<?php echo $vars['descuento'][0]; ?>
						</p>
					</div>
					<?php endif; ?>
				</div>
				<?php
							$first = false;
						endforeach;
					endforeach;
				?>
			</div>
		</div>

	</div>

<?php
	$url = get_template_directory_uri();
	$GLOBALS['script'] = <<<EOT
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.initials').find('a').click(function(e) {
			var a = $(this);
			var letter = a.attr('data-initial');
			
			$('.initials').find('a').removeClass('active');
			a.addClass('active');

			$('.specialty').hide();
			$('.directorio').hide();

			var selected = $('.directorio-' + letter);
			$.each(selected, function(i,o) {
				var jo = $(o);
				setTimeout(function() {
					jo.fadeIn()
				}, 100 + (i*100));
			});

			e.preventDefault();
			return false;
		});
	});
</script>
EOT;
?>
<?php get_footer(); ?>