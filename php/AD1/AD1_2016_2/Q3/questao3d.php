<?php
	function mediaAlunos($arrAlunos) {
		$totalNotas = 0;
		$totalAlunos = 1;
		
		foreach ($arrAlunos as $nomeDoAluno => $notaFinalDisciplina) {
			
			$totalNotas += $notaFinalDisciplina;
			
			$totalAlunos += $nomeDoAluno;
		} 
		
		return $totalNotas / $totalAlunos;	
	}
	
	$arrAlunos = Array("je" => 7.1, "lu" => 8.2, "jo" => 6.3);
	
	echo mediaAlunos($arrAlunos);
?>