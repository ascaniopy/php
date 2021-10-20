<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "utf-8"/>
	<link rel = "stylesheet" href = "_css/estilo.css"/>
	<title>Formularios</title>
		
</head>

<body>
 <div>
 
 <?php
	$nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Nao informado]";
	$ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
	$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
	$idade = date("Y") - $ano;
	echo "$nome e $sexo e tem $idade anos";
 ?>
 <a href = "02exercicio.html">Voltar</a>
</div>
</body>
</html>