<?php 
//$output = "";
//if(count($_POST) > 0){
//require_once 'listFilesProc.php';
 //$createDir = new Directories();
 //$output = $createDir->makeDirectory();
//}
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>File Upload | File List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<head></head>
	<main>
		<h1>List Files</h1>
		<a href="assignment7.php">Add File</a>
		<ul class="phpinsertion"><?php echo $output ?>
			
		</ul>
	</main>
</body>