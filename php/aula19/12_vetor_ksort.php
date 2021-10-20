<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Vetor ksort</title>		
</head>

<body>
 <div>
 <pre>
 <?php
	$v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K", 1=>"P");
	print_r($v);	
	ksort($v);   //Ordena os indices de um vetor do menor para o maior associado ao valor.(juntos).
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>