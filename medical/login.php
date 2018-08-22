
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
			   <li><a href="Registration.php">Register</a></li>
			   
			   </ul>	
				
		    </nav>		
	        </div >
			<form action="search.php" method="get">
			<input type="search" name="SearchBar" class="SearchBar" />
			<button type="submit" id="SearchButton" class="SearchButton" >&#128269;Search</button>
			</form>


	    </div>
		 
	</header>
	<div class="MainBody">
	
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php" class="reg_from">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="registration.php">Sign up</a>
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
    
	<p> <a href="account.php?ac=1">My Account</a></p>
	<p> <a href="account.php?ac=1" >My orders</a></p>
	
	
</div>
	</footer>


</div>
</body>

</html>