<?php 

class AddNamesProc {


	
	public function addClearNames() {


		if(isset($_POST['addName'])) {
			


			if ($num=1) {
				$seperator = "\n";
			$nameInput = $_POST["InputName"];
			$nameArray = explode(' ', $nameInput);
			$nameArrayRev = array_reverse($nameArray);
			$nameArToString = implode(", ", $nameArrayRev);
			$nameString = $nameArToString;
			$nameString .= $seperator;

			$finalList = $nameString;
			return $finalList;
			}
			else if ($num > 1)  {
				$seperator = "\n";
			$nameInput = $_POST["InputName"];
			$nameArray = explode(' ', $nameInput);
			$nameArrayRev = array_reverse($nameArray);
			$nameArToString = implode(", ", $nameArrayRev);
			$nameString = $nameArToString;
			$nameString .= $seperator;


			$finalList .= $nameString;
			return $finalList;
			}
			$num++;

			
		}
		else if(isset($_POST['clearNames'])) {
			$num= 0;
			$finalList = "";
			return $finalList;

		}
		else {
			$num=0;
			$finalList = "";
			return $finalList;
		}


	}
}


?>