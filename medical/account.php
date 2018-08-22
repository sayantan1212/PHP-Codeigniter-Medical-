<?php
require 'config.php';
if(isset($_SESSION['username']))
{    $uname=$_SESSION['username'];
	$sql="select email from users where username='$uname'";
	$r=mysqli_query($db,$sql);
	 $row = mysqli_fetch_assoc($r);
	 $email=$row['email'];
}
if(isset($_GET['sl']))
{		$sl=$_GET['sl'];
		$id=$_SESSION['id'][$sl];
		$sql="update  orders set status='canceled' where item_id='$id'";
		$result = mysqli_query($db,$sql) or die(mysqli_error($db));
		header("location:account.php");
		
	
}
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
	<title>PharmEasy</title>
	<meta charset="utf-8"/>
	
	<link type="text/css" href="css/search.css" rel="stylesheet"/>
	<link type="text/css" href="css/account.css" rel="stylesheet"/>
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
			<form action="search.php" method="get">
			<input type="search" name="SearchBar" class="SearchBar" />
			<button type="submit" id="SearchButton" class="SearchButton" >&#128269;Search</button>
			</form>


	    </div>
		 
	</header>
	
	<div class="MainBody">
			
		<div class="Account_conatiner">
		<p><h2>Account Information</h2></p>
		<p><span class="username">Username:</span> <span class="user">  <?php 
		$uname=$_SESSION['username'];echo $uname;?></span></p>
		<span class="username"><p>Email:   </span> <spanclass="user"> <?php echo $email;?></span></p>
		</div>
		<div class="order_container" >
		<p class="username"><h2 >Orders:</h2></p>
		
		<?php
		if(isset($_SESSION['username']))
		{		$uname=$_SESSION['username'];
	            $sl=0;
			    $query="select products.name,products.image,products.price,products.composition,orders.status,orders.order_id,orders.quantity,products.id FROM products , orders where orders.item_id=products.id AND orders.username='$uname' ";
				$result = mysqli_query($db,$query) or die(mysqli_error($db));
            while ($row = mysqli_fetch_assoc($result))
            {   $flag=true;
				$sl++;
                $price= $row['price'];
                $name = $row['name'];
                $composition = $row['composition'];
                $image=$row['image'];				
				$order_id=$row['order_id'];
				$_SESSION['id'][$sl]=$row['id'];
				$quantity=$row['quantity'];
				$status=$row['status'];
			
				echo"<div class=\"product\" >
				 <div class=\"p_heading\"><h4>Order ID: $order_id </h4></div>
		        <div class=\"p_heading\"><h4>$name </h4></div>
				<div class=\"image_container\"> <img src=\"$image\"></img></div>
				<div class=\"price\"> Price: &#8377; $price/-</div>
				<div class=\"price\">$composition</div>
				<div class=\"price\"> Status : $status</div>
				<div class=\"price\"> Quantity : $quantity</div>
				
				<div class=\"button_div\">";
				if($status=='canceled')
				{echo"</div>
				</div>";}
				else{echo"<button ><a href=\"account.php?sl=$sl\">Cancel Order</a></button></div>
				</div>";}
				
		    }
				
				
				
		}
		
		
		
		
		?>
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
    
	<p> <a href="account.php?ac=1">My Account</a></p>
	<p> <a href="account.php?ac=1" >My orders</a></p>
	
	
</div>
</footer>


</div>
</body>

</html>