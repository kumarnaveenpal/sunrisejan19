<?php 
/**
* Calldata class definition
* Author: Naveen Pal
*/
class calldata
{
	public $uemail;	
	public $upassword;	
	public $uname;	
	public $ucontact;	
	public $uage;	
	public $ucity;	
	public $ugender;	
	function __construct(){
		# code...
	}

	function create_user(){
		global $db;
		mysqli_query($db->con,"insert into logins set email='".$this->uemail."', password='".$this->upassword."'");
		$last_id = mysqli_insert_id($db->con);
		echo $query = "insert into details set login_id='".$last_id."', name='".$this->uname."', contact='".$this->ucontact."', age='".$this->uage."', gender='".$this->ugender."', city='".$this->ucity."' ";
		mysqli_query($db->con, $query) or die( mysqli_error($db->con) );

		return "User created successfully!";

	}
}
$calldata=new calldata();
?>