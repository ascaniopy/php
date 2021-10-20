<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao stripos</title>		
</head>

<body>
 <div>
 
 
 <?php
	$frase = "Estou aprendendo PHP";
	$pos = stripos($frase, "php");
	echo "$frase<br/>A string foi encontrada na posicao $pos";
 ?>
</div>
</body>
</html>