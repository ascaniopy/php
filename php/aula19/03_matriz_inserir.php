<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Inserir um elemno em uma Matriz</title>		
</head>

<body>
 <div>
 <pre>
 <?php
	$v = array("A", "J", "M", "X", "K");
	print_r($v);	
	$v[] = "H";   //Ou array_push($v, "H");, Insere um elemento no final(Pilha).
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>