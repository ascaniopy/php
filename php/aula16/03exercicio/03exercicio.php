<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao wordwrap</title>		
</head>

<body>
 <div>
 
 
 <?php
	$txt = "Aqui temos um texto gigante, criado pelo PHP e vai mostrar o funcionamento da funcao wordwrap";
	$res = wordwrap($txt, 20, "<br/>");
	echo $res;
 ?>
</div>
</body>
</html>