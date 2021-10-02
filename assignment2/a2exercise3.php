<?php
	$rows=1;
	$cols=1;
	$styling="<style> table, tr, td{ border: 1px solid black;}</style>";
	$tablea="<table>";
	$tableb="</table>";
	$tra="<tr>";
	$trb="</tr>";
	$rowcells="";
	$tablerows="";
	$finaltable="";
	for ($rows=1; $rows<=15; $rows++) {
		$tablerows.=$tra;
		for ($cols=1; $cols<=5; $cols++) {
			$cell="<td> Row $rows Cell $cols </td>";
			$rowcells.=$cell;
		};
		$tablerows.=$rowcells;
		$tablerows.=$trb;
		$cols=1;
		$rowcells="";
	};
	$finaltable.=$tablea;
	$finaltable.=$tablerows;
	$finaltable.=$tableb;
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Exercise 3</title>
	<?php echo "$styling"; ?>
</head>
<body>
	<?php echo "$finaltable"; ?>
</body>