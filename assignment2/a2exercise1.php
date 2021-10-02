<?php
	$x=1;
	$y=1;
	$lia="<li>";
	$lib="</li>";
	$finallist="<ul>";
	for ($x=1; $x<=4; $x++){
		$finallist.=$lia;
		$finallist.=$x;
		$finallist.="<ul>";
		for ($y=1; $y<=5; $y++){
			$finallist.=$lia;
			$finallist.=$y;
			$finallist.=$lib;
		};
		$finallist.="</ul>";
		$finallist.=$lib;
		$y=1;
	};
	$finallist.="</ul>";
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Exercise 1</title>
</head>
<body>
	<?php echo "$finallist"; ?>
</body>