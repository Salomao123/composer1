<?php 

namespace Projeto;

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
		echo "estou correndo ... ";
	}

	function identificacao(){
		return "Nome: {$this->nome} <br/> Idade: {$this->idade} <br/> Altura: {$this->altura}";
	}
}