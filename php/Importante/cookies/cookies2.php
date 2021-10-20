<?php
	setcookie("color", "red");
	echo "HELLO ".$_COOKIE['name'];
?>

<html>
	<head>
		<title></title>
	</head>

<body bgcolor = "<?php $_COOKIE['color'] ?>">
</body>
</html>