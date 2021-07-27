<?php  

$qualSuaIdade = 80;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

$salario = -50;

if ($qualSuaIdade < $idadeCrianca) {
	echo "Criança";
}else if($qualSuaIdade < $idadeMaior){
	echo "Adolecente";
}else if($qualSuaIdade < $idadeMelhor){
	echo "Adulto";
}else{
	echo "Idoso";
}

echo "<br>";

echo ($qualSuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

echo "<br>";

if($salario < 880){
	echo "Ganha mal";
}else if($salario < 1500){
	echo "Ganha razoavel";
}else{
	echo "Ganha bem";
}

?>