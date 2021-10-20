<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Testando include</title>		
</head>

<body>
 <div>
 
 
 <?php
	include "funcoes.php";
		echo "<h1>Testando novas funcoes</h1>";
	
	ola();
	mostraValor(4);
		echo "<h2>Finalizando programa...</h2>";
 ?>
</div>
</body>
</html>