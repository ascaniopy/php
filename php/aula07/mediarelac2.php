<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "utf-8"/>
	<link rel = "stylesheet" href = "_css/estilo.css"/>
	<title>Operadores Relacionais, media</title>
		
</head>

<body>
 <div>
 
 <?php
	$nota1 = $_GET["n1"];
	$nota2 = $_GET["n2"];
	$m = ($nota1 + $nota2) / 2;
	echo "A media entre $nota1 e $nota2 eh $m";
	echo "<br/>A situacao do aluno eh: " .(($m < 6) ? "REPROVADO" : "APROVADO");
 ?>
</div>
</body>
</html>