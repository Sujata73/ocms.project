<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname  = "brajesh";

$connection = mysqli_connect($hostname,$username,$password,$dbname);
session_start();
$var1 = $_POST['username'];
$var2 = $_POST['password'];
$var3 = "select * from table1 ";
$query = mysqli_query($connection,$var3);
$result = mysqli_fetch_assoc($query);

if($var1 == $result['username'] && $var2 == $result['password'] ){
	$_SESSION['username']=$var1;

	header("Location: Home.php");
}
else
{
echo "Failed to signin. please type correct username and password";
}
?>