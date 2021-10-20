<?php
	function calculator($n1, $n2, $op) {
		
		if ($op == "+") {
			return $n1 + $n2;
		}
		
		
		elseif ($op == "-") {
			return $n1 - $n2;
		}
	
		
		elseif ($op == "*") {
			return $n1 * $n2;
		}
	
		
		elseif ($op == "/") {
			return $n1 / $n2;
		}
		
		
		else {
			return "ERRO!";
		}
	}
	echo calculator(5, 6, "+");
	
	/* Outra maneira
	$var = calculator(4, 6, "+");
	echo $var; */
	
	
?>