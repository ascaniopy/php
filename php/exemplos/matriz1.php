<!DOCTYPE html>

<html lang = "pt-br">

<head>
	<meta charset = "utf-8"/>
	
	<title>Segundo exemplo PHP</title>
	
</head>

<body>
 <h1>Testando PHP</h1>
 
 <?php
	for ($j=5; $j>=0; $j--) {
		for ($i=1; $i<=$j; $i++) {
			$a=$i;
			$b=$i+1;
			echo "(".$a." ".$b.") ";
		}
		echo "<br>";
	}
?>

</body>
</html>