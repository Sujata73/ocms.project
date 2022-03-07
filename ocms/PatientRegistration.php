<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname  = "brajesh";

$connection = mysqli_connect($hostname,$username,$password,$dbname);
$var0 = $_POST['username'];
$var1 = $_POST['password'];
$var2 = $_POST['firstname'];
$var3 = $_POST['lastname'];
$var5 = $_POST['age'];
$var6 = $_POST['contact'];
$var7 = $_POST['address'];


$sql = "INSERT INTO table1 (username,password,firstname,lastname,age,address,contact)
VALUES ('$var0', '$var1', '$var2','$var3','$var5','$var7','$var6')";

if (mysqli_query($connection, $sql)) {
    header("Location: Home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

