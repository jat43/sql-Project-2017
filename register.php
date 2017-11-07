<?php
// Start the session
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

<div class="container">
  
	 <form class="form-signin" action="registerdo.php" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <label for="first" class="sr-only">First Name:</label>
        <input type="text" id="first" name="first" class="form-control" placeholder="First Name" required autofocus>

        <label for="last" class="sr-only">Last Name:</label>
        <input type="text" id="last" name="last" class="form-control" placeholder="Last Name" required autofocus>

        <label for="email" class="sr-only">Email:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>

        <label for="inputPassword" class="sr-only">Password:</label>
        <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
</div>
<div id="output"></div>


</body>
</html>