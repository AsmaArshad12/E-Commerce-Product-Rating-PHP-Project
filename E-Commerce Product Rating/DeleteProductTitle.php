<?php 
include "connection.php";
$Id=$_GET['id'];
$query="delete from product_title where Id='$Id'";
$msg= mysqli_query($con, $query);
if($msg)
{
	
	 echo "<script>window.location='ViewProductTitle.php';alert('Deleted Successfully');</script>";
}
else
{
	echo "<script>window.location='ViewProductTitle.php';alert('Error Message');</script>";
}

?>