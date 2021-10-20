<?php
	function getProdutividade($arrSapatos, $arrHoras) {
		$totalSapatos = 0;
		
		foreach ($arrSapatos as $operario => $sapatos) {
			$totalSapatos += $sapatos;
		} 
		
		$totalHoras = 0;
		
		foreach ($arrHoras as $operario => $horas) {
			$totalHoras += $horas;
		}
		
		return $totalSapatos / $totalHoras;	
	}
	
	$arrSapatos = Array("joao" => 3, "jose" => 2);
	$arrHoras = Array("joao" => 1, "jose" => 2);
	
	echo getProdutividade($arrSapatos, $arrHoras);
?>