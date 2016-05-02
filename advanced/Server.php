<?php

require_once('Computer.php');

class Server extends Computer
{
	private $host;

	protected $port;

	protected function getHost()
	{
		echo "This gives the host name of the server";
	}

}