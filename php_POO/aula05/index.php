<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title></title>
	</head>
	
	<body>
		<pre>
		<?php
			require_once 'contaBanco.php';
			$p1 = new contaBanco();  //Jubileu
			$p2 = new contaBanco();  //Creuza
			
			$p1->abrirConta("cc");
			$p1->setNumConta(1111);
			$p1->setDono("Jubileu");
			$p1->depositar(300);
			
			
			$p2->abrirConta("cp");
			$p2->setNumConta(2222);
			$p2->setDono("Creuza");
			$p2->depositar(500);
			$p2->sacar(100);
			
			$p1->pagarMensal();
			$p2->pagarMensal();
			
			print_r($p1);
			print_r($p2);
		?>
		</pre>
	</body>
</html>

