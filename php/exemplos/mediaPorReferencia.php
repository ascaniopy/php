<?php
	function media(&$media){
		$media = $media / 2;	
	}
	
	$num1 = 7.65;
	$num2 = 8.18;
		
	$soma = $num1 + $num2;
	
	media($soma);
	
	echo "A media eh:".number_format(($soma), 2);

?>