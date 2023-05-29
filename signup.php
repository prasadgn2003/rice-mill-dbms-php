<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow w-450 p-3" 
    	      action="signup.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">Create Account</h4><br>
    		
		  <div >
		    <label class="form-label">Full Name</label>
		    <input type="text" 
		           class="form-control"
		           name="fname" required>
		  </div>

		  <div >
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname" required>
		  </div>

		  <div >
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass" required>
		  </div>
		  
		  <input type="submit" name="submit">
		  <a href="signin.php" class="link-secondary">Login</a>
		<div><?php
			if(isset($_SESSION['success']))
			{
				echo $_SESSION['success'];
				session_destroy();
			}
		?></div>
		</form>
    </div>
<?php
	if(isset($_POST['submit']))
	{
	$fname = $_POST['fname'];
	$uname = $_POST['uname'];
	$passwd = $_POST['pass'];

	$sql = "INSERT INTO signup(fullname,username,password) VALUES('$fname','$uname','$passwd');";
	$result = mysqli_query($conn,$sql);
	if(isset($result))
	{
		$_SESSION['success'] = 'success';
		header('Location:'.'signup.php');
	}else{
		$_SESSION['success'] = 'failed';
		header('Location:'.'signup.php');
	}
	}
?>
</body>
</html>