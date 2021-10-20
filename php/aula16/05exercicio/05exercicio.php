<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao trim</title>		
</head>

<body>
 <div>
 
 
 <?php
	$nome = "   jose da silva   ";
	echo(strlen($nome));
	
	$novo = trim($nome);
	echo "<br/>";
	echo $novo;
	echo "<br/>";
	echo(strlen($novo));
 ?>
</div>
</body>
</html>