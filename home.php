<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
   

?>
<!DOCTYPE html>
<html>
<head>
	
  <title>Sign-Up/Login Form</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
	body{
		background: #e1e6ed;
	}
	.content{
		background: #fff;
        width: 50%;
        margin: 0px auto;
        height:300px;
        padding: 40px;
        box-shadow: 6px 6px 5px #aaaaaa;

	}
	h2{
		font-weight: bolder;
	}
</style>
 
</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		</nav>

		<div class="container">
			<div class="content" style="margin-top:50px">
                <center>
                <h2>Welcome to Note Book</h2>

          	    <div style="margin-top:30px">
	               <h3><?php echo $_SESSION['first_name'];?>&nbsp;
	               <?php echo $_SESSION['last_name']; ?></h3>
	            </div>

               </center>

                <div style="margin-top:50px">
				    <a href="logout.php" class="btn btn-lg btn-primary btn-block">Logout</a>
				</div>

            </div>
		</div>

	</body>
</html>
<?php } ?>