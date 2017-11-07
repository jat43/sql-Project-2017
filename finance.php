<?php 
include_once 'db_connect.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to Not-NJIT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>


<body background = "images/background.jpg">


<?php
$Sid = $_POST['id'];
$Cnum = $_POST['classNum'];
$grd = $_POST['grade'];

$uid =  $_SESSION['u_id'];
echo $id . "<br>";

	$sql = "select Id, AmountOwed, AmountPayed from Bills;";

if (!mysqli_query($conn, $sql)) {
	die('Error '. mysql_error());
} else {
	$result = mysqli_query($conn,$sql);
}


if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
        echo "Student #: " . $row["Id"] . " - Money Owed: " . $row["AmountOwed"] . " - Money Paid: " . $row["AmountPayed"] . "<br>";

    }
} else {
	echo "<h3>Something went wrong</h3>";
}

?>


</body>
</html>