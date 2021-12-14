<?php 
	require 'classes/Pdo_methods.php';
	class fileUpload extends PdoMethods {
		public function getfile() {
			if(isset($_POST['submit'])) {
				$fileTitle = $_POST["FileName"];
				$file = $_FILES["chooseFile"];
				$successMsg = "File has been uploaded.";
				$sizeErr = "File is too large.";
				$typeErr = "File must be a PDF file.";
			}
		}

	}
?>