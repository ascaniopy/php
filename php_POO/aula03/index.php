<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Aula 03 - POO</title>
		
	</head>
	
	<body>
		<pre>
		<?php
			require_once 'Caneta.php';
			
			$c1 = new Caneta;
			$c1->modelo = "BIC Cristal";
			$c1->cor = "Azul";
			
			//$c1->ponta = 0.5; vai dar ERRO, PRIVADO.
			//$c1->carga = 99; IDEM, PROTEGIDO.
			//$c1->tampada = true; IDEM, PROTEGIDO.
			
			$c1->rabiscar();
			$c1->tampar(); 
			print_r($c1);
			
		?>
		</pre>
	</body>
</html>