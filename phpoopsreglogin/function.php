<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'userdb');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

// for username availblty
public function usernameavailblty($uname) {
$result =mysqli_query($this->dbh,"SELECT Username FROM tblusers WHERE Username='$uname'");
return $result;

}

// Function for registration
	public function registration($fname,$uname,$uemail,$pasword)
	{
	$ret=mysqli_query($this->dbh,"insert into tblusers(FullName,Username,UserEmail,Password) values('$fname','$uname','$uemail','$pasword')");
	return $ret;
	}

// Function for signin
public function signin($uname,$pasword)
	{
	$result=mysqli_query($this->dbh,"select id,FullName from tblusers where Username='$uname' and Password='$pasword'");
	return $result;
	}


}
?>