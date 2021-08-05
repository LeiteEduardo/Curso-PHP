<?php 

function ola($texto, $periodo="Bom dia."){
	return "Olá $texto! $periodo<br>";
}

echo ola("Eduardo");
echo ola("Eduardo", "");
echo ola("Eduardo", "Boa noite.");

 ?>