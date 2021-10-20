<?php
	function mediaSexo($arrNotas, $arrSexos) {
		$totalNotas = 0;
		
		foreach ($arrNotas as $nomeDoAluno => $notaFinalDisciplina) {
			$totalNotas += $notaFinalDisciplina;
		} 
		
		$totalSexos = 1;
		
		foreach ($arrSexos as $nomeDoAluno => $sexoDoAluno) {
			
		}
		
		return $totalNotas / $totalSexos;	
	}
	
	$arrNotas = Array("joao"=>8, "jose" =>10, "lu"=>8);
	$arrSexos = Array("joao"=>"M", "maria"=>"F", "lais"=>"F");
	
	echo mediaSexo($arrNotas, $arrSexos);
?>