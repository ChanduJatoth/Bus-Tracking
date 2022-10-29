<?php
$servername='localhost';
$username='root';
$password='';
$dbname='user_registration';
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn)
{
	die('could not connect to server:'.mysql_error());
}
else{
	echo "database connected successfully";
}
?>