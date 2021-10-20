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
	$n1=$_GET["a"];
	$n2=$_GET["b"];
	echo "A Soma vale: ". ($n1+$n2);
	echo "<br/>A Subtracao vale: ". ($n1-$n2);
	echo "<br/>A Multiplicacao vale: ". ($n1*$n2);
	echo "<br/>A Divisao vale: ". ($n1/$n2);
	echo "<br/>O Modulo vale: ". ($n1%$n2);
 ?>
</div>
</body>
</html>