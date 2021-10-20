<?php
	function tabela($L, $C) {
		if($L<=0 || $C<=0) {
			echo "Parametros com valores incorretos!";
			return;
		}
		
		echo "<table>";
		for($i=0; $i<$C; $i++) {
			echo "<tr>";
			
			for($j=0; $j<$L; $j++) {
				echo "<td>&nbsp;</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>