<?php
	// Calcular angulos
	$iVotos1 = $_REQUEST["votos1"];
	$iVotos2 = $_REQUEST["votos2"];
	$iTotal = $iVotos1 + $iVotos2;
	
	$iPorcentaje1 = round(($iVotos1/$iTotal)*100,2);
	$iAngulo1 = 3.6 * $iPorcentaje1;
	
	$iPorcentaje2 = round(($iVotos2/$iTotal)*100,2);
	$iAngulo2 = 3.6 * $iPorcentaje2;

	// Textos
	$sVoto1 = "Buena {$iVotos1} votos [{$iPorcentaje1}%]";
	$sVoto2 = "Regular {$iVotos2} votos [{$iPorcentaje2}%]";

	// Crear imagen
	$oImg = imagecreate(300, 300);
	$sColor = imagecolorallocate($oImg, 239, 239, 239); // rgb(239,239,239)
	$sColor1 = imagecolorallocate($oImg, 23, 134, 154); // rgb(23,134,154)
	$sColor2 = imagecolorallocate($oImg, 95, 154, 23); // rgb(95,154,23)
	$sColorText = imagecolorallocate($oImg, 35, 35, 35);

	// mostrar grafico
	imagefilledrectangle($oImg, 0, 0, 300, 300, $sColor);
	// Pie Chart
	imagefilledarc($oImg, 150, 120, 200, 200, 0, $iAngulo1, $sColor1, IMG_ARC_PIE);
	imagefilledarc($oImg, 150, 120, 200, 200, $iAngulo1, 360, $sColor2, IMG_ARC_PIE);

	imagefilledrectangle($oImg, 60, 250, 80, 260, $sColor1);
	imagefilledrectangle($oImg, 60, 270, 80, 280, $sColor2);
	// imagefilledarc(image, cx, cy, width, height, start, end, color, style)
	imagestring($oImg, 3, 90, 250, $sVoto1, $sColorText);
	imagestring($oImg, 3, 90, 270, $sVoto2, $sColorText);


	header("Content-type: image/png");
	imagepng($oImg);
	imagedestroy($oImg);
?>
