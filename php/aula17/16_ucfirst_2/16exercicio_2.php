<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao ucfirst</title>		
</head>

<body>
 <div>
 
 
 <?php
	$nome = "asCanio cAMara py";
	$nome2 = ucfirst(strtolower($nome));
	echo "O seu nome e $nome2";
 ?>
</div>
</body>
</html>