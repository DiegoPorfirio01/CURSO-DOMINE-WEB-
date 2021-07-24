<?php 


interface Humano {
	public function caminhar();
}

interface Peixe {
	public function nadar(); 
}

interface Aves {
	public function voar();
}

interface Animal {
	public function iracional();
}
interface AnimalPensante extends Animal{
	public function pensamento();
}


class Codorna implements Aves {
	public function voar(){
		echo 'voando';
	}
}

class Human implements AnimalPensante {
	public function iracional(){
		echo "sistemaReptiliano";
	}

	public function pensamento(){
		echo "pensando....";
	}



}

class Pinguin implements Aves {
	public function voar(){
		echo "voando";
	}


}


class Piriquito implements aves {
	public function voar(){
		echo "voando";
	}
	}


class SerHumano implements Humano,Peixe {
	public function caminhar(){
		echo "caminhando";
	}

	public function nadar(){
		echo "nadando";
	}
}

class ET implements Humano {
	public function caminhar(){
		echo 'caminhando';
	}
}



$x = new Piriquito();
	$x->voar(); 
	echo "<br>";

$y = new SerHumano();
	$y->caminhar();
	echo "<br>";
	$y->nadar();
	echo "<br/>";

$z = new ET();
	$z->caminhar();
	

$u = new Codorna();
	echo "<br/>";
	$u->voar();
	echo "<br>";

$i = new Human();
	$i->iracional();
	echo "<br>";
	$i->pensamento();


		


 ?>