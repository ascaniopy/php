<?php
	function tabela($a) {
		$tabela = "<table border='1'>";
		
		foreach($a as $chave => $valor) {
			$tabela .= "<tr><td>$chave</td><td>";
			if(is_array($valor)) {
				$tabela .= tabela($valor);
			}
			else {
				$tabela .= $valor;
			}
			$tabela .= "</td></tr>";
		}
		$tabela .= "</table>";
		
		return $tabela;
	}
	echo tabela("A", "B", array("X"=>1, "Y"=>array(10, 20)), "C");
?>