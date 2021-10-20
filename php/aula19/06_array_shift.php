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
	array_shift($v);   //Elimina um elemento no inicio de um vetor(Pilha).
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>