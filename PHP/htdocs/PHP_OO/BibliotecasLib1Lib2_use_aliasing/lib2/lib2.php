<?php 
namespace A;

class Cliente implements ClienteCadastro{

	public $nome = 'fulano10';
	
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

	}

interface ClienteCadastro {
	public	function excluir();
}
