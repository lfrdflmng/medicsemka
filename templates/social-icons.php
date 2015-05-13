<?php
	$instagram = get_option('instagram1');
	$twitter = get_option('twitter1');
	$facebook = get_option('facebook1');
?>
<?php if (!empty($instagram)) : ?>
<li><a href="<?php echo $instagram; ?>" class="instagram"></a></li>
<?php endif; ?>
<?php if (!empty($twitter)) : ?>
<li><a href="<?php echo $twitter; ?>" class="twitter"></a></li>
<?php endif; ?>
<?php if (!empty($facebook)) : ?>
<li><a href="<?php echo $facebook; ?>" class="facebook"></a></li>
<?php endif; ?>