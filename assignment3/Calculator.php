<?php 
	class Calculator {
	public $operand;
	public $numA;
	public $numB;

	public $result="";
	public $finalMsg="";
		public function calc($operand, $numA=null, $numB=null){
			$divMsg="The division of the numbers is ";
			$multMsg="The product of the numbers is ";
			$addMsg="The sum of the numbers is ";
			$subMsg="The difference of the numbers is ";
			$divErr="Cannot divide by zero ";
			$errorMsg="You must enter a string and two numbers ";
			$break="</br>";
			if ($operand==="/") {
				$finalMsg="";
				if ($numB===0) {
					$finalMsg="";
					$finalMsg.=$divErr;

				}
				else if ($numA=== null) {
					$finalMsg="";
					$finalMsg.=$errorMsg;
				

				}
				else if ($numB=== null) {
					$finalMsg="";
					$finalMsg.=$errorMsg;
				

				}
				else {
					$finalMsg="";
					$result=$numA/$numB;
					$finalMsg.=$divMsg;
					$finalMsg.=$result;

				};

			}
			else if ($operand==="*") {
				$finalMsg="";
				if ($numA=== null) {
					$finalMsg="";
					$finalMsg.=$errorMsg;
				

				}
				else if ($numB=== null) {
					$finalMsg="";
					$finalMsg.=$errorMsg;
				

				}
				else {
					$result=$numA*$numB;
					$finalMsg.=$multMsg;
					$finalMsg.=$result;

				};

			}
			else if ($operand==="+") {
				$finalMsg="";
				if ($numA=== null) {
					$finalMsg="";
					$finalMsg.=$errorMsg;
				

				}
				else if ($numB=== null) {
					$finalMsg="";
					$finalMsg.=$errorMsg;
				

				}
				else {
					$result=$numA+$numB;
					$finalMsg.=$addMsg;
					$finalMsg.=$result;

				};

			}
			else if ($operand==="-") {
				$finalMsg="";
				if ($numA=== null) {
					$finalMsg="";
					$finalMsg.=$errorMsg;
				

				}
				else if ($numB=== null) {
					$finalMsg="";
					$finalMsg.=$errorMsg;
				

				}
				else {
					$result=$numA-$numB;
					$finalMsg.=$subMsg;
					$finalMsg.=$result;

				};

			}
			else {
				$finalMsg="";
				$finalMsg.=$errorMsg;

			};
			$finalMsg.=$break;
			return $finalMsg;
		}
	}



?>
