<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Sistema de votos</title>
	</head>
	<body>
		<?php
			if (isset($_REQUEST["enviar"])) {
				$sEnviar = $_REQUEST["enviar"];
				echo "<h1>Encuesta. Voto Registrado</h1>";
				$oConnect = mysql_connect("localhost", "root", "") or die("No se logró la conexión");
				mysql_select_db("db_uees_pruebas") or die("No se puede seleccionar la BD");
				// obtener votos
				$sSelect = "select vot_votos1, vot_votos2 from uees_votos";
				$oConsulta = mysql_query($sSelect, $oConnect) or die("Consulta falló");
				$aResult = mysql_fetch_array($oConsulta);
				// Actualizar votos
				$iVotos1 = $aResult["vot_votos1"];
				$iVotos2 = $aResult["vot_votos2"];
				$voto = $_REQUEST["vot_voto"];
				if ($voto == "buena") {
					$iVotos1 = $iVotos1 + 1;
				} elseif ($voto == "regular") {
					$iVotos2 = $iVotos2 + 1;
				}
				$sUpdate = "update uees_votos set vot_votos1={$iVotos1}, vot_votos2={$iVotos2}";
				$oUpdate = mysql_query($sUpdate, $oConnect) or die("Falló actualizacion"); 
				mysql_close($oConnect); ?>
				<p>Su voto <b>"<?php echo "$voto"; ?>"</b> ha sido registrado</p>
				<div><a href="encuesta.php">Ir a la encuesta</a></div>
				<?php
			} else { ?>
			<h1>Encuesta</h1>
			<p>¿Cómo catelogaría la enseñanza en la facultad de Ingeniería?</p>
			<form action="encuesta.php">
				<div><label for="voto">Buena:</label><input type="radio" name="vot_voto" id="voto" value="buena"></div>
				<div><label for="voto2">Regular:</label><input type="radio" name="vot_voto" id="voto2" value="regular"></div>
				<input type="submit" name="enviar" value="Votar">
			</form>
		<?php } ?>
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
	</body>
</html>