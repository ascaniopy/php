<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao substr</title>		
</head>

<body>
 <div>
 
 
 <?php
	$frase = "Curso em video";
	$sub = substr($frase, 0, 5);
	print($sub);  //Curso
	echo "<br/>"; //pula linha
	print(substr($frase, 9, 5));  //Video
 ?>
</div>
</body>
</html>