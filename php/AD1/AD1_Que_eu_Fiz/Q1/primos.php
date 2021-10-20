<!DOCTYPE html>
<html lang = "pt-br">

<head>
<meta charset = "UTF-8"/>
	<title>Primos entre 1 e 1000</title>

</head>

<body>
<div>
<?php
	$num = $_GET["num"];
	$j = 2;
	
	while ($j <= 1000) {
		$i = 2;
		$primo = 1;
		
		while ($i < $j) {
			if ($j % $i == 0) {
				$primo = 0;
				break;	
			}
			$i++;
		}
		if ($primo) {
			echo $j." ";
		}
		$j++;
	}
	echo ".";
?>

<a href="primos.html">Voltar</a>
</div>
</body>
</html>
	