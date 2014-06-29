<?php
include("config.php");
class gallery extends dbConn
{
	private $query;
	private $result;
	private $row;
	private $num;
	private $path="AllFromGitHub/gallary/";
	//konektvame se kam bazata danni
	public function __construct()
	{
		parent::connect();
	}
	//funckiq, izbirashta 1viqt element ot bazata danni
	public function getFirstImg()
	{
		$this->query="select * from gallery order by id asc limit 1";
		$this->result=mysqli_query($this->db, $this->query);
		$this->row=mysqli_fetch_object($this->result);
		return $this->row->id;
	}
	//funkciq, izbirashta posledniqt element ot bazata danni
	public function getLastImg()
	{
		$this->query="select * from gallery order by id desc limit 1";
		$this->result=mysqli_query($this->db, $this->query);
		$this->row=mysqli_fetch_object($this->result);
		return $this->row->id;
	}
	//funckiq, vzimashta sledvashtata snimka ot bazata danni (ako sme na poslednata vrashta 1vata)
	public function nextImg($id, $imgOrId)
	{
		$this->query="select * from gallery where id > ".$id." order by id asc limit 1";
		$this->result=mysqli_query($this->db, $this->query);
		$this->row=mysqli_fetch_object($this->result);
		$result=$this->row->id;
		if($result=='')
		{
			$result=$this->getFirstImg();
		}
		$image=$this->theImage($result);
		$parts=explode("/", $image);
		if($imgOrId=='img')
		{
			$img=$this->path.$parts[count($parts)-2];
			return $img;
		}
		if($imgOrId=='id')
		{
			$id=$parts[count($parts)-1];
			return $id;
		}
	}
	//funckiq, vzimahta predishnata snimka ot bazata danni. ako sme na 1vata vrashta poslednata
	public function prevImg($id, $imgOrId)
	{
		$this->query="select * from gallery where id < ".$id." order by id desc limit 1";
		$this->result=mysqli_query($this->db, $this->query);
		$this->row=mysqli_fetch_object($this->result);
		$result=$this->row->id;
		if($result=='')
		{
			$result=$this->getLastImg();
		}
		$image=$this->theImage($result);
		$parts=explode("/", $image);
		if($imgOrId=='img')
		{
			$img=$this->path.$parts[count($parts)-2];
			return $img;
		}
		if($imgOrId=='id')
		{
			$id=$parts[count($parts)-1];
			return $id;
		}
	}
	//funkiq, opredelqshta spored id-to koq snimka da warne
	public function theImage($imgId)
	{
		$this->query="select img from gallery where id=".$imgId;
		$this->result=mysqli_query($this->db, $this->query);
		$this->row=mysqli_fetch_object($this->result);
		$result=$this->path.$this->row->img;
		$result.="/".$imgId;
		return $result;
	}
}
$gallery=new gallery();
if(isset($_GET['side']))
{
	if($_GET['side']=='plus')
	{
		if(isset($_GET['src']))
		{
			echo $gallery->nextImg($_GET['src'], 'img');
		}
		if(isset($_GET['id']))
		{
			echo $gallery->nextImg($_GET['id'], 'id');
		}
	}
	else if($_GET['side']=='minus')
	{
		if(isset($_GET['src']))
		{
			echo $gallery->prevImg($_GET['src'], 'img');
		}
		if(isset($_GET['id']))
		{
			echo $gallery->prevImg($_GET['id'], 'id');
		}
	}
}
?>
