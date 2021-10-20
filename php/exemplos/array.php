<pre>
<?php
	$v = array(array(1, 2, 3),
			   array(4, 5, 6),
			   array(7, 8, 9));
	print_r($v);
	
	
	echo "<br/>";
	echo "<br/>";
	
	$v[0][0] = $v[2][2];
	print_r($v);
?>
</pre>