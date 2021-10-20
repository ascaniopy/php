<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao str_replace</title>		
</head>

<body>
 <div>
 
 
 <?php
	$frase = "Gosto de estudar MATEMATICA";
	$novaFrase = str_replace("MATEMATICA", "PHP", $frase);
	print($novaFrase);
 ?>
</div>
</body>
</html>