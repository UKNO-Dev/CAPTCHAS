<?php

$chaine='23456789ABCDEFGHJKLMOPQRSTUVWXYZ';
$image =imagecreatefrompng('Images/globalkek.png');
$color =imagecolorallocate($image,255,0,0);
$font ='Fonts/DRAGON.ttf';

function getCode ($length, $chars) {
	$code = null;
	for ( $i=0; $i <$length; $i ++ )
	{
		$code .=$chars { mt_rand ( 0, strlen($chars) -1 ) };
	}
	return $code;
};
$code=getCode(5,$chaine);

$char1=substr($code,0,1);
$char2=substr($code,1,1);
$char3=substr($code,2,1);
$char4=substr($code,3,1);
$char5=substr($code,4,1);

imagettftext($image,80,-10,490,300,$color, $font, $char1);
imagettftext($image,80,20,550,300,$color, $font, $char2);
imagettftext($image,80,-35,610,300,$color, $font, $char3);
imagettftext($image,80,25,670,300,$color, $font, $char4);
imagettftext($image,80,-15,730,300,$color, $font, $char5);

header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
echo "aaaaaaaaaaaaaaaa"
?>