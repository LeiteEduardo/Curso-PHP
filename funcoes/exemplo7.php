<?php 

function soma(int ...$valores){

	return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(58, 9);
echo "<br>";
echo soma(2.4, 4.2);
echo "<br>";

?>