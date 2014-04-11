<?php 
class Connect
{
	private $localhos="localhost";
	private $username="project";
	private $passw="project";
	private $data_name="electrostore";
	private $db;
	public function __construct()
	{
		
	}

	function connect()
	{
		$this->db=new MySQLi($this->localhos,$this->username,$this->passw,$this->data_name)or die("could not connect");
		
		return $this->db;
	}
}

?>