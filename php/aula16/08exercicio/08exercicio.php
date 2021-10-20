<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao str_word_count</title>		
</head>

<body>
 <div>
 
 
 <?php
	$frase = "Eu vou estudar PHP agora";
	$cont = str_word_count($frase, 0);
	print($cont);
 ?>
</div>
</body>
</html>