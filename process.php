<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tablas de multiplicacion</title>
</head>
<body>
	<?php 

	$a = $_REQUEST['num'];
	for ($i=0; $i <=12 ; $i++) { 
		$res = $a * $i;
		echo "$a x $i = $res"."<br>";
	}
	 ?>
	
</body>
</html>