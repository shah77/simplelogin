<?php
   session_start();
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
		<form method="post" action="registerFunc.php">
			<fieldset>
				
				<center><h2>Sign Up</h2></center>
			 	<div class="form-group">
                    <input type="text" name="fname" id="fname" class="form-control input-lg" placeholder="First name" required>
				</div>
				<div class="form-group">
                    <input type="text" name="lname" id="lname" class="form-control input-lg" placeholder="Last name" required>
				</div>
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" required>
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
				</div>
				
					
                        <input type="submit" class="btn btn-lg btn-primary btn-block" name="register" value="Register">
					
					
				
				
				
					
					
				
			</fieldset>
		</form>
		</div>
	</div>
</div>

</div>
</body>
</html>