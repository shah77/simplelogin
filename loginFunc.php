<?php
   session_start();
   require 'db.php';
   
     if($_SERVER['REQUEST_METHOD']=='POST'){
     	if(isset($_POST['login'])){
     		$email = $mysqli->escape_string($_POST['email']);


     		$result = $mysqli->query("SELECT * FROM user WHERE email='$email'");
     		if( $result->num_rows == 0){
     			$_SESSION['message'] = "user with this email doesn't exist!";
     			header("location: error.php");
     		}
     		else{
     			$user = $result->fetch_assoc();

     			if( password_verify($_POST['password'], $user['password'])){

     				$_SESSION['email'] = $user['email'];
			        $_SESSION['first_name'] = $user['first_name'];
			        $_SESSION['last_name'] = $user['last_name'];

     				$_SESSION['logged_in'] = true;
     				header("location: home.php");
     			}
     			else{
     				$_SESSION['message'] = "You have entered wrong password, Please try again!"; 
                        header("location: error.php");
     			}
     		}
     	}
     }



?>