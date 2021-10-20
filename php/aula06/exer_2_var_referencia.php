<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "utf-8"/>
	<link rel = "stylesheet" href = "_css/estilo.css"/>
	<title>Exemplo de Decremento</title>
		
</head>

<body>
 <div>
 
 <?php
	$a = 3;
	$b = &$a; //$b é uma referência a $a
	$b = $b + 5;
	echo "A variavel A vale $a";
	echo "<br/>A variavel B vale $b";
 ?>
</div>
</body>
</html>