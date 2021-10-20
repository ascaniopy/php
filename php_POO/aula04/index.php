<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title></title>
	</head>
	
	<body>
		<pre>
		<?php
			require_once 'caneta.php';
			
			$c1 = new caneta();
			$c1 -> setModelo("BIC");
			$c1 -> setPonta(0.5);
			
			print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}"
		?>
		</pre>
	</body>
</html>

