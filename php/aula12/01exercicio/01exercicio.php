<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Exemplo de contador</title>		
</head>

<body>
 <div>
 <h3>Testando contador progressivo</h3>
 
 <?php
	$c = 1;
	do {
		echo $c." ";
		$c++;
	}
	while ($c <= 10); 
 ?>
</div>
</body>
</html>