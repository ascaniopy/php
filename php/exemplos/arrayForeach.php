<?php
	$var1 = Array("color"=>"blue", "value"=>43); //Array associativo, sem chaves.
	$var2 = Array(0=>"gato", 1=>"cachorro", 2=>"vermelho", 3=>"azul");
	
	foreach($var1 as $key => $value){
		echo $value."<br>";		
	}
	
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	
	foreach($var2 as $key => $value){
		echo $value."<br>";		
	}
	
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	
	foreach($var2 as $key => $value){
		echo $key."=>".$value."<br/>";		
	}
	
?>