<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao strpos</title>		
</head>

<body>
 <div>
 
 
 <?php
	$frase = "Estou aprendendo PHP";
	$pos = strpos($frase, "PHP");
	echo "$frase<br/>A string foi encontrada na posicao $pos";
 ?>
</div>
</body>
</html>