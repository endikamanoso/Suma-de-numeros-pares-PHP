<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sumas</title>
</head>
<body>
	<?php
		if (isset($_GET["numero"])) {
			$suma=0;
			$numero=$_GET["numero"];	
			$numero=$numero-1;	
			for ($i=$numero ; $i > 1 ; $i--) { 
				if ($i%2==0) {
					$suma=$suma+$i;
				}
			}
			$numero++;
			echo "<h1>La suma de los numeros pares anteriores a $numero es $suma</h1>";
			echo "<a href='index.php'>Regresar</a>";
			session_start();
			$_SESSION["correcto"]=$numero;
		}
		else{
			echo "Introduzca un número";
		}

	?>
</body>
</html>