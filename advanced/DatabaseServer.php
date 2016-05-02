<?php

namespace advanced;

require_once('Server.php');

class DatabaseServer extends Server
{
	private $schema = 'foundation';

	public function getConnection()
	{
		echo "Woops! I need the schema name let me call the private method to get private data: getSchemaName() - " . $this->getSchemaName();
	}

	private function getSchemaName()
	{
		return "I give the Schema name : " . $this->schema;
	}

}