<?php require "db.php" ?>

<?php

$email = $_POST['email'];
$password = $_POST['pass'];

echo "Email: " . $email . "<br>";
echo "Password: " . $password. "<br><br>"; 

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
	    echo "Go away. That email does not exist <br>";
	    echo "Redirecting you to previous page";
	    header("refresh:3; url=index.php");
	    //Tell user to go to previous page

	}
}
	

	

	//grab variables of user from sql 
	//assign them to $names

/*
TO DO:
- Tell user to go to previous page
- insert home button
*/


