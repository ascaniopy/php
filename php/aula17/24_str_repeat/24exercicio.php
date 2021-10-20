<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Funcao str_repeat</title>		
</head>

<body>
 <div>
 
 
 <?php
	$txt = str_repeat("Php", 5);
	print("O texto gerado foi $txt");
	echo "<br/>";
	print(str_repeat("-", 60));
	echo "<br/>";
	print(str_repeat("=", 40));
 ?>
</div>
</body>
</html>