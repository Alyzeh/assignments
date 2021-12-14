

<?php 
	require_once 'fileUploadProc.php';
//$output = "";
//if(count($_POST) > 0){
//require_once 'fileUploadProc.php';
 //$createDir = new Directories();
 //$output = $createDir->makeDirectory();
//}
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>File Upload</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<header>
		
	</header>
	<main>
		<div class=container-sm>
		
		<form method="post" action="assignment7.php">
			 <h1>File Upload</h1>
			 
			<a href="fileList.php">Show File List</a><br />
			<div class="phpinsertion"></div>
			<div class="mb-3">
				
					<label for="FileName" class="form-label">File Name</label>
			    	<input type="text" class="form-control" name="FileName" id="FileName">

			 </div>
			 <div class="mb-3">
			 	<input type="file" name="chooseFile" id="chooseFile">
			 </div>
			 <div class="mb-3">
				<button type="submit" class="btn btn-primary" id="submit" name="submit">Upload File</button>
			</div>
		</form></div>
	</main>
	<footer>
		
	</footer>
</body>