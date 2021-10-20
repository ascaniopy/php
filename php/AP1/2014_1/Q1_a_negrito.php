<?php
	function negrito($texto) {
		$texto = htmlentities($texto);
		echo '<b>'.$texto.'</b>';
	}
	
	$palavras = "Eu sou tricolor de coracao";
	echo negrito($palavras);
?>