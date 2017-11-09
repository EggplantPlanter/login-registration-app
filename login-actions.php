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

$email = $_POST['email'];
$password = $_POST['pass'];


$sql = "SELECT * FROM accounts WHERE email = '$email'";
$results = runQuery($sql);
if(count($results) > 0){

	foreach($results as $row){
		$getEmail = $row['email'];
		$getPass = $row['password'];
	}

}else {
	echo "<br><br><div class='alert alert-danger'><strong>WARNING!</strong> 
    Wrong credentials were entered. Redirecting you to previous page.</div>"; 
    header("refresh:4; url=index.php");
    break;
}


if(isset($email, $password)){
$sql = "SELECT * FROM accounts WHERE email = '$email' AND password='$password'";
$results = runQuery($sql);

	if( count($results) > 0 ) {
		foreach ($results as $row){
			$firstname = $row['fname'];
			$lastname = $row['lname'];
		}

		echo "Hello " . $firstname . " " . $lastname;

	}

	else {

		echo "<br><br><div class='alert alert-warning'><strong>WARNING!</strong> 
	    Wrong PASSWORD was entered. Redirecting you to previous page.</div>";    
	    header("refresh:4; url=index.php");

	}
}
	

	

	//grab variables of user from sql 
	//assign them to $names

/*
TO DO:
- Tell user to go to previous page
- insert home button
*/


