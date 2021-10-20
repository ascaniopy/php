 <?php
	$inicio = strtotime('01-02-2016');
	$fim = strtotime('03-06-2016');
	$qtdeSegundosDia = 24*60*60;
	$stringTituloDias = "Aulas de Computacao Grafica: <br/>";
	
	$aux = $inicio;
	while ($aux <= $fim) {
		$diaDaSemana = date('w', $aux);
		
		
		if($diaDaSemana == 1) {	
			$stringTituloDias .= ' segunda-feira '.date('d/m', $aux).',';
			$aux += $qtdeSegundosDia * 2;	
		}
		
		
		else if($diaDaSemana == 3) {	
			$stringTituloDias .= ' quarta-feira '.date('d/m', $aux).',';
			$aux += $qtdeSegundosDia * 2;	
		}
		
		
		else if($diaDaSemana == 5) {	
			$stringTituloDias .= ' sexta-feira '.date('d/m', $aux).',';
			$aux += $qtdeSegundosDia * 3;	
		}
		
	}		
	echo rtrim($stringTituloDias, ",").".";
 ?>