<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Classe Teclado</title>
</head>
<body>


	<?php 

		require_once 'Teclado.php';
		$t1 = new Teclado;
		$t1->Cor = "Preto";
		$t1->TecladoNumerico = "sim";
		$t1->Tamanho = "Medio";
		$t1->Tipo = "mecanico";
		$t1->status(); 
		print_r($t1);

	?>


</body>
</html>