<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Exemplo de for</title>		
</head>

<body>
 <div>
 
 
 <?php
	for ($i=1; $i<=10; $i++) {
		echo "$i ";
	}
	echo "<br/>";
	echo "<br/>";
	
	for ($i=10; $i>=1; $i--){
		echo "$i ";
	}
	echo "<br/>";
	echo "<br/>";
	
	for ($i=0; $i<=50; $i=$i+5){
		echo "$i ";
	}
	echo "<br/>";
	echo "<br/>";
	
	for ($i=20; $i>=0; $i=$i-2) {
		echo "$i ";
	}
 ?>
</div>
</body>
</html>