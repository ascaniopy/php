<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Passagem por referencia</title>		
</head>

<body>
 <div>
 
 
 <?php
	function teste(&$x) {
		$x = $x + 2;
		echo "<p>O valor de X e: $x</p>";
	} 
	$a = 3;
    teste($a);
		echo "<p>O valor de A e: $a</p>";
 ?>
</div>
</body>
</html>