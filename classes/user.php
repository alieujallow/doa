<?php
/**
* this is a staff class that handles everything  about a staff
*/
require('../database/dbConnection.php');
class User extends Dbconnection
{
	//adds a user
	function addUser($sql)
	{
		return $this->query($sql);
	}
}
?>