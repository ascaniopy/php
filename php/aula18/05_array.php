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
	$v = array (3 => 5,
				1 => 9,
				0 => 8,
				7 => 7);
	print_r($v);
	echo "<br/>";
	unset($v[0]);  //Desaloca(exclui o valor 8), tira da memoria
	print_r($v);
 ?>
 </pre>
</div>
</body>
</html>