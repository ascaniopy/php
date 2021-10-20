<!DOCTYPE html>
<html lang = "pt-br">

<head>
<meta charset = "UTF-8"/>
	<title>Primos entre 1 e 1000</title>

</head>

<body>
<div>
<?php
	$limiteInferior = 2;
	$limiteSuperior = 1000;
	$strImpressao = "Numeros primos entre ".$limiteInferior." e ".$limiteSuperior.": <br/>";
	$contador = $limiteInferior;
	
	while($contador <= $limiteSuperior) {
		$primo = true;
		for($contadorPrimo=2; $contadorPrimo<$contador; $contadorPrimo++) {
			if($contador % $contadorPrimo == 0) {
				$primo = false;
			}
		}
	
		if($primo) {
			$strImpressao.=$contador." ";
		}
		$contador++;
	}
	echo $strImpressao.".";
?>
<br/>
<br/>
<a href="primos.html">Voltar</a>
</div>
</body>
</html>
	