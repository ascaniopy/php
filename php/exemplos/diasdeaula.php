 <?php
	$inicio = strtotime('03-02-2014');
	$fim = strtotime('05-06-2014');
	$segDia = 24*60*60;
	$strDias = "Dias de aula:";
	
	$aux = $inicio;
	while ($aux <= $fim) {
		if (date('w', $aux) == 1) {
			$strDias .= ' seg '.date('d/m', $aux).',';
			$aux += 2 * $segDia;	
		}
		else
			if(date ('w', $aux) == 3) {
				$strDias .= ' qua '.date('d/m', $aux).',';
				$aux += 5 * $segDia;
			}
	}
	echo rtrim($strDias, ",").".";
 ?>