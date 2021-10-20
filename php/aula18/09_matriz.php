<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Matriz</title>		
</head>

<body>
 <div>
 
 <pre>
 <?php
	$n = array(array(2, 3),
		       array(3, 4),
			   array(9, 5));
	$n[0][1] = $n[2][0];     //troca, sai o 3 e entra o 9 na linha 0.
	print_r($n);
 ?>
 </pre>
</div>
</body>
</html>