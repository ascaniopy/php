<!DOCTYPE html>         

<html lang = "pt-br">

<head>
	<link rel = "stylesheet" href = "_css/estilo.css"/>       
	<meta charset = "UTF-8"/>         
	<title>Vetores com foreach</title>		
</head>

<body>
 <div>
 
 <pre>
 <?php
	$v = array ("nome" => "Ana",
				"idade" => 23,
				"peso" => 78.5);
	foreach ($v as $k => $c) {  //foreach associativo
		echo "O campo $k possui conteudo $c<br/>";
	}
 ?>
 </pre>
</div>
</body>
</html>