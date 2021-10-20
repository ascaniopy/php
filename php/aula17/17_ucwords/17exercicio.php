<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao ucwords</title>		
</head>

<body>
 <div>
 
 
 <?php
	$nome = "asCanio cAMara py";
	$nome2 = ucwords(strtolower($nome));
	echo "O seu nome e $nome2";
 ?>
</div>
</body>
</html>