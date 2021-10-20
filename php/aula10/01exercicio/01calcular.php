<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Formularios</title>
		
</head>

<body>
 <div>
 
 <?php
	$n = isset($_GET["num"]) ? $_GET["num"] : 0;
	$o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
	switch ($o) {
		case 1:
			$r = $n*2;
			break;
		case 2:
			$r = $n*$n;
			break;
			
		case 3:
			$r = $n*$n*$n;
			break;
			
		case 4:
			$r = number_format(sqrt($n), 2); // ou $n^(1/2)
	}		
	echo "O resultado da operacao solicitada foi: <span class='foco'>$r</span><br/>"
 ?>
 <a href = "01exercicio.html" class="botao">Voltar</a>
</div>
</body>
</html>