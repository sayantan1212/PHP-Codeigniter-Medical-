<?php 
	require 'config.php';
	
    if(isset($_POST['submit']))
	{  
		$fullname=$_REQUEST['fullname'];
		$phone_number=$_REQUEST['phone_number'];
		$pincode=$_REQUEST['pincode'];
		$state=$_REQUEST['state'];
		$district=$_REQUEST['district'];
		$locality=$_REQUEST['locality'];	
		if (empty($fullname)) { array_push($errors, "Fullname is required"); }
		elseif(strlen($fullname)<5){array_push($errors, "Fullname must be atleast 5 characters long");}
		elseif (empty($phone_number)) { array_push($errors, "Phone number is required"); }
		elseif(strlen($phone_number)<10 && strlen($phone_number)>13){array_push($errors, "Phone number must be ten to thirteen characters long");}
		elseif (empty($pincode)) { array_push($errors, "Pincode is required"); }
		elseif(strlen($pincode)!=6){array_push($errors, "Pincode must be six digits long");}
		elseif (empty($locality)) { array_push($errors, "Locality is required"); }
		elseif(empty($district)){array_push($errors, "District must be specified");}
		elseif(empty($state)){array_push($errors, "State must be specified");}
		elseif(!Isset($_POST['payment'])){array_push($errors, "Select a Payemnt method");}
		elseif(!Isset($_POST['terms'])){array_push($errors, "Please read the terms and conditions and select if you agree");}
	
	    if (!count($errors)) {
		
		$flag=false;
		$total=0;
		$address=$fullname . '\n' . $locality . '\n' . $district . '\n'. $state . '\n' . 'phone Number= ' . $phone_number . 'pin=' . $pincode;
	
	    $username=$_SESSION['username'];
		$qr="select * from cart_$username";
		$result=mysqli_query($db,$qr);
		 while ($row = mysqli_fetch_assoc($result))
            {   
                
                $id=$row['id'];
				$q="SELECT price FROM products WHERE id=$id";
				$items=$row['quantity'];
                $r=mysqli_query($db,$q);
				$row2=mysqli_fetch_assoc($r);
				$total+=($row['quantity'])*($row2['price']);
				$q2="SELECT order_id FROM orders ORDER BY order_id DESC";
				$r2=mysqli_query($db,$q2);
				$row3=mysqli_fetch_assoc($r2);
				$order_id=$row3['order_id'];
				$order_id++;
				$qr="INSERT INTO orders(order_id,username,price,status,address,pin,item_id,quantity)VALUES ('$order_id','$username',$total,'ordered','$address',$pincode,'$id',$items)";
				if($re=mysqli_query($db,$qr));
				if($re)
				$flag=true;
				
				
			
			}
			
			if($flag)
				
				header('location:success.php?r=1');
			
			else
				header('location:success.php?r=0');
	
	    }
	}
?>



<html lang="en">
<head>
    <title>Pharmeasy</title>
    <meta charset="utf-8">
    
	<link type="text/css" href="css/style.css" rel="stylesheet"/>
	<link type="text/css" href="css/order.css" rel="stylesheet"/>
	<link type="text/css" href="css/style_login_reg.css" rel="stylesheet"/>
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
	
<div class="Mainbody">
  <div class="container">
     <form action="order.php" method="post">
      <?php include 'errors.php'; ?>
	  <div class="row">
      <h4>Delivery Details</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" name="fullname"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
		<div class="row">
        <div class="input-group input-group-icon">
          <input type="number" placeholder="Phone Number" name="phone_number"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
		<div class="row">
        <div class="input-group input-group-icon">
          <input type="number" placeholder="Pincode" name="pincode"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
		<div class="row">
        <div class="input-group input-group-icon">
          <input type="text" placeholder="Locality" name="locality"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
		<div class="row">
        <div class="input-group input-group-icon">
          <input type="text" placeholder="District" name="district"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
		<div class="row-half">
        <div class="input-group input-group-icon">
          <input type="text" placeholder="State" name="state"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
        </div>
        </div>
    
      <div class="row">
      <h4>Payment options</h4>
      <div class="input-group-icon">
        <input type="radio" id="terms" name="payment"/>
        <label for="items"><span><i class="fa fa-cc-visa"></i>Cash On Delivery</span></label>
       
       
      </div>
     
      
       </div>
       <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group-icon">
        <input type="checkbox" id="terms" name="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and 
							hereby confirm I have read the privacy policy.</label>
        </div>
        </div>
	     <input type="submit" value="Place Order" name="submit" />
	
      </form>
        </div>				
    </div></div>
</div></div></div>	
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
	<p> Mail:<a href="accounts.php" >order</a></p>>
	
	
	</div>
</footer>



</body>

</html>

	