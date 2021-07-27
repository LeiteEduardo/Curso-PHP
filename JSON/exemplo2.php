<?php 

$json = '[{"nome":"Eduardo","idade":25},{"nome":"Lara","idade":20}]';

$data = json_decode($json, true);

var_dump($data);
 ?>