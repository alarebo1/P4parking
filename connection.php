<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$server = "127.0.0.1";
$username ="root";
$password = "Project4*";
$database = "mydb";
$port = "3306";
$conn = new mysqli($server,$username,$password,$database,$port);
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['addcar']))
{
	
	// get the post records
	$cnames = $_POST['Customer'];
	$pslot = $_POST['parkslots'];
	$lplate = $_POST['licensePlate'];
	$entday = $_POST['entryDate'];
	$extday = $_POST['exitDate'];

	// database insert SQL code{
	$sql = "INSERT INTO `Customer` (`cname`, `licensePlate`, `parkslot`, `price`,`enter_date`,`exit_date`) 
	VALUES ('$cname', '$lplate', '$pslot', 0.5, '$entday', '$extday')";
	// insert in database 
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	  } 
	else 
	{
			echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close()
?>