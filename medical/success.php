<?php 
require 'config.php';?>
<!doctype html>
<html lang="eng">
<head>
	<title>PharmEasy</title>
	<meta charset="utf-8"/>
	<link type="text/css" href="css/style.css" rel="stylesheet"/>
	
	
	</script>

</head>
<body>
<div>
	<header class="MainHeader">
	    <div class="TopHeader"  >
		
		 <a class="as" href="index.php">   <img  src="image/logo.png" id="logo" ></img></a>
			<div class="SignBar">	
			<nav> 
			   <ul>	
			   <li>
			  	   
			   <a href="index.php?signin=1">
			   <?php if(isset($_SESSION['username'])){ echo "log out";} else {echo "Sign In";}?>
			   </a>
			   </li>
			   <li><a href="cart.php"> Cart</a></li>
			   <li><a href="index.php?signin=2"><?php if(isset($_SESSION['username'])){ echo"Account";} else {echo"Register";}?></a></li>
			   
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
		<?php

		if($_REQUEST['r'])
		echo "<div class=\"result\">your order has been placed </div>";
			else
		echo"<div class=\"result\">We are facting connection issues. please try ordering again </div>";
	



		?>
	
				
			
    </div>	
<footer class="MainFooter" >

    <div >
	<h4>Company</h4>
    <p> Contact Us</p>
	<p> Phone:<a href="tel:123456789">123456789</a></p>
	<p> Mail:<a href="mailto:someone@example.com" >someone@example.com</a></p>
	
	
	</div>
<div>
	<h4>Account</h4>
   
	<p> <a href="accounts.php">My Account</a></p>
	<p><a href="accounts.php" >order</a></p>
	
	
	</div>
</footer>


</div>
</body>

</html>