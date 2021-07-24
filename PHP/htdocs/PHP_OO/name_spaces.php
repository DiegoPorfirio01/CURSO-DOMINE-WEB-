<?php  

/*
namespace B;

class Cliente implements \A\ClienteCadastro{

	public $nome = 'fulano1';
	
	public function __construct(){
		echo "<pre>";
		print_r(get_class_methods($this));
		echo "<pre/>";

	}
	public function __get($attr){
		return $this->$attr;
	}
	public function salvar(){
		echo "salvar";
	}
	public function excluir(){
		echo "excluir";
	}

	}

interface ClienteCadastro {
	public	function salvar();
}


namespace A;

class Cliente implements \B\ClienteCadastro{

	public $nome = 'fulano2';
	public function __construct(){
		echo "<pre>";
		print_r(get_class_methods($this));
		echo "<pre/>";
	}
	public function __get($attr){
		return $this->$attr;
	}
	public function excluir(){
		echo "excluir";
	}
	public function salvar(){
		echo "salvar";
	}
	
}

interface ClienteCadastro{
	public function excluir();
}


$y = new \A\Cliente();
print_r($y);
echo $y->__get('nome');
echo "<br/>";
$y->salvar();
echo "<br/>";
$y->excluir();
*/

//-------------AULA 2 -------------- //

require "./bibliotecas/lib1/lib1.php";
require "./bibliotecas/lib2/lib2.php";

use B\Cliente;
use A\Cliente as c2;

$y = new Cliente;
echo "<pre>";
print_r($y);
echo "<pre/>";
echo "<br>";
echo $y->__get('nome');


$x = new c2;
echo "<pre>";
print_r($y);
echo "<pre/>";
echo "<br>";
echo $y->__get('nome');




 ?> 