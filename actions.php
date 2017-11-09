<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="sign-up.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <!-- Navbar content -->
</nav>
<h2><a href="index.php">Home</a></h2>
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

	echo "<br>The email <strong>" . $email . "</strong> already exists, please use another one. <br> ";
	echo "<br><br><div class='alert alert-warning'> <strong>WARNING!</strong>
	    Redirecting you to previous page.</div>";    
	header("refresh:5; url=index.php");
}
else {
	$sql = "INSERT INTO accounts VALUES('', '$email', '$fname', '$lname', '$pnumber', '$birthday', '$gender', '$password')";
	$results = runQuery($sql);
    echo "You may now login with the email <strong>" . $email . "</strong><br><br>";
    //Tell user to go to previous page

}

?>


