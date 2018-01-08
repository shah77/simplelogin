<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'db.php';
session_start();

// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['password']) && !empty($_GET['password']) )
{
    $email = $mysqli->escape_string($_GET['email']);
    $password = $mysqli->escape_string($_GET['password']);
    

    // Make sure user email with matching hash exist
    $result = $mysqli->query("SELECT * FROM user WHERE email='$email' ");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "You have entered invalid URL for password reset!";
        header("location: error.php");
    }
}
else {
    $_SESSION['message'] = "Sorry, verification failed, try again!";
    header("location: error.php");  
}
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


  }
</style>
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
</nav>

<div class="container">
<div class="">
<div class="row" style="margin-top:60px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <center><h2>Reset Password</h2></center>
          <form action="reset_password.php" method="post">
        
          <div style="margin-top:30px">      
          <div class="form-group">
            <input type="password" name="newpassword" id="password" class="form-control input-lg" placeholder="New password" autocomplete="off" required>
      </div>
      
      <div class="form-group">
            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control input-lg" placeholder="Confirm password" autocomplete="off" required>
      </div>
              
          
          <!-- This input field is needed, to get the email of the user -->
          <input type="hidden" name="email" value="<?= $email ?>">
          <input type="hidden" name="hash" value="<?= $password ?>">
              
          <button class="btn btn-lg btn-primary btn-block"/>Apply</button>
          </div>
          </form>
    </div>
</div>
</div>
</div>        

    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>
</html>
