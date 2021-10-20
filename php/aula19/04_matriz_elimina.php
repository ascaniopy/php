<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Eliminar um elemento de uma Matriz</title>		
</head>

<body>
 <div>
 <pre>
 <?php
	$v = array("A", "J", "M", "X", "K");
	print_r($v);	
	array_pop($v);   //Elimina um elemento no final, desaloca(Pilha).
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>