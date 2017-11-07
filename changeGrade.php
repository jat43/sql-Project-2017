<?php 
include_once 'db_connect.php';
session_start();


$Sid = $_POST['id'];
$Cnum = $_POST['classNum'];
$grd = $_POST['grade'];

$uid =  $_SESSION['u_id'];
echo $id . "<br>";

	$sql = "update StudentsClasses set Grade = '$grd' where Id = '$Sid' and ClassId = '$Cnum';";

if (!mysqli_query($conn, $sql)) {
	die('Error '. mysql_error());
} else {
	$result = mysqli_query($conn,$sql);
	echo "Change Successful";
	header("Location:giveGrades.php");
}




?>

