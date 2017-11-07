<?php 
include_once 'db_connect.php';
session_start();


$Sid = $_POST['id'];
$Fname = $_POST['first'];
$Lname = $_POST['last'];
$email = $_POST['email'];
$Addre = $_POST['address'];
$City = $_POST['city'];
$State = $_POST['state'];
$Pnum = $_POST['phoneNumber'];

if (isset($_POST['add'])) {
	echo "adding student";

	$sql = "INSERT INTO Students VALUES('$Sid','$Fname','$Lname','$email','$Addre','$City','$State','$phoneNumber','Student');";

	if (!mysqli_query($conn, $sql)) {
	die('Error '. mysql_error());
} else {
	$result = mysqli_query($conn,$sql);
	echo "Add Successful";
	header("Location:admissions.php");
}

} elseif (isset($_POST['delete'])) {
	echo "deleting student";

	$sql = "delete from Students where Id = '$Sid'";

	if (!mysqli_query($conn, $sql)) {
	die('Error '. mysql_error());
} else {
	$result = mysqli_query($conn,$sql);
	echo "Add Successful";
	header("Location:admissions.php");
}
}
?>

