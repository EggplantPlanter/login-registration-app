<?php require "db.php" ?>

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pnumber = $_POST['pnumber'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$password = $_POST['pass'];

echo "First Name: " . $fname . "<br>"; 
echo "Last Name: " . $lname . "<br>"; 
echo "Email: " . $email . "<br>";
echo "Phone Number: " . $pnumber . "<br>";
echo "Birthday: " . $birthday. "<br>"; 
echo "Gender: " . $gender. "<br>"; 
echo "Password: " . $password. "<br><br>"; 

	$sql = "SELECT email FROM accounts WHERE email = '$email'";
	$results = runQuery($sql);

	if( count($results) > 0 ) {

    	echo "The email " . $email . " already exists, please use another one. Redirecting you to previous page. ";
	}
	else {
		$sql = "INSERT INTO accounts VALUES('', '$email', '$fname', '$lname', '$pnumber', '$birthday', '$gender', '$password')";
		$results = runQuery($sql);
	    echo "You may now login with the email " . $email;
	    //Tell user to go to previous page

	}

/*
TO DO:
- Tell user to go to previous page
- insert home button
*/



?>