<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "utf-8"/>
	<link rel = "stylesheet" href = "_css/estilo.css"/>
	<title>Exemplo de Decremento</title>
		
</head>

<body>
 <div>
 
 <?php
	$preco = $_GET["p"];
	echo "O preco do produto eh R$ ".number_format($preco, 2);
	$preco = $preco - ($preco*10/100);
	echo "<br/> E o novo preco com 10% de desconto sera R$ ".number_format($preco, 2);
	?>
</div>
</body>
</html>