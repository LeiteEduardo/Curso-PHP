<?php 

$pessoa = array(
	'nome' => 'Eduardo',
	'idade' => 25
);

foreach ($pessoa as &$value /*$value só altera no foreach*/) {
	if (gettype($value) === 'integer') $value += 10;

	echo $value;
	echo "<br>";
}

print_r($pessoa);



 ?>