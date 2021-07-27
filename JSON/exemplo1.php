<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Eduardo',
	'idade'=> 25
));


array_push($pessoas, array(
	'nome'=>'Lara',
	'idade'=> 20
));

echo json_encode($pessoas);
 ?>