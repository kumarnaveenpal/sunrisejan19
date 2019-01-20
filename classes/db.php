<?php 
/**
* Database class
* Author : Naveen Pal
*/
class Database {
	public $con;
	function __construct(){
		$this->con=mysqli_connect("localhost","root","jmd@123","proc");
	}
}
$db=new Database;
?>