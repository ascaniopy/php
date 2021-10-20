<?php
	function frequencia($aula, $falta) {
		$frequencia = ((($aula - $falta) * 100) / $aula);
		return $frequencia;
	}
	$aulas = 240;
	$faltas = 2;
	$freqFinal = frequencia($aulas, $faltas);
	echo "Frequencia: ".number_format($freqFinal, 2)."%";
?>