

<?php 
$output = "";
if(count($_POST) > 0){
require_once 'addNameProc.php';
 $addName = new AddNamesProc();
 $output = $addName->addClearNames();
}
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Form Project</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<header>
		
	</header>
	<main>
		<div class=container-sm>
		<form method="post" action="names.php">
			<button type="submit" class="btn btn-primary" id="addName" name="addName">Add Name</button> <button type="submit" class="btn btn-primary" id="clearNames" name="clearNames">Clear Names</button>
			<div class="mb-3">
				
					<label for="InputName" class="form-label">Enter Name</label>
			    	<input type="text" class="form-control" name="InputName" id="InputName">
			 </div>
			<div class="mb-3">
			    <label for="nameList" class="form-label">Names</label>
			    <textarea class="form-control" id="nameList" name="nameList" readonly="true"><?php echo $output ?></textarea>
			</div>
		</form></div>
	</main>
	<footer>
		
	</footer>
</body>