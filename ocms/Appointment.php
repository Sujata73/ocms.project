<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname  = "brajesh";

$connection = mysqli_connect($hostname,$username,$password,$dbname);

$doctor = $_POST['doctor'];
$problem = $_POST['problem'];
$patient_info = $_POST['patient_info'];
$contact = $_POST['contact'];

$sql = "INSERT INTO appointment_info (doctor,problem,patient_info,contact)
VALUES ('$doctor', '$problem','$patient_info','$contact')";

if (mysqli_query($connection, $sql)) {
    echo "successfully gotten an appointment,our medical assistant will contact you soon";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

?>