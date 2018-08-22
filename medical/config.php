<?php
$order_id=10000;
$db_host='localhost';
$db_user='root';
$db_pwd='';
$database='medical';
$errors = array();
$username="";
$email="";
$_SESSION['alert']=0;
//connecting the database
if(!($db=mysqli_connect($db_host,$db_user,$db_pwd,$database)))
die("can't Connect to Database");
//starting session
session_start();




	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email =mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if(strlen(trim($username)) != strlen($username)) { array_push($errors, "Username must not contain any white spaces!!");}
		if(strlen($username)<2){array_push($errors, "username must be atleast two caracters long");}
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if(strlen($password_1)<8){array_push($errors, "Password must be atleast eight caracters long");}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (!count($errors)) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			if($result=mysqli_query($db, $query))
			{
			 array_push($errors,"Congrats!!you have successfully been registerd.Click <a href=\"login.php\">login<a>");
			 $qr="CREATE TABLE cart_$username(id int,quantity int);";
			 mysqli_query($db, $qr);
            }
			else
				array_push($errors,"Sorry,This username or email already been taken. Try a new one!!! ");
			
		}

	}

	 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (!count($errors)) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results)) 
			{
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $username;
				header('location: index.php');
			}
			else 
			{
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	
	//Header section of all pages
	if(isset($_GET['signin']))
{
	if($_GET['signin']==1)
	{	
		if(isset($_SESSION['username'])) 
		{session_destroy(); 
		  header('location:index.php');
		  }
		else 
		header('location:login.php');
	}
	elseif($_GET['signin']==2)
	{
		if(isset($_SESSION['username']))
		
			header('location:account.php');
		else
			header('location:registration.php');	
	}
	
}



?>
