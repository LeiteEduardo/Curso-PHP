<?php

$anoNascimento = 1996;

$nome1 = "Eduardo";
$sobrenome = "Leite";

$nomeCompleto = $nome1 . $sobrenome; //concatenar

echo($nomeCompleto);

exit();//para a execução aqui

echo("<br>");

echo $nome1;

//limpa a variavel
unset($nome1);

//se tiver info na variavel, ai printa
if (isset($nome1)) {
	echo $nome1;
}


?>