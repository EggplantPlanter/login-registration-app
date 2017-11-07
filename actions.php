<?php require "db.php" ?>

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pnumber = $_POST['pnumber'];
$birthday = $_POST['birthday'];

echo "First Name: " . $fname . "<br>"; 
echo "Last Name: " . $lname . "<br>"; 
echo "Email: " . $email . "<br>";
echo "Phone Number: " . $pnumber . "<br>";
echo "Birthday: " . $birthday. "<br><br>"; 


function checkEmail($email){
	$sql = "SELECT email FROM accounts WHERE email = '$email'";
	$results = runQuery($sql);

	if( count($results) > 0 ) { # If rows are found for query
     echo "Email found! " . $email;
	}
	else {
	     echo "Email not found! " . $email;
	}

}
	
checkEmail($email);

//checkEmail(); 





?>