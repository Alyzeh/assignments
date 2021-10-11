<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Assignment 3</title>

</head>
<body>
	<?php
		require_once "Calculator.php";
		$Calculator = new Calculator();
		echo $Calculator->calc("/", 10, 0); 
		echo $Calculator->calc("*", 10, 2); 
		echo $Calculator->calc("/", 10, 2); 
		echo $Calculator->calc("-", 10, 2); 
		echo $Calculator->calc("+", 10, 2); 
		echo $Calculator->calc("*", 10); 
		echo $Calculator->calc(10); 
	?>
</body>