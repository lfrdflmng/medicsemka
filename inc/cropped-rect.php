<?php
	$color = $_GET['c'];
	if (empty($color)) $color = '5E98C2';
	
header('Content-type: image/svg+xml');
?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="147.205px" height="50px" viewBox="0 0 147.205 50" enable-background="new 0 0 147.205 50" xml:space="preserve">
<polygon fill="#<?php echo $color; ?>" points="147.205,50 0,50 0,0 139.419,0"/>
</svg>