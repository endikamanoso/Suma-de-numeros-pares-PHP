<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<div>
		<form action="suma.php" method="get">
			<label for="numero">Introduza un número</label>
			<input type="number" name="numero" id="numero">
		</form>
	</div>
	<?php
		session_start();
		echo ("<p>El último número introducido es el ".$_SESSION['correcto']."</p>");
	?>
</body>
</html>