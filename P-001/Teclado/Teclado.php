<?php

class Teclado {
	
	var $Tamanho;
	var $Cor;
	var $Tipo;
	var $TecladoNumerico;


	function status(){

		echo("<p> ola </p>");
		echo($this->$Tamanho);
		echo($this->$Cor);
		echo($this->$Tipo);
		echo($this->$TecladoNumerico);


	}

}



