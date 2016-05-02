<?php

require_once('Workstation.php');

class Mac extends Workstation
{
	private $hardDrive = "Solid state drive";

	public function getHardDrive()
	{
		parent::getHardDrive();
		echo "Child class getHardDrive : " . $this->hardDrive;
	}

}