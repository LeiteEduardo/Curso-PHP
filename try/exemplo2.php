<?php 

function trataNome($name){
	if (!$name) {
		throw new Exception("Nenhum nome foi infromado<br/>", 1);
		
	}
	echo ucfirst($name)."<br/>";
}

try {
	trataNome("Eduardo");
	trataNome("");
} catch (Exception $e) {
	echo $e->getMessage();
} finally{
	echo "Executou o bloco TRY!";
}

?>