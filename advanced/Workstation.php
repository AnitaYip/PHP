<?php
namespace advanced;
require_once('Computer.php');

class Workstation implements Computer
{
	private $hardDrive = "Hard drive";

	public function getHardDrive()
	{
		$msg = function() {
			return "Parent class getHardDrive : " . $this->hardDrive . "\n";
		};
		echo $msg();
	}

}