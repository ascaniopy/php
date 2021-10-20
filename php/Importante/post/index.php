<?php
	echo $_POST['name'];
?>

<html>
	<head>
		<title>Formularios</title>
	</head>
	
	<body>
		<form action="index.php" method="post"> 
		
			<label>Name:</label>
			<input type="text" name="name" value="">
			
			<label>Email:</label>
			<input type="text" name="email" value="">
			
			<label>Message:</label>
			<textarea name="message"></textarea>
			
			<input type="submit" value="Enviar">
	</body>
</html>