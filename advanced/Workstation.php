<?php
namespace advanced;
require_once('Computer.php');

class Workstation implements Computer
{
	private $hardDrive = "Hard drive";

	public function getHardDrive()
	{
		echo "Parent class getHardDrive : " . $this->hardDrive;
	}

}