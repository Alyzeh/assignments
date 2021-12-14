

<?php 
require_once 'classes/Date_time.php'; 
$dt = new Date_time(); 
$notes = $dt->checkSubmit();
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Date Time || Add Note</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<header>
		
	</header>
	<main>
		<div class=container-sm>
		
		<form method="post" action="assignment9.php">
			 <h1>Add Note</h1>
			 
			<a href="displayNotes.php">Display Notes</a><br />
			<div class="phpinsertion"></div>
			<div class="mb-3">
				
					<label for="FileName" class="form-label">Date and Time</label>
			    	<input type="datetime-local" class="form-control" id="dataTime" name="dateTime"> 

			 </div>
			 <div class="mb-3">
			 	<label for="noteinput" class="form-label">Note</label>
			 	<textarea class="form-control" id="noteinput" name="noteinput"></textarea> 
			 </div>
			 <div class="mb-3">
				<button type="submit" class="btn btn-primary" id="submit" name="submit">Add Note</button>
			</div>
		</form></div>
	</main>
	<footer>
		
	</footer>
</body>