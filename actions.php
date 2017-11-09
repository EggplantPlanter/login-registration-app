<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="sign-up.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
<body>
	<nav class="navbar navbar-inverse bg-inverse">
  <!-- Navbar content -->
</nav>
<a href="index.php">Home</a>
</body>
</html>

<?php require "db.php" ?>

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pnumber = $_POST['pnumber'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$password = $_POST['pass'];

$sql = "SELECT email FROM accounts WHERE email = '$email'";
$results = runQuery($sql);

if( count($results) > 0 ) {

	echo "The email " . $email . " already exists, please use another one. Redirecting you to previous page. ";
	header("refresh:3; url=index.php");
}
else {
	$sql = "INSERT INTO accounts VALUES('', '$email', '$fname', '$lname', '$pnumber', '$birthday', '$gender', '$password')";
	$results = runQuery($sql);
    echo "You may now login with the email " . $email . "<br><br>";
    //Tell user to go to previous page

}

/*
TO DO:
- Tell user to go to previous page
- insert home button
*/



?>


