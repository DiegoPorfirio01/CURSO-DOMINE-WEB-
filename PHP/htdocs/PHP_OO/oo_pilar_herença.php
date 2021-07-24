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

}

$carro = new Carro('vermelho','placa0101');

echo "<pre>";
print_r($carro);
echo "<pre/>";
$carro->acelerar();
echo "<br>";
$carro->abrirTetoSolar();

echo "<hr/>";

$moto = new Moto('azul','placa020202');
echo "<pre>";
print_r($moto);
echo "<pre/>";
$moto->freiar();
echo "<br/>";
$moto->acelerar();

?>