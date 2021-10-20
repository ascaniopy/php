<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Exemplo de contador</title>		
</head>

<body>
 <div>
 <h1>Testando contador</h1>
 
 <?php
	$c = 1;
	while ($c <= 15) {
		echo $c. ",  ";
		$c++;
	}
 ?>
</div>
</body>
</html>