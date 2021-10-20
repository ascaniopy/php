<?php
	$a = "******<br>";
	$b = $a;
	for ($i=1; $i<=3; $i++) {
		$a = substr($a, 1);
		$b = $a.$b.$a;
	}
	echo $b;
?>