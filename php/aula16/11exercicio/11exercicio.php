<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao implode</title>		
</head>

<body>
 <div>
 
 
 <?php
	$vetor[0] = "Curso";
	$vetor[1] = "em";
	$vetor[2] = "Video";
	$texto = implode("#", $vetor);
	print($texto);
 ?>
</div>
</body>
</html>