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
	$valor = $_GET["v"];
	$rq = sqrt($valor);
	echo "A raiz de $valor eh igual a " .number_format($rq, 2);
 ?>
 <a href = "01exercicio.html">Voltar</a>
</div>
</body>
</html>