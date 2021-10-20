<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Aula 02 - POO</title>
		
	</head>
	
	<body>
		<pre>
		<?php
			require_once 'Caneta.php';
			
			$c1 = new Caneta;
			$c1->cor = "Azul";
			$c1->ponta = 0.5;
			
			$c1->tampar();
			
			print_r($c1);
			
			echo "<br/>";
			echo "<br/>";
			
			$c2 = new Caneta; //Instancia diferente de uma mesma classe
			$c2->cor = "Verde";
			$c2->carga = 50;
			
			$c2->tampar();
			
			print_r($c2);	
		?>
		</pre>
	</body>
</html>