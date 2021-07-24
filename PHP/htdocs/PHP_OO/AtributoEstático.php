<?php  

class Exemplo {

	public static $atributo = 'sou estático';
	public $atributo1 = 'sou um normal';


	public static function metodo1(){
		echo "OI sou estático";
}
	public function metodo2(){
		echo "Oi, Sou normal";

	} 


}
//não preciso acessar a instância do atributo..
echo Exemplo::$atributo;
echo '<br>';
Exemplo::metodo1();
echo "<br/><br/>";

$y = new Exemplo();
echo $y->metodo2();


 ?>