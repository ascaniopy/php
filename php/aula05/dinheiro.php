<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "utf-8"/>
	<link rel = "stylesheet" href = "_css/estilo.css"/>
	<title>Funcoes Dinheiro</title>
		
</head>

<body>
 <div>
 
 <?php
	$v1=8000;
	echo "<h2>Valor recebido: $v1 </h2>";
	echo "<br/> O valor de $v1 em moeda eh R$ ".number_format($v1, 2, ",", ".");
 ?>
</div>
</body>
</html>