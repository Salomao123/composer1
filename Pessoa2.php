<?php 

class Pessoa {

	private $nome;
	private $idade;
	private $altura;

	function __construct ($nome, $idade, $altura){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->altura = $altura;
	}

	public function andar(){
		echo "estou andando ... ";
	}

	function identificacao(){
		return 
		"Nome: {$this->nome} 
		Idade: {$this->idade} 
		altura: {$this->altura}";
	}
}