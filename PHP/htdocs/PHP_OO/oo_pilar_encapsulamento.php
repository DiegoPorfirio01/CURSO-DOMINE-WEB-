<?php  

class Pai {

	private $nome = 'Fulan';
	protected $sobrenome = 'fulaninho';
	public $humor = 'indefinido';


	public function __get($attr) {
		return $this->$attr;
	}

	public function __set($attr, $value){
		$this->$attr = $value;
	}
/*
	public function getSobrenome() {
		return $this->sobrenome;
	}

	public function setSobrenome($value){
		if(strlen($value) >= 3) {
			$this->sobrenome = $value;
		} else { echo " <br/> digite um nome válido";}
	}

	public function __get($attr) {
		return $this->$attr;
	}

	public function __set($attr,$value){
		$this->$attr = $value;
	}

	private function formar(){
		echo "formando";

	}
	private function darOi(){
		echo "oii";

	}
	*/
	
	private function falar(){
		echo "falando...";
	}


	public function executarAcao(){
		$this->falar();
	
	}



}

class Filho extends Pai {
	public function __construct() {
		echo "<pre>";
		print_r(get_class_methods($this));
		echo "<pre/>";
	}
	
}



/*$x = new Pai();
echo $x->nome = 'fulano';
echo "<br/>";
echo $x->sobrenome = 'fulaninho';
echo "<br/>";
echo $x->executarAcao();
*/

$y = new Filho();
echo '<pre>';
print_r($y);
echo '</pre>';

echo "<pre>";
print_r(get_class_methods($y));
echo "<pre/>";

$y->executarAcao();


?>