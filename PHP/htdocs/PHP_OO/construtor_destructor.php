<?php 


class Pessoa {

	public $nome = null;


function __construct($nome){
	
	$this->nome = $nome;
	
}

function __destruct(){
	echo "objeto removido";	
}



function __get($atributo){
	return $this->$atributo;
}

function vaiCorrer(){
	return $this->__get('nome') . ' vai correr';
}

}

$x = new Pessoa('ciclano');
echo $x->vaiCorrer();
//unset($x);


$y = new Pessoa('beltrano');
echo '<br/>'. $y->vaiCorrer();



?>