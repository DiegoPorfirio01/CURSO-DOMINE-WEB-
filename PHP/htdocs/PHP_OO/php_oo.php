<?php   


class Funcionario {

public $nome = null;
public $idade = null;
public $filhos = null;
public $cargo = null;



function __set($atributo , $valor){
	$this->$atributo = $valor;

}

function __get($atributo){
	return $this->$atributo;
}

function cadFunc() {
	return $this->__get('nome') . '<br>' . 'Filhos:' . $this->__get('filhos') . '<br/>' . 'cargo :' . $this->__get('cargo') .  '<br>' . 'idade: ' . $this->__get('idade');
}
}

$x = new funcionario();
$x-> __set('nome', 'Fulano');
$x-> __set('filhos', '1000');
$x-> __set('cargo', '....');
$x-> __set('idade', 100);
echo $x->cadFunc();
//echo 

echo "<hr/>";

$y = new funcionario();
$y-> __set('nome', 'Fulano100');
$y-> __set('filhos', '1000');
$y-> __set('cargo', '....');
$y-> __set('idade', 1000);
echo $y->cadFunc();

//echo $y-> __get('nome') . '<br>' . 'Filhos:' . $y-> __get('filhos') . '<br/>' . 'cargo :' . $y-> __get('cargo') .  '<br>' . 'idade: ' . $y-> __get('idade') ;


// ou  echo $x->cadFunc();








/*
function setNome($nome){
	$this->nome = $nome;
}

function setIdade($idade){
	$this->idade = $idade;
}


function getNome(){
	return $this->nome;
}

function getIdade(){
	return $this->idade;
}

function cadFunc() {
	return "$this->nome  tem $this->idade anos" ;
}

}

$x = new Funcionario();
$x-> setNome('fulano');
$x-> setIdade(22);
echo $x->exibirCadastroFuncionario();
echo "<br/>";

$x = new Funcionario();
$x-> setNome('fulano2');
$x-> setIdade(200);
echo $x->exibirCadastroFuncionario();
*/

?>