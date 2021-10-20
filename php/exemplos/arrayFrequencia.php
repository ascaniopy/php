<?php
	function frequencia($arrAulas, $arrFaltas) {
		
		$aulas = 240;
		$faltas = 0;
		
		foreach($arrAulas as $faltas => $frequencia) {
			$frequencia = ((($aulas - $faltas) * 100) / $aulas);
			
			if ($faltas<=30)
			$faltas++;
		}
		
		return $frequencia;
	}
	 
		
	
	
	$freqFinal = frequencia($arrAulas, $arrFaltas);
	echo "Frequencia: ".number_format($freqFinal, 2)."%";
?>