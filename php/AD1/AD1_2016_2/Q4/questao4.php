<?php
	$lista = array();
	
	function inserir($elemento) {
		global $lista;
		if (is_int($elemento) && !in_array($elemento, $lista)) {
			array_unshift($lista, $elemento);
		}
		else die("Entrada invalida");
	}
	
	
	function inserir_Fim($elemento) {
		global $lista;
		if (is_int($elemento) && !in_array($elemento, $lista)) { 
			$lista[] = $elemento;
		}
		else die("Entrada invalida");
	}
	
	
	function esta_vazia() {
		global $lista;
		return empty($lista);
	} 
	
	
	function remover() {
		global $lista;
		if (!esta_vazia()) {
			return array_shift($lista);
		}
	}
	
	
	function remover_fim() {
		global $lista;
		if (!esta_vazia()) {
			return array_pop($lista);
		}
	}
	
	
	function buscar($elemento) {
		global $lista;
		if (is_int($elemento)) {
			return array_search($elemento, $lista);
		}
		else die ("Busca invalida");
	}
	
	
	function proximo($elemento) {
		global $lista;
		$tamLista = count($lista);
		$indElemento = buscar($elemento);
		if ($indElemento >= 0 && $indElemento < $tamLista - 1)
			return $lista($indElemento + 1);
	}
	
	
	function anterior($elemento) {
		global $lista;
		$indElemento = buscar($elemento);
		if ($indElemento > 0)
			return $lista($indElemento - 1);
	}
?>