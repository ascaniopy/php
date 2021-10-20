<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Exemplo de contador</title>		
</head>

<body>
 <div>
 <h3>Testando contador regressivo</h3>
 
 <?php
	$c = 10;
	do {
		echo $c." ";
		$c--;
	}
	while ($c >= 1); 
 ?>
</div>
</body>
</html>