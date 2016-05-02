<?php
namespace advanced;
require_once('Workstation.php');
require_once('HardDrive.php');

class Mac extends Workstation
{
	use HardDrive;
	
}