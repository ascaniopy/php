<?php
	$arr = Array(60, 40, 10);
		echo number_format(array_sum($arr) / count(array_filter($arr)), 2);	
?>