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
	
	if ($i < 16) {
		$tipoVoto = "Nao vota.";
	}
	else {
		if (($i >= 16 and $i < 18) or ($i > 65)){
			$tipoVoto = "Voto opcional.";
		}
		else {
			$tipoVoto = "Voto obrigatorio.";
		}
	}
	
	echo "Para essa idade $tipoVoto";
 ?>
 <a href = "02exercicio.html">Voltar</a>
</div>
</body>
</html>