<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['register'])) {

    	$_SESSION['email'] = $_POST['email'];
		$_SESSION['first_name'] = $_POST['fname'];
		$_SESSION['last_name'] = $_POST['lname'];

		$first_name = $mysqli->escape_string($_POST['fname']);
		$last_name = $mysqli->escape_string($_POST['lname']);
		$email = $mysqli->escape_string($_POST['email']);
		$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));


		$result = $mysqli->query("SELECT * FROM user WHERE email='$email'") or die($mysqli->error());

		if ( $result->num_rows > 0 ) {
    
		    $_SESSION['message'] = 'User with this email already exists!';
		    header("location: error.php");
		    
		}
		else { // Email doesn't already exist in a database, proceed...

		    // active is 0 by DEFAULT (no need to include it here)
		    $sql = "INSERT INTO user (first_name, last_name, email, password) " 
		            . "VALUES ('$first_name','$last_name','$email','$password')";

		    // Add user to the database
		    if ( $mysqli->query($sql) ){

		      
		        $_SESSION['logged_in'] = true; // So we know the user has logged in
		        $_SESSION['message'] =
		                
		                 "Registration successful !";


		        header("location: index.php"); 

		    }

		    else {
		        $_SESSION['message'] = 'Registration failed!';
		        header("location: register.php");
		    }

		}

    }
}
?>