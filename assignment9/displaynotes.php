

<?php 
require_once 'classes/Date_time.php'; 
$dt = new Date_time(); 
$notes = $dt->checkSubmit();
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Date Time || Display Notes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<header>
		
	</header>
	<main>
		<div class=container-sm>
		
		<form method="post" action="displaynotes.php">
			 <h1>Display Notes</h1>
			 
			<a href="assignment9.php">Add Note</a><br />
			<div class="phpinsertion"></div>
			<div class="mb-3">
				
					<label for="begDate" class="form-label">Beginning Date</label>
			    	<input type="date" class="form-control" id="begDate" name="begDate"> 

			 </div>
			 <div class="mb-3">
			 	<label for="noteinput" class="form-label">End Date</label>
			 	<input type="date" class="form-control" id="endDate" name="endDate"> 
			 </div>
			 <div class="mb-3">
				<button type="submit" class="btn btn-primary" id="submit" name="submit">Add Note</button>
			</div>
		</form></div>
	</main>
	<footer>
		
	</footer>
</body>