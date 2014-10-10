<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Resultados</title>
	</head>
	<body>
		<h1>Resultados votacion</h1>
		<?php
			$oConnect = mysql_connect("localhost", "root", "") or die("Conexion fallo");
			mysql_select_db("db_uees_pruebas") or die("Fallo seleccion de BD");
			$sSelect = "select * from uees_votos";
			$oConsulta = mysql_query($sSelect, $oConnect) or die("Query select fallo");
			$aResultado = mysql_fetch_array($oConsulta);
			$iVotos1 = $aResultado["vot_votos1"];
			$iVotos2 = $aResultado["vot_votos2"];
			$iTotal = $iVotos1 + $iVotos2;
			echo "<img alt='Resultado votaciones' src='grafica.php?votos1={$iVotos1}&votos2={$iVotos2}'>";
		?>
		<div><a href="encuesta.php">Ir a la encuesta</a></div>
	</body>
</html>