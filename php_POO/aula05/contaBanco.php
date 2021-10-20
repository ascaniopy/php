<?php
class contaBanco {
	//Atributos
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;
	//Métodos
	public function abrirConta($t) {
		$this->setTipo($t);
		$this->setStatus(true);
		if ($t == "cc") {
			$this->setSaldo(50);
		}
		elseif ($t == "cp") {
			$this->saldo = 150;
		}
	}
	
	public function fecharConta() {
		if ($this->getSaldo() > 0) {
			echo "<p>Conta ainda tem dinheiro, nao posso fecha-la!</p>";
		}
		elseif ($this->getSaldo() < 0) {
			echo "<p>Conta esta em debito. Impossivel encerrar!</p>";
		}
		else {
			$this->setStatus(false);
		}
	}
	
	public function depositar($v) {
		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo() + $v);
			//$this->saldo = $this->saldo + $V;
				echo "<p>Deposito de R$ $v na conta de ".$this->getDono()."</p>";
		}
		else {
			echo "<p>Conta fechada. Nao consigo depositar!</p>";
		}
	}
	
	public function sacar($v) {
		if ($this->getStatus()) {
			if ($this->getSaldo() > $v) {
				//$this->saldo = $this->saldo - $v;
				$this->setSaldo($this->getSaldo() - $v);
					echo "<p>Saque de R$ $v autorizado na conta da ".$this->getDono()."</p>";
			}
			else {
				echo "<p> Saldo insuficiente para saque.</p>";
			}			
		}
		else {
			echo "<p>Nao posso sacar de uma conta fechada.</p>";
		}
	}
	
	public function pagarMensal() {
		if ($this->getTipo() == "cc") {
			$v = 12;
		}
		else if ($this->getTipo == "cp") {
				$v = 20;	
		}
		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo() - $v);
			echo "<p>Mensalidade de R$ $v debitada na conta de " .$this->getDono()."</p>";
		}
		else {
			echo "<p> Problemas com a conta. Nao posso cobrar.</p>";
		}
	}
	//Métodos especiais
	public function __construct() {
		$this->setSaldo(0);
		$this->setStatus(false);
		echo "<p>Conta criada com sucesso.</p>";
	}
	
	function getNumConta() {
		return $this->numConta;
	}
	
	function getTipo() {
		return $this->tipo;
	}
	
	function getDono() {
		return $this->dono;
	}
	
	function getSaldo() {
		return $this->saldo;
	}
	
	function getStatus() {
		return $this->status;
	}
	
	function setNumConta($numConta) {
		$this->numConta = $numConta;
	}
	
	function setTipo($tipo) {
		$this->tipo = $tipo;
	}
	
	function setDono($dono) {
		$this->dono = $dono;
	}
	
	function setSaldo($saldo) { 
		$this->saldo = $saldo; //saldo é atributo, $saldo é variável
	}						   
	
	function setStatus($status) {
		$this->status = $status;
	}	
}	
?>