<?php
	$text = $_GET['txt'];
	$text = strtoupper($text[0]).substr($text,1,strlen($text));
	$size = 18;
	$sizex = 280;
	$sizey = 28;
	$x = 4;
	$y = 20;
	$color = 'efcfa4';
		$red = (int)hexdec(substr($color,0,2));
		$green = (int)hexdec(substr($color,2,2));
		$blue = (int)hexdec(substr($color,4,2));
	$img = imagecreatetruecolor($sizex,$sizey);
	ImageColorTransparent($img, ImageColorAllocate($img,0,0,0));
	
	imagefttext($img, $size, 0, $x, $y, ImageColorAllocate($img,$red,$green,$blue), '../images/martel.ttf', $text);
	
	header('Content-type: image/png');
	imagepng($img);
	imagedestroy($img);

?>
