<?php 
namespace B;

class Cliente implements ClienteCadastro{

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
	
	}

	
interface ClienteCadastro {
	public	function salvar();
}
