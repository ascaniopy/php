<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Vetor asort</title>		
</head>

<body>
 <div>
 <pre>
 <?php
	$v = array(3, 5, 8, 2);
	print_r($v);	
	asort($v);   //Ordena os elementos de um vetor do menor para o maior associado ao indice(juntos).
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>