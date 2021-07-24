<?php      


class Carro extends Veiculo {

	public $teto_solar = true;
	

	function abrirTetoSolar() {

		echo "abrir teto solar";
	}

	function __construct($cor,$placa){

		$this->cor = $cor;
		$this->placa = $placa;

}


}



class Moto extends Veiculo { 

	public $guidon = true;

	
	function __construct($cor,$placa){

		$this->cor = $cor;
		$this->placa = $placa;
	}
	function trocarMarcha() {
		echo "trocar a marcha com a mão";

	}
	
}	
	
class Veiculo { 

	public $cor = null;
	public $placa = null;
	

	function acelerar(){
		echo "acelerar";

	}

	function freiar() {
		echo "freiar";
	}

	function trocarMarcha(){
		echo "trocar marcha com a mão";
	}

}

$carro = new Carro('vermelho','placa0101');
$carro->trocarMarcha();

echo "<br>";

$moto = new Moto('azul','placa020202');
$moto->trocarMarcha();


?>