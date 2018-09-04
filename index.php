<?php
// function carregaClasse($nomeDaClasse){
// 	require ("classes/".$nomeDaClasse.".php");
// 	require ("classes/Projeto\".$nomeDaClasse.".php");
// }
// spl_autoload_register("carregaClasse");

require_once('vendor/autoload.php');

use Projeto\Pessoa;

$pessoa = new Pessoa("salomao batista", 21, '1.80');

$pessoa2 = new \Pessoa("salomao batista", 21, '1.80');


echo $pessoa->andar();
echo $pessoa2->andar();
