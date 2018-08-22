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
		$_SESSION['alert']=2;
}
	
	
}
	
if(isset($_GET['SearchBar']))
{	$search=$_GET['SearchBar'];
	
	if(strlen($search))
	{
		header("location:search.php?SearchBar=$search");
	}
}
if(isset($_SESSION['alert']))
{if($_SESSION['alert']==2)
{
	echo "<script>alert(\"plesae login\");</script> ";
    $_SESSION['alert']=0;
}}
?>


<!doctype html>
<html lang="eng">
<head>
	<title>PharmEasy</title>
	<meta charset="utf-8"/>
	<link type="text/css" href="css/style.css" rel="stylesheet"/>
	<script src="javascript/java_index.js" type="text/javascript">
	
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
			   <?php if(isset($_SESSION['username'])){ echo"logout";} else echo"Sign In";?>
			   </a>
			   </li>
			   <li><a href="cart.php"> Cart</a></li>
			   <li><a href="index.php?signin=2"><?php if(isset($_SESSION['username'])){ echo"Account";} else echo"Register";?></a></li>
			   
			   </ul>	
				
		    </nav>		
	        </div >
			<form action="index.php" method="get">
			<input type="search" name="SearchBar" class="SearchBar" />
			<button type="submit" id="SearchButton" class="SearchButton" >&#128269;Search</button>
			</form>


	    </div>
		 
	</header>
	
	<div class="MainBody">
			<div class="SlideShow">	
				<div class="slideshow-container" >
					<div class="mySlides fade">
					
					<img src="image/fit_slide.jpg" style="width:100%">
					
				    </div>

				 <div class="mySlides fade">
					
					<img src="image/ortho_slide.jpg" style="width:100%">
					
				 </div>

				<div class="mySlides fade">
					
					<img src="image/baby_slide.jpg" style="width:100%">
					
				 </div>

				 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				 <a class="next" onclick="plusSlides(1)">&#10095;</a>
				
	
				
				</div>
				<br>
				<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
				</div>
			</div>	

		<div class="category">
		
					<span class="heading_category">
						<p >
								<h2 >--------------------------------------Featured Categories--------------------------------------
								<h2>
						</p>
					</span>
					
					<div class="category_img" >
					<a href="search.php?category=diabatics"><img src="image/diabatics.jpg"  ></img></a>
					<div class="text_category">Diabatics</div>
					
					</div>
					<div class="category_img" >
					<a href="search.php?category=Child"><img src="image/baby.jpg"  ></img></a>
					<div class="text_category">Child & Mom</div>
					
					</div>
					<div class="category_img" >
					<a href="search.php?category=fitness"><img src="image/fitness.jpg"  ></img></a>
					<div class="text_category">Fitness</div>
					
					</div>
					<div class="category_img" >
					<a href="search.php?category=Ortho"><img src="image/ortho-support.jpg"  ></img></a>
					<div class="text_category">ortho-support</div>
					
					</div>
					
					</div>
				
					
					
		</div>
			
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
    
	<p> <a href="index.php?ac=1">My Account</a></p>
	<p> <a href="index.php?ac=1" >My orders</a></p>
	
	
</div>
</footer>


</div>
</body>

</html>