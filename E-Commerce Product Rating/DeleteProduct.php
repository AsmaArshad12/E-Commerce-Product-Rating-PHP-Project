<?php 
include "connection.php";
$Id=$_GET['id'];
$query="delete from products where Id='$Id'";
$msg= mysqli_query($con, $query);
if($msg)
{
	
	 echo "<script>window.location='ViewProduct.php';alert('Deleted Successfully');</script>";
}
else
{
	 echo "<script>window.location='ViewProduct.php';alert('Error Message');</script>";
}

?>