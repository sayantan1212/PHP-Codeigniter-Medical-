<?php
require 'config.php';
if(isset($_GET['ac']))
{	
if(isset($_SESSION['username']))
{
	header('location:account.php');
}
else
{
}
	
	
}


?>


<!doctype html>
<html lang="eng">
<head>
	<title>Medical Store</title>
	<meta charset="utf-8"/>
	<link type="text/css" href="css/style.css" rel="stylesheet"/>
	<script src="javascript/java_index.js" type="text/javascript"></script>
	<link type="text/css" href="css/style_login_reg.css" rel="stylesheet"/>

</head>
<body>
<div>
	<header class="MainHeader">
	    <div class="TopHeader"  >
		
		   <a class="as" href="index.php"> <img  src="image/logo.png" id="logo" ></img></a>
			<div class="SignBar">	
			<nav> 
			   <ul>	
			   <li><a href="login.php" class="SignIn" id="SignIn" >Sign In</a></li>
			   <li><a href="cart.php">Cart</a></li>
			   <li><a href="registration.php">Register</a></li>
			   
			   </ul>	
				
		    </nav>		
	        </div >
			<form action="search.php" method="get" >
			<input type="search" name="SearchBar" class="SearchBar" />
			<button type="submit" id="SearchButton" class="SearchButton" >&#128269;Search</button>
			</form>


	    </div>
		 
	</header>
	<div class="MainBody">
		<div class="header">
		<h2>Register</h2>
		</div>
	
				<form method="post" action="registration.php" class="reg_from">

					<?php include('errors.php'); ?>

					<div class="input-group">
						<label>Username</label>
						<input type="text" name="username" value="<?php echo $username;?>" >
					</div>
					<div class="input-group">
						<label>Email</label>
						<input type="email" name="email" value="<?php echo $email; ?>">
					</div>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password_1">
					</div>
					<div class="input-group">
						<label>Confirm password</label>
						<input type="password" name="password_2">
					</div>
					<div class="input-group">
						<button type="submit" class="btn" name="reg_user">Register</button>
					</div>
					<p>
						Already a member? <a href="login.php">Sign in</a>
					</p>
				</form>
	 
	
	</div>
	<footer class="MainFooter" >
	<div >
	<h4>Company</h4>
    <p> Contact Us</p>
	<p> Phone:<a href="tel:123456789">123456789</a></p>
	<p> Mail:<a href="mailto:someone@example.com" >someone@example.com</a></p>
	
	
	</div>
	<div class="account_footer">
	<h4>Account</h4>
    
	<p> <a href="registration.php?ac=1">My Account</a></p>
	<p> <a href="registration.php?ac=1" >My orders</a></p>
	
	
</div>
	</footer>


</div>
</body>

</html>