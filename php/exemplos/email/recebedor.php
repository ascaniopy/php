<div>
<?php
	if (isset ($_POST["email"]) && empty($_POST["email"]) == false)
	
		{$email = $_POST["email"];
		echo "O Email enviado eh: ".$email;
		}
?>
<a href="recebedor.html">Voltar</a>
</div>