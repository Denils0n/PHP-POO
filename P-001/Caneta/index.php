<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Criando uma caneta</title>
</head>
<body>

	<?php 

		require_once 'Caneta.php';
		$c1 = new Caneta;
		$c1->cor = "Verde";
		$c1->modelo = "bic";
		$c1->tampar();
		$c1->destampar();
		$c1->rabiscar();

		print_r($c1);

	?>


</body>
</html>