<?php
	function pascal($linha) {
		if($linha<1 || $linha>10)
			return;
		
		$res = array(array(1), array(1, 1));
		
		for($i=2; $i<$linha; $i++) {
			$tmp = array(1);
			
			for($j=1; $j<$i; $j++) {
				$tmp[] = $res[$i - 1][$j - 1] + $res[$i - 1][$j];
			}
			$tmp[] = 1;
			$res[] = $tmp;
		}
		$k = $linha - 1;
		
		foreach($res as $row) {
			echo str_repeat("\t", $k--).implode("\t\t", $row)."\n";
		}
	}
	
	echo "<pre>";
	pascal(8);
	echo "</pre>";
?>