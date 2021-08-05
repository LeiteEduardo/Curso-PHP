<?php 
$data = array(
	"empresa"=>"Eduardo Dev"
);
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>