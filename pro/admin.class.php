<?php
require("sql_commands.class.php");
class admin extends sql_commands
{
	
	function check($adminNo,$password)
	{
		$id;
		if(isset($adminNo)&&isset($password))
		{
			$id= sql_commands::login($adminNo,$password);
		}
		
		return $id;
	}


}
?>