<<?php 
	header('Content-Type: image/png');
	$im = @imagecreatefrompng($imgsrc);
	$dist  = imagecreatetruecolor(200, 100);
	imagecopyresampled($dist, $im, 0, 0, 0, 5000, 200, 100, 20000, 20000);
	imagepng($dist);
?>