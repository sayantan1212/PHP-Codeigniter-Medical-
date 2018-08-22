<?php
require 'config.php';
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
		    <img  src="image/logo.png" id="logo" ></img>
			<div class="SignBar">	
			<nav> 
			   <ul>	
			   <li><a href="#" class="SignIn" id="SignIn" >Sign In</a></li>
			   <li><a href="#">Cart</a></li>
			   <li><a href="#">Account</a></li>
			   
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
		
	</div>
	<footer class="MainFooter" >
	<div >
	<h4>Company</h4>
    <p> Contact Us</p>
	<p> Phone:<a href="tel:123456789">123456789</a></p>
	<p> Mail:<a href="mailto:someone@example.com" >someone@example.com</a></p>
	
	</div>
	<div>
	<h4>Company</h4>
    <p> Contact Us</p>
	<p> Phone:<a href="tel:123456789">123456789</a></p>
	<p> Mail:<a href="mailto:someone@example.com" >someone@example.com</a></p>
	</div>
	</footer>

</div>
</body>

</html>