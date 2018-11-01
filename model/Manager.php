<?php

// connection bdd

class Manager
{
	protected function dbConnect()
	{
		$db = new PDO('mysql:host=db759389311.hosting-data.io:3306;dbname=db759389311;charset=utf8', 'dbo759389311', '?18Hugues');
		return $db;
	}
}