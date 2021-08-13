<?php

class Conexao {

private $host ='localhost';
private $dbname = 'php_com_pdo';
private $user = 'root';
private $pass = '';

public function conectar(){
	try{

		$conexao = new PDO(
			"sql:host=$this->host;dbname=$this->dbname",
			"$this->user",
			"$this->pass"
		);

		return $conexao;


	}catch(PDOExeption $e){

		echo "<p>" . $e->getMessage() . "</p>";

		}


	}


}



?>