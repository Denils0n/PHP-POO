<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Classe Som</title>
</head>
<body>


	<?php 

		require_once 'Som.php';

		$s1 = new Som;
		$s1 -> volume = "50%";
		$s1 -> interferencia = true;
		$s1 -> ligado = true;
		$s1 -> Tocar();
		print_r($s1);
	?>


</body>
</html>