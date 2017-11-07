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

$id =  $_SESSION['u_id'];
echo $id . "<br>";


$sql = "select StaffType from Staff where Id = '$id';";


if (!mysqli_query($conn, $sql)) {
	die('Error '. mysqli_error());
} else {
	$result = mysqli_query($conn, $sql);
}

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['u_Stype'] = $row["StaffType"];
		
    if ($_SESSION['u_Stype'] == "Registrar") {
    	echo $_SESSION['u_Stype'];
    } elseif ($_SESSION['u_Stype'] == "Admissions") {
    	header("Location:admissions.php");
    } else {
    	#header("Location:registrar.php");
    	header("Location:finance.php");
    }

    }
} else {
    echo "User Doesnt Exist";
}


mysqli_close();
?>




</body>
</html>



