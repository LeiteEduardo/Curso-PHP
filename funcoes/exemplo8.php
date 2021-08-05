<?php 

function soma(string ...$valores):string{

	return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(58, 9);
echo "<br>";
echo soma(2.4, 4.2);
echo "<br>";

?>