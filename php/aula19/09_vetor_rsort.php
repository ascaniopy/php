<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Vetor rsort</title>		
</head>

<body>
 <div>
 <pre>
 <?php
	$v = array(3, 5, 8, 2);
	print_r($v);	
	rsort($v);   //Ordena os elementos de um vetor do maior para o menor.
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>