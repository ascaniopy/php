<?php
	/*echo $_POST['name']."<br/>";
	echo $_POST['email']."<br/>";
	echo $_POST['message']."<br/>";*/
	
	echo $_REQUEST['name']."<br/>";
	echo $_REQUEST['email']."<br/>";
	echo $_REQUEST['message']."<br/>";
?>

<html>
	<head>
		<title>Formularios</title>
		<style>
			fieldset input, fieldset textarea {
				width: 100%;
				margin-bottom: 10px;
			}
			fieldset {
				width: 400px;
			}
			legend {
				font-size: 26px;
			}
		</style>
	</head>
	
	<body>
		<form action="index.php" method="post"> 
			<fieldset>
				<legend>Sample Form</legend>
				
				<label>Name:</label>
				<input type="text" name="name" value="">
				
				<label>Email:</label>
				<input type="text" name="email" value="">
				
				<label>Message:</label>
				<textarea name="message"></textarea>
			</fieldset>	
			
			<input type="submit" value="Enviar">
		</form>	
	</body>
</html>