<?php
	function media($n1, $n2){
		$media = ($n1 + $n2) / 2;
		return $media;
	}
	
	$num1 = 7.65;
	$num2 = 8.18;
	$mediaNumero = media($num1, $num2);
	
	echo "A media eh:".number_format(($mediaNumero), 2);

?>