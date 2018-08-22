<?php 

require 'config.php';
$sl=$_REQUEST['sl'];
$a=$_SESSION['URL'];
$id=$_SESSION['id'][$sl];
$_SESSION['alert']=0;
$username=$_SESSION['username'];
if(!$username)
{
	$_SESSION['alert']=2;
	header('location:'.$a);

}

else{	
$qr="SELECT * from cart_$username WHERE id=$id";
$v=(mysqli_query($db,$qr));
if(mysqli_num_rows($v))
{
	$r="UPDATE cart_$username set quantity=quantity+1 where id=$id";
	(mysqli_query($db,$r));
	$_SESSION['alert']=1;
	
	}
else
{	$q="INSERT INTO cart_$username VALUES ('$id','1')";
	$r=(mysqli_query($db,$q));
	if($r)
	{$_SESSION['alert']=1;}
	else	
	{$_SESSION['alert']=2;}
	
}
header('location:'.$a);

}

?>