<?php 

spl_autoload_register(function($nomeClasse){
	require_once($nomeClasse.'.php');
	//var_dump($nomeClasse);
});

$carro = new DelRey();
$carro ->acelerar(80);	

?>