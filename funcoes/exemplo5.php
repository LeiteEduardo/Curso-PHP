<?php 

$a = 10;

function trocaValor(&$a){

	$a += 50;
	return $a;

}

echo "$a <br>";
echo trocaValor($a);
echo "<br> $a";
echo trocaValor($a);
echo "<br> $a";
 ?>