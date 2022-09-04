<?php 
require('db.php');
require('functions_inc.php');
$msg='';
if(isset($_POST['submit']))
{
	$email=get_safe_value($con,$_POST['email']);
	$password=get_safe_value($con,$_POST['password']);

	$sql="SELECT * FROM admin WHERE username='$email' and password='$password'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0)
	{
		$_SESSION['ADMIN_LOGIN']='YES';
		$_SESSION['ADMIN_NAME']=$email;
		header('location:/ecom/adminpanel/index.php');
		die();
	}
	else
	{
		$msg="kindly enter correct details";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Mart Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
   <link rel="stylesheet" href="customestyle.css">
</head>
<body>

<div class="container-fluid">
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="assets/images/logo.svg" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            <form method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="User@example.com" required	>
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword" required>
              </div>
              <button name="submit" id="login" class="btn btn-block login-btn" type="submit" value="Login">Submit</button>
			
            </form>
			  <?php echo $msg; ?>
          <!--  <a href="#!" class="forgot-password-link">Forgot password?</a>
            <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>-->
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="images/login.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
 
  </div>
</div>


</body>
</html>
