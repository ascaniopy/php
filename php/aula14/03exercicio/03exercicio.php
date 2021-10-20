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
	function soma() {
		$p = func_get_args();
		$t = func_num_args();
		$s = 0;
		for ($i=0; $i<$t; $i++)	{
			$s = $s + $p[$i];
		}
		return $s;
	}
	$r = soma(3, 5, 10, 8, 7);
		echo "A soma dos valores e $r";
 ?>
</div>
</body>
</html>