

<?php 
$output = "";
if(count($_POST) > 0){
require_once 'makeDirectory.php';
 $createDir = new Directories();
 $output = $createDir->makeDirectory();
}
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>File and Directory Assignment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<header>
		
	</header>
	<main>
		<div class=container-sm>
		
		<form method="post" action="assignment5.php">
			 <h1>File and Directory Assignment</h1>
			<p>Enter a folder name and the contents of a file. Folder names should contain alphanumeric characters only.</p>
			<div class="phpinsertion"><?php echo $output ?></div>
			<div class="mb-3">
				
					<label for="FolderInput" class="form-label">Folder Name</label>
			    	<input type="text" class="form-control" name="FolderInput" id="FolderInput">
			 </div>
			<div class="mb-3">
			    <label for="ContentInput" class="form-label">Folder Contents</label>
			    <textarea class="form-control" id="ContentInput" name="ContentInput"></textarea>
			</div>
			<button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
		</form></div>
	</main>
	<footer>
		
	</footer>
</body>