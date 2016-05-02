<?php

class Computer 
{
	private $hardDrive = "Hard Drive";

	protected function getHardDrive()
	{
		echo "Parent class getHardDrive: " . $this->hardDrive;
	}

}