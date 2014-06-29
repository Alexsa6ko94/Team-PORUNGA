<?php
class dbConn
{
	private $user='root';
	private $pass='vertrigo';
	private $host='localhost';
	private $dbname='porunga';
	protected $db;
	//konektvame se kam bazata danni
	protected function connect()
	{
		$this->db = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname) or die("Няма връзка с базата данни.");
		mysqli_set_charset($this->db, 'utf8');
		if(!get_magic_quotes_gpc())
		{
			$_GET = array_map($this->array_map_callback, $_GET);
			$_POST = array_map($this->array_map_callback, $_POST);
			$_COOKIE = array_map($this->array_map_callback, $_COOKIE);
			$_REQUEST = array_map($this->array_map_callback, $_REQUEST);
		}
		else
		{
		   $_GET = array_map('stripslashes', $_GET);
		   $_POST = array_map('stripslashes', $_POST);
		   $_COOKIE = array_map('stripslashes', $_COOKIE);
		   $_REQUEST = array_map('stripslashes', $_REQUEST);
		   $_GET = array_map($this->array_map_callback, $_GET);
		   $_POST = array_map($this->array_map_callback, $_POST);
		   $_COOKIE = array_map($this->array_map_callback, $_COOKIE);
		   $_REQUEST = array_map($this->array_map_callback, $_REQUEST);
		}
	}
	//funkciq, pomoshtnik, da se zashtitim ot ataki
	private function array_map_callback($a)
	{
		return mysqli_real_escape_string($this->db, $a);
	}
}
?>
