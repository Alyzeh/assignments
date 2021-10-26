<?php 
	class Directories {
		public function makeDirectory() {
			if(isset($_POST['submit'])) {
				$folderName = $_POST["FolderInput"];
				$folderContents = $_POST["ContentInput"];
				$dirPath = "directories/";
				$dirPath .= $folderName;
				$preExist = "<p>A directory already exists with that name.</p>";
				$readme = "readme.txt";
				$filePath = $dirPath;
				$filePath .= "/";
				$filePath .= $readme;
				$para = "<p>";
				$pB = "</p>";
				$creationtxt = "<p>File and directory were created.<br />";
				$href = "http://137.184.67.236/assignments/assignment5/";
				$href .= $filePath;
				$creationlink = "<a href='";
				$creationlink .= $href;
				$creationlink .= "'> Path where file is located.</a>";
				$para .= $creationtxt;
				$para .= $creationlink;
				$para .= $pB;



				if (file_exists($dirPath)) {
					return $preExist;

				}
				else {
					mkdir($dirPath, 0777, true);
					//touch("readme.txt");//
					$handle = fopen($filePath, "w");
					fwrite($handle, $folderContents);
					fclose($handle);
					return $para;

				}

			}
			else {
				return "";
			}
		}

	}


?>