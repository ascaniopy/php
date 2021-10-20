<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Vetor arsort</title>		
</head>

<body>
 <div>
 <pre>
 <?php
	$v = array(3, 5, 8, 2);
	print_r($v);	
	arsort($v);   //Ordena os elementos de um vetor do maior para o menor associado ao indice(juntos).
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>