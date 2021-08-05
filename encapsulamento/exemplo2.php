<?php 

class Pessoa{

	public $nome = "Eduardo";
	protected $idade = "25";
	private $senha = "123456";

	public function verDados(){
		echo "Dados ".get_class($this).": <br/>";
		echo $this-> nome ."<br/>";
		echo $this-> idade ."<br/>";
		echo $this-> senha ."<br/>";
		echo "<br/>";
	}
}

class Programador extends Pessoa{
	public function verDados(){
		echo "Dados ".get_class($this).": <br/>";
		echo $this-> nome ."<br/>";
		echo $this-> idade ."<br/>";
		echo $this-> senha ."<br/>"; //Extends não pega o atributo private
	}
}

$objetoPessoa = new Pessoa();
$objetoProgramador = new Programador();
//echo $objeto->idade."<br/>"

$objetoPessoa->verDados();
$objetoProgramador->verDados();

?>