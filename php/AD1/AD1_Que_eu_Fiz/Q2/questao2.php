 <?php
	$inicio = strtotime('01-02-2016');
	$fim = strtotime('03-06-2016');
	$segDia = 24*60*60;
	$strDias = "Aulas de Computacao Grafica:";
	
	$aux = $inicio;
	while ($aux <= $fim) {
		if (date('w', $aux) == 1) { //w->0-6 dom-sab
			$strDias .= ' segunda-feira '.date('d/m', $aux).',';
			$aux += 2 * $segDia;	
		}
		else
			if(date ('w', $aux) == 3) {
				$strDias .= ' quarta-feira '.date('d/m', $aux).',';
				$aux += 5 * $segDia;
			}
			
			if(date ('w', $aux) == 5) {
				$strDias .= ' sexta-feira '.date('d/m', $aux).',';
				$aux += 8 * $segDia;
			}
	
	}
	echo rtrim($strDias, ",").".";
 ?>