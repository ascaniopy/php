<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "utf-8"/>
	<link rel = "stylesheet" href = "_css/estilo.css"/>
	<title>Exemplo de Funcoes</title>
		
</head>

<body>
 <div>
 
 <?php
	$v1=$_GET["x"];
	$v2=$_GET["y"];
	echo "<h2>Valores recebidos: $v1 e $v2</h2>";
	echo "<br/>O valor absoluto de $v2 eh:" .abs($v2);
	echo "<br/>O valor de $v1<sup>$v2</sup> eh:".pow($v1, $v2);
	echo "<br/>A raiz de $v1 eh:".sqrt($v1);
	echo "<br/>O valor de $v2 arredondado eh:".round($v2);
	echo "<br/> A parte inteira de $v2 eh:".intval($v2);
	echo "<br/> O valor de $v1 em moeda eh R$ ".number_format($v1, 2, ",", ".");
 ?>
</div>
</body>
</html>