<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "utf-8"/>
	<link rel = "stylesheet" href = "_css/estilo.css"/>
	<title>Exemplo de Incremento</title>
		
</head>

<body>
 <div>
 
 <?php
	$preco = $_GET["p"]; //Tem que colocar o valor de p na URL(?p=500)
	echo "O preco do produto eh R$ $preco";
	$preco = $preco + ($preco*10/100);
	echo "<br/> E o novo preco com 10% de aumento sera R$ $preco";
	?>
</div>
</body>
</html>