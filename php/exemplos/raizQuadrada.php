<?php
	$val = 5;
	$x = &$val;
	$dig = array(0,1, 2, 3, 4, 5, 6, 7, 8, 9);
	
	foreach($dig as $x) {
		$val = $x*$x;
		echo $x.", ";
	}
?>