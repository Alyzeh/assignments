<?php 

class AddNamesProc {


	
	public function addClearNames() {


		if(isset($_POST['addName'])) {
			
			$seperator = "\n";
			$nameInput = $_POST["InputName"];
			$nameArray = explode(' ', $nameInput);
			$nameArrayRev = array_reverse($nameArray);
			$nameArToString = implode(", ", $nameArrayRev);
			//$nameString = $nameArToString;
			//$nameString .= $seperator;
			$nameList = $_POST["nameList"];
			$listArray = explode('\n', $nameList);
			array_push($listArray, $nameArToString);
			sort($listArray);
			$finalList = implode("\n", $listArray);
			return $finalList;
			
			
		}
		else if(isset($_POST['clearNames'])) {
			
			$finalList = "";
			return $finalList;

		}
		else {
			
			$finalList = "";
			return $finalList;
		}


	}
}


?>