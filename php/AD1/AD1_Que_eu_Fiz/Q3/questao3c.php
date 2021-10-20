<?php
	function mediaSexo($arrNotas, $aaSexos, $arrPresenca) {
		$totalNotas = 0;
		$totalSexos = 1;
		$totalPresencas = 0;
		
		foreach ($arrNotas as $nomeDoAluno => $notaFinalDisciplina) {
			
			$totalNotas += $notaFinalDisciplina;
			
		} 
		
		foreach ($arrSexos as $nomeDoAluno => $sexoDoAluno) {
			
			$totalSexos += $sexoDoAluno;
			
		} 
		
		foreach ($arrPresenca as $nomeDoAluno => $presencaSuficienteInsuficiente) {
			
			$totalPresencas += $presencaSuficienteInsuficiente;
			
		} 
		
		return $totalNotas / $totalSexos;	
	}
	
	$arrNotas = Array("je" => 7.1, "lu" => 8.2, "jo" => 6.3);
	$arrSexos = Array("je" => 7.1, "lu" => 8.2, "jo" => 6.3);
	$arrPresenca = Array("je" => 7.1, "lu" => 8.2, "jo" => 6.3);
	
	echo mediaSexo($arrNotas, $arrSexos, $arrPresenca);
?>