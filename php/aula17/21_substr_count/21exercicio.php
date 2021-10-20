<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao substr_count</title>		
</head>

<body>
 <div>
 
 
 <?php
	$frase = "Estou aprendendo PHP no Curso de PHP";
	$cont = substr_count($frase, "PHP");
	print("PHP foi encontrado $cont vezes");
 ?>
</div>
</body>
</html>