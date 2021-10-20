<?php 
class banco {
	$conn = null;
	
	//item a
	public conectar($ip, $porta, $schema, $usuario, $senha) {
		$conn = mysql_connect($ip, $porta, $usuario, $senha);
		mysql_select_db($schema, $conn);
	}
	
	//item b
	public inserirUsuario($nome, $endereco) {
		$query = "INSERT INTO cliente VALUES ('$nome', '$endereco';";
		mysql_query($query, $conn);
	}
	
	//item c
	public inserirConta(($numero, $saldo) {
		$query = "INSERT INTO conta VALUES ($numero, $saldo);";
		mysql_query($query, $conn);
	}
	
	//item d
	public removerUsuario($id) {
		$query = "DELET FROM cliente WHERE id = $id;";
		mysql_query($$query, $conn);
	} 
	
	//item e
	public alterarSaldo($numero, $saldo) {
		$query = "UPDATE cliente SET saldo = $saldo WHERE numero = $numero;";
		mysql_query($query, $conn);
	}
	
	//item f
	public associarConta($id, $numero) {
		$query = "INSERT INTO possui VALUES ($id, $numero);";
		mysql_query($query, $conn);
	}
	
	//item g
	public recuperarContasDeUsuario($id) {
		$query = "SELECT numConta FROM possui WHERE idcliente = $id;";
		$resultSet = mysql_query($query, $conn);
		return $resultSet;
	}
	
	//item h
	public desconectar() {
		mysql_close($conn);
	}
}
?>