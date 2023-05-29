<?php
include('connect.php');
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow w-450 p-3" 
    	      action="signin.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">LOGIN</h4><br>

		  <div>
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname" required
                   >
		  </div>

		  <div >
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass" required >
		  </div>
		  
		  <input type="submit" name="submit">
		  <a href="signup.php" class="link-secondary">Sign Up</a>
          <div>
            <?php
            if(isset($_SESSION['setted']))
            {
                echo $_SESSION['setted'];
            }
            ?>
        </div>
		</form>
    </div>
</body>
<?php 
if(isset($_POST['submit']))
{
    $uname = $_POST['uname'];
    $password = $_POST['pass'];


    $sql = "SELECT * FROM signup WHERE username = '$uname'";
    $result = mysqli_query($conn,$sql);
    if(isset($result))
    {
        $myresult = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if($myresult[0]['password'] == $password)
        {
            $_SESSION['setted'] = 'success';
            header('Location:' . 'stocks.php');
        }else{
            $_SESSION['setted'] = 'failed';
            header('Location:' . 'signin.php');
        }
    }

}

?>
</html>