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
		return $s;
	} 
	$x = 3;
    $y = 4;	
	$r = soma($x, $y);
		echo "A soma entre $x e $y e igual a $r";
	
 ?>
</div>
</body>
</html>