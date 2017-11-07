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




<form class="form-signin" action="studentManip.php" method="POST">
        <h2 class="form-signin-heading">Add Student/Remove Student</h2>


        <label for="inputId" class="sr-only"> Student Id Number</label>
        <input type="text" id="inputId" name="id" class="form-control" placeholder="Student #" required autofocus>

        <label for="inputFirstName" class="sr-only">First Name</label>
        <input type="text" id="inputFirstName" name="first" class="form-control" placeholder="First Name" required>

        <label for="inputLastName" class="sr-only">Last Name</label>
        <input type="text" id="inputLastName" name="last" class="form-control" placeholder="Last Name" required>

        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>

        <label for="inputAddress" class="sr-only">Address</label>
        <input type="text" id="inputAddress" name="address" class="form-control" placeholder="Address" required>

		<label for="inputCity" class="sr-only">City</label>
        <input type="text" id="inputCity" name="city" class="form-control" placeholder="City" required>

        <label for="inputState" class="sr-only">State</label>
        <input type="text" id="inputState" name="state" class="form-control" placeholder="State" required>

        <label for="inputPhoneNumber" class="sr-only">Phone Number</label>
        <input type="text" id="inputPhoneNumber" name="phoneNumber" class="form-control" placeholder="Phone #" required>



        <button class="btn btn-lg btn-primary btn-block" type="submit" name="add">Add</button>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="delete">Delete</button>
      </form>






	<?php 



$id =  $_SESSION['u_id'];
echo $id . "<br>";

	$sql = "select First, Last, WeeklyPay, PayThisYear, NextPayDate from EmployeePay, Staff where EmployeePay.Id = '$id' and Staff.Id = '$id';";

if (!mysqli_query($conn, $sql)) {
	die('Error '. mysqli_error());
} else {
	$result = mysqli_query($conn, $sql);
}

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
        echo "Employee: " . $row["First"] . " " . $row["Last"] . " - Weekly Pay: " . $row["WeeklyPay"] . " - Pay Yearly: " .   $row["PayThisYear"] . " - Next Pay: " . $row["NextPayDate"] . "<br>";

    }
} else {
	echo "no results<p>";
}



?>

	<a href="info.php">Info</a>

	<a href="logout.php">Logout here</a>





</body>
</html>



