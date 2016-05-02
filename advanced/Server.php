<?php
namespace advanced;
require_once('Computer.php');

class Server implements Computer
{
	private $host;

	protected $port;

	private $hardDrive = "Hard drive";

	protected function getHost()
	{
		echo "This gives the host name of the server";
	}

	public function getHardDrive()
	{
		echo "Child class -2 getHardDrive : " . $this->hardDrive;
	}

}