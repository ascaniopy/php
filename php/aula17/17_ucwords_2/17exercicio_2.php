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
	$nome = "asCanio cAMara py<br/>";
	echo $nome;
	
	echo "<br/>";
	
	$nome2 = strtolower($nome);	
	echo "O seu nome e $nome2";
	
	$nome3 = ucwords($nome2);
	
	echo "<br/>";
	
	echo "O seu nome e $nome3";
 ?>
</div>
</body>
</html>