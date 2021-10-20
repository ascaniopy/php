<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Aula 03 - POO</title>
		
	</head>
	
	<body>
	
		<?php
		Class Caneta {
			public $modelo;  //Atributos
			public $cor;
			private $ponta;
			protected $carga;
			protected $tampada;
		
			public function rabiscar() {
				if ($this->tampada == true) {
					echo "<p> ERRO: Não posso rabiscar!</p>";
				} 
				else {
					echo "<p>Estou rabiscando...</p>";
				}		
			}	
		
		
			public function tampar(){
				$this->tampada = true;
			}
		
		
			public function destampar(){
				$this->tampada = false;
			}
		}
		?>
		
	</body>
</html>