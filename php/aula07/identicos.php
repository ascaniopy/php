<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "utf-8"/>
	<link rel = "stylesheet" href = "_css/estilo.css"/>
	<title>Operadores Relacionais Identicos</title>
		
</head>

<body>
 <div>
 
 <?php
	$a = 3;
	$b = "3";
	$r = ($a === $b) ? "SIM" : "NAO";
	echo "As variaveis A e B sao identicas? $r";
 ?>
</div>
</body>
</html>