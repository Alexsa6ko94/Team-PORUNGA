<?php
include("scripts/config.php");
class fullGallery extends dbConn
{
	private $query;
	private $result;
	private $row;
	private $num;
	private $path="AllFromGitHub/gallary/smalls/small_";
	//konektvame se kam bazata danni
	public function __construct()
	{
		parent::connect();
	}
	//teglim vsichki snimki ot bazata danni
	public function DrowThem()
	{
		$this->query="select * from gallery";
		$this->result=mysqli_query($this->db, $this->query);
		$this->ShowMe($this->result);
	}
	//pokazvame rezultatite
	public function ShowMe($drowed)
	{
		$this->num=mysqli_num_rows($drowed);
		for($i=0; $i<$this->num; $i++)
		{
			$this->row=mysqli_fetch_object($drowed);
			?>
            <div class='smallImgContainer'>
            	<img class='smallImg' src="<?php echo $this->path.$this->row->img; ?>" id="<?php echo $this->row->id; ?>" />
            </div>
            <?php
		}
	}
}
$fullGallery=new fullGallery();
$fullGallery->DrowThem();
?>
