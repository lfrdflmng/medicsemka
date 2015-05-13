<?php
	$args = array(
		//'show_count'         => 1,
		'use_desc_for_title' => 0,
		'exclude'            => '1',
		'hierarchical'       => 0,
		'title_li'           => '',
		//'echo'               => 1,
		//'taxonomy'           => 'category'
    );
?>
<div class="category-box">
	<h1>Categorías</h1>
	<ul>
		<?php wp_list_categories( $args ); ?>
		<!--li><a href="#">Lorem</a></li>
		<li><a href="#">Ipsum</a></li>
		<li><a href="#">Dolor</a></li>
		<li><a href="#">Sit amet</a></li>
		<li><a href="#">Consectetuer</a></li-->
	</ul>
</div>