<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Vetores</title>		
</head>

<body>
 <div>
 <pre>
 <?php
	$v = array("A", "J", "M", "X", "K");
	print_r($v);	
	array_unshift($v, "P");   //Coloca um elemento no inicio do vetor(Pilha).
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>