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
	$ano = $_GET["an"];
	$idade = 2016 - $ano;
	echo "Quem nasceu em $ano tem idade de $idade anos";
	$tipo = ($idade >= 18 and $idade <65) ?"OBRIGATORIO" : "NAO OBRIGATORIO";
	echo " e dessa forma seu voto eh $tipo";
 ?>
</div>
</body>
</html>