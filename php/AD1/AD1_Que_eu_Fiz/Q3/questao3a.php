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
	
	$arrAlunos = Array("je" => 7, "lu" => 8, "jo" => 6);
	
	echo mediaAlunos($arrAlunos);
?>