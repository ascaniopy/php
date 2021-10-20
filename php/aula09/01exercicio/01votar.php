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
	$a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
	$i = date("Y") - $a;
	echo "Voce nasceu em $a e tem $i anos.<br/>";
	
	if ($i >= 18) {
		$v = "Ja pode votar";
		$d = "Ja pode dirigir";
	}
	else {
		$v = "Nao pode votar";
		$d = "Nao pode dirigir";
	}
	echo "Com essa idade $v e tambem $d";
 ?>
 <a href = "01exercicio.html">Voltar</a>
</div>
</body>
</html>