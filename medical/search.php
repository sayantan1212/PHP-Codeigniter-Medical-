<?php
require 'config.php';
$sql=null;
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
if(isset($_GET['category']))
{
	$cat=$_GET['category'];
	if(!$cat=="Ortho")
	{
		$sql="SELECT A.name, A.composition, A.price, A.image, A.id FROM products A , products B WHERE 
		A.expiry_date < B.expiry_date AND A.category='%$cat%' group by name";
	}
	else
	{
		$sql="SELECT A.name, A.composition, A.price, A.image, A.id FROM products A , products B WHERE A.category='$cat' group by name";
        
	  }
}
if(isset($_GET['SearchBar']))
{
	if($search=$_GET['SearchBar'])
	$sql="SELECT A.id, A.name, A.composition, A.price, A.image FROM products A,products B  WHERE A.expiry_date < B.expiry_date AND ( A.name like '%$search%' OR A.composition like '%$search%') group by name";
	else
	$sql=null;	
}
if(isset($_SESSION['alert']))
{
	if($_SESSION['alert']==1)
{
	echo "<script>alert(\"One item added\");</script> ";
	$_SESSION['alert']=0;
}
elseif($_SESSION['alert']==2)
{
	echo "<script>alert(\"plesae login\");</script> ";
    $_SESSION['alert']=0;
}}
?>
<!doctype html>
<html lang="eng">
<head>
	<title>Medical Store</title>
	<meta charset="utf-8"/>
	<link type="text/css" href="css/style.css" rel="stylesheet"/>
	<link type="text/css" href="css/search.css" rel="stylesheet"/>
	
	
	</script>

</head>
<body>
 
	<header class="MainHeader">
	    <div class="TopHeader"  >
		
		    <a class="as" href="index.php">  <img  src="image/logo.png" id="logo" ></img></a>
			<div class="SignBar">	
			<nav> 
			   <ul>	
			   <li>
			   <a href="index.php?signin=1">
			   <?php if(isset($_SESSION['username'])){ echo"logout";} else echo"Sign In";?>
			   </a>
			   </li>
			   <li><a href="cart.php">Cart</a></li>
			   <li><a href="index.php?signin=2"><?php if(isset($_SESSION['username'])){ echo"Account";} else echo"Register";?></a></li>
			   
			   </ul>	
			   
				
		    </nav>		
	        </div >
			<form action="search.php" method="get">
			<input type="search" name="SearchBar" class="SearchBar" />
			<button type="submit" id="SearchButton" class="SearchButton" >&#128269;Search</button>
			</form>


	    </div>
		 
	</header>
<div class="container">
	<div class="get_product">
		<!--
		<div class="product" >
		   <div class="p_heading"><h4>Namme of product </h4></div>
		  <div class="image_container"> <img src="image/baby.jpg"></img></div>
		    <div class="price"> Price:500</div>
			<div class="price">composotion</div>
			<button  >Add to cart</button>
		</div>	
		-->	
		<?php 
		    
			$_SESSION['URL']=$_SERVER['REQUEST_URI'];
			$sl=0;
	 
			$flag=false;
			if($sql)
            {
			$result = mysqli_query($db,$sql) or die(mysqli_error($db));
            while ($row = mysqli_fetch_assoc($result))
            {   $flag=true;
				$sl++;
                $price= $row['price'];
                $name = $row['name'];
                $composition = $row['composition'];
                $image=$row['image'];
				$_SESSION['id'][$sl]=$row['id'];
				
				echo"<div class=\"product\" >
		        <div class=\"p_heading\"><h4>$name </h4></div>
				<div class=\"image_container\"> <img src=\"$image\"></img></div>
				<div class=\"price\"> Price: &#8377; $price/-</div>
				<div class=\"price\">$composition</div>
				
				<div class=\"button_div\"><button  ><a href=\"add.php?sl=$sl\">Add to cart</a></button></div>
				</div>";
				
		    }}
		else
		{
			echo"<h1>empty Search</h1>";
			$flag=true;
		}			
		 if(!$flag)
		 echo"<h1>Item not Found</h1>";
	 
	 
	 

	 
	 
		?>
    
</div></div>	
<footer class="MainFooter" >

    <div >
	<h4>Company</h4>
    <p> Contact Us</p>
	<p> Phone:<a href="tel:123456789">123456789</a></p>
	<p> Mail:<a href="mailto:someone@example.com" >someone@example.com</a></p>
	
	
	</div>
   <div class="account_footer">
	<h4>Account</h4>
    
	<p> <a href="search.php?ac=1">My Account</a></p>
	<p> <a href="search.php?ac=1" >My orders</a></p>
	
	
</div>>
</footer>


   
 </body>

</html>