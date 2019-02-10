<!DOCTYPE html>
<html>
<head>
	<title>Hands On</title>
</head>
<body>
	<?php
		$number1 = $_POST['number1'];
		$number2 = $_POST['number2'];
		$calculate = $number1 + $number2;
		
		echo "The sum of ".$number1. " & " .$number2. " is "  . $calculate;
		
	?>
</body>
</html>
