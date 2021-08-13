<?php   

class Tarefa {

private $id;
private $id_status;
private $tarefa;
private $data_cadastro;

public function __get($att) {
	return $this ;
	
	}

public function __set($att, $valor){
	$this->$att = $valor;

	}

}




?>