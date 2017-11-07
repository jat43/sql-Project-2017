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

	$sql = "select distinct Students.Id, StudentsClasses.ClassId, Students.First, Students.Last, Grade from Faculty, Classes, StudentsClasses, Students where Faculty.Id = '$id' and StudentsClasses.Id = Students.Id;";

if (!mysqli_query($conn, $sql)) {
	die('Error '. mysql_error());
} else {
	$result = mysqli_query($conn,$sql);
}

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
        echo "Class: " . $row["ClassId"] . " - Student # & Name: " . $row["First"] . " " . $row["Last"] . ", " . $row["Id"] . " - Grade: " . $row["Grade"] . "<br>";

    }
} else {
	echo "no results<p>";
}



?>


<form class="form-signin" action="changeGrade.php" method="POST">
        <h2 class="form-signin-heading">Changing Grades</h2>


        <label for="inputId" class="sr-only"> Student Id Number</label>
        <input type="text" id="inputId" name="id" class="form-control" placeholder="Student #" required autofocus>

        <label for="inputClassNum" class="sr-only">Class Number</label>
        <input type="text" id="inputClassNum" name="classNum" class="form-control" placeholder="Class #" required>

        <label for="inputGrade" class="sr-only">Grade</label>
        <input type="text" id="inputGrade" name="grade" class="form-control" placeholder="Grade" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Change Grade!</button>
      </form>


	<a href="myStudent.php">My Students</a>
	<a href="giveGrades.php">Grades</a>
	<a href="facInfo.php">Info</a>

	<a href="logout.php">Logout here</a>





</body>
</html>



