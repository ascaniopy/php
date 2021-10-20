<?php
	function primos($n) {
		for($i=2; $i<=$n; $i++)
			if(verifica_primo($i))
				echo $i." ";
	}
	function verifica_primo($n) {
		$bool = true;
		for($i=2; $i<$n; $i++) {
			if(($n % $i) == 0) {
				$bool = false;
				break;
			}
		}
		return $bool;
	}
	echo primos(50);
?>