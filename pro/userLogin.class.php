<?php
require("sql_commands.class.php");
class userLogin extends sql_commands
{
	
	function checkUser($username,$password)
	{
		$id;
		if(isset($username)&&isset($password))
		{
			$id= sql_commands::userLogin($username,$password);
		}
		
		return $id;
	}


}
?>