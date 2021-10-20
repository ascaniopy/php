<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao str_pad</title>		
</head>

<body>
 <div>
 
 
 <?php
	$nome = "Guanabara";
	$novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
	print("Meu professor $novo e manero");
 ?>
</div>
</body>
</html>