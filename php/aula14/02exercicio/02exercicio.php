<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Exemplo de funcao</title>		
</head>

<body>
 <div>
 
 
 <?php
	function soma($a, $b) {
		$s = $a + $b;
			echo "<p>A soma vale $s</p>";
	} 
	soma(3, 4);
	soma(8, 2);
	$x = 9;
    $y = 14;	
	soma($x, $y);	
 ?>
</div>
</body>
</html>