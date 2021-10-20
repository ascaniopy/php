<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Aula 02 - POO</title>
		
	</head>
	
	<body>
	
		<?php
		Class Caneta {
			var $modelo;  //Atributos
			var $cor;
			var $ponta;
			var $carga;
			var $tampada;
		
			function rabiscar() {
				if ($this->tampada == true) {
					echo "<p> ERRO: Não posso rabiscar!</p>";
				} 
				else {
					echo "<p>Estou rabiscando...</p>";
				}		
			}	
		
			function tampar(){
				$this->tampada = true;
			}
		
			function destampar(){
				$this->tampada = false;
			}
		}
		?>
		
	</body>
</html>