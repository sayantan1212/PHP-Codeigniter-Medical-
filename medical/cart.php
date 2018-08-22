<?php
require 'config.php';
if(!isset($_SESSION['username']))
{
	$_SESSION['alert']=2;
	header('location:index.php');
	
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

if(isset($_GET['SearchBar']))
{	$search=$_GET['SearchBar'];
	
	if(strlen($search))
	{
		header("location:search.php?SearchBar=$search");
	}
}
if(isset($_GET['plus']) &&isset($_GET['sl']))
 { 	
	
	if($i=$_SESSION['cart_id'][$_GET['sl']])
	{if($_GET['plus']==1 || $_GET['plus']==-1)
	{
	 $qr=mysqli_real_escape_string($db,$_GET['plus']);
	 $uname=mysqli_real_escape_string($db,$_SESSION['username']);
	 
	 $sql="UPDATE cart_$uname SET quantity=quantity+$qr WHERE id=$i";
	 	
	 
	 mysqli_query($db,$sql) or die(mysqli_error($db));
	}
	}
}
if(isset($_GET['delete']) &&isset($_GET['sl']))
 { 	
	
	if($i=$_SESSION['cart_id'][$_GET['sl']])
	{
	if($_GET['delete']==1)
	{
	 
	 $uname=mysqli_real_escape_string($db,$_SESSION['username']);
	 
	 $sql="DELETE FROM cart_$uname WHERE id=$i";
	 	
	 
	 mysqli_query($db,$sql) or die(mysqli_error($db));
	}
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
	<link type="text/css" href="css/cart.css" rel="stylesheet"/>
</head>
<body>
<div>
	<header class="MainHeader">
	    <div class="TopHeader"  >
		
		   <a class="as" href="index.php"> <img  src="image/logo.png" id="logo" ></img></a>
			<div class="SignBar">	
			<nav> 
			   <ul>	
			   <li>
			  	   
			   <a href="index.php?signin=1">
			   <?php if(isset($_SESSION['username'])){ echo"logout";} else echo"Sign In";?>
			   </a>
			   </li>
			   <li><a href="?">Cart</a></li>
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
	    <table class="table">
		<tr> 
		<th class="table_header">sl.no</th>
		<th class="table_header">Name</th>
		<th class="table_header">Description</th>
		<th class="table_header">Quantity</th>
		<th class="table_header">Rate</th>
		<th class="table_header">Price</th>
		<th class="table_header">Action</th>
		</tr
		<?php 
			$sl=0;
			$total=0;
			$username=$_SESSION['username'];
			$q="select products.name,products.composition,products.price,cart_$username.quantity, cart_$username.id from cart_$username,products where cart_$username.id=products.id";
			$r=mysqli_query($db,$q) or die(mysqli_error($db));
			while ($row = mysqli_fetch_assoc($r))
			{	$sum_price=0;	
				$sl++;
				$price= $row['price'];
                $name = $row['name'];
                $description = $row['composition'];
				$quantity = $row["quantity"];
				
				
				$sum_price=$price*$quantity;
				$total += $sum_price;
				$_SESSION['cart_id'][$sl]=$row['id'];
				echo"
						<tr>
						
						<td>
						$sl
						</td>
						<td>
						$name
						</td>
						<td>
						$price
						</td>
						<td align=\"center\">
						<a href=\"cart.php?plus=-1&sl=$sl\" class=\"quantity_change\">&minus;</a>$quantity<a href=\"cart.php?plus=1&sl=$sl\" class=\"quantity_change\">&plus;</a>
						</td>
						<td>
						$price
						</td>
						<td>
						$sum_price
						</td>
						<td>
						<a href=\"cart.php?delete=1&sl=$sl\"><img class=\"delete\" src=\"image/delete.jpg\"></img></a>
						</td>
						</tr>
					";
				
			}
			echo"<tr >
	        <td colspan=6 align=\"right\">Total: $total</td>		
			<td class=\"order_td\"><a href=\"order.php\" class=\"order\"><img src=\"image/order_icon.png\"></img></a></td>
			</tr>";
			
		  
		  ?>
		</table>
	
	
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


</div>
</body>

</html>