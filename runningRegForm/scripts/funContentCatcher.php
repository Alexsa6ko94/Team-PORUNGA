<?php
include("config.php");
class contentCatcher extends dbConn
{
	private $query;
	private $result;
	private $row;
	private $num;
	//pravim construktor - vrazka s bazata danni
	public function __construct()
	{
		parent::connect();
	}
	//funckiq, telgeshta sadarjanie, kakvoto iskame(kartinka ili tekst) ot baza danni
	//$id - reda, koito gledame
	//$victim - kartinka / text
	//$current - imeto, koeto teglim ot bazata danni
	public function catchImg($id, $victim)
	{
		$this->query="select * from funcontent where id=".$id;
		$this->result=mysqli_query($this->db, $this->query);
		$this->row=mysqli_fetch_object($this->result);
		return $this->row->$victim;
	}
}
//pravim promenliva na klasa
$catch=new contentCatcher();
//proverqvame dali ima izvikvane po ID
if(isset($_GET['getFunId']))
{
	//i deistvame
	$result=$catch->catchImg($_GET['getFunId'], $_GET['getFunVictim']);
	echo nl2br($result);
}
?>
