<?php 

	/**
	 * 
	 */
	class Som {
		
		var $volume;
		var $interferencia;
		var $ligado;
		function tocar (){

			if ($this->ligado == true) {
				
				if ($this->interferencia == true) {
					echo("<p> o audio ta tocando mas esta tendo interferencia</p>");
				}else{

					echo("<p> o audio ta tocando mas sem interferencia</p>");

				}

			}


		}




	}


?>