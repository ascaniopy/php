<?php
	$contador = 0;
	
	function quadradoPerfeito($n) {
		global $contador;
		$contador++;
		echo $resultado = $n * $n."  ";
		return $resultado;
	}
	while($contador <= 100) {
		quadradoPerfeito($contador);
	}
?>