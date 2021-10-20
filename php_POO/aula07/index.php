<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
	<?php
		require_once 'lutador.php';
		$l = array();
		
		$l[0] = new lutador("Pretty Boy", "Franca", 30, 1.75, 68.9, 11, 2, 1);
		
		$l[1] = new lutador("PutScript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
		
		$l[2] = new lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
		
		$l[3] = new lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
		
		$l[4] = new lutador("UfoCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
		
		$l[5] = new lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
		
		$l[0]->status();
		$l[1]->status();
		$l[2]->status();
		$l[3]->status();
		$l[4]->status();
		$l[5]->status();
		
		$l[3]->apresentar();
	?>
	</body>
</html>