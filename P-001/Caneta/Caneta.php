<?php 

/**
 * 
 */
class Caneta {
	

	var $modelo;
	var $cor;
	var $ponta;
	var $carga;
	var $tampada;

	function rabiscar(){


		if ($this->$tampada == false){
			echo("<p> to rabiscando </p>");
		} else {
			echo("<p> a caneta esta tampada </p>");
		}
	}
	function tampar(){

		$this->$tampada = true;


	}

	function destampar(){

		$this->$tampada = false;

	}
}
	


