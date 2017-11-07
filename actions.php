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
echo "Birthday: " . $birthday. "<br>"; 


// $query = $con->prepare( "SELECT `email` FROM accounts WHERE email = 'doratheexplorer@nick.com'" );
// $query->bindValue( 1, $email );
// $query->execute();

// if( $query->rowCount() > 0 ) { # If rows are found for query
//      echo "Email found!";
// }
// else {
//      echo "Email not found!";
// }

?>