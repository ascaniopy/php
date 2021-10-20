<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Vetor krsort</title>		
</head>

<body>
 <div>
 <pre>
 <?php
	$v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K", 1=>"P");
	print_r($v);	
	krsort($v);   //Ordena os indices de um vetor do maior para o menor associado ao valor.(juntos).
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>