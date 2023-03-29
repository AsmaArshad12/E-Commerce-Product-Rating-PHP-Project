<?php

include "header/userheader.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title> Product Details </title>
   
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	     
</head>
<body>

	
<br>
	
<center>
<h2> Product Details</h2>
</center>
	
	<div class="container " id="featured" >
	<div class="row text-center">	  
		  <?php
    
    include "connection.php";

    if(isset($_POST['submit'])){
    $title=  $_POST['title'];
	$query= "select * from products where ProductTitle='$title' "; 
	$results = mysqli_query($con, $query);
        while($row =mysqli_fetch_array($results))
        {
        	?>
        	
  <div class="col-md-3 col-sm-4 col-xs-6">
				<div class="product">
					<div style="border:2px solid red;" class="bg-secondary">
						<br><br>
        <img src="upload/<?php echo $row['Image']?>"  class="img-responsive w-50 h-50" >
<br><br>
<h5>Product Name:-	 <?php echo $row['ProductName']; ?></h5>
<h6>Price:-	 <?php echo $row['Price']; ?></h6>
<a href="Details.php?id=<?php echo $row['ProductName']; ?>" class="btn btn-primary">Details</a>
<br><br>
      </div>
    </div>
</div>


	<?php 	
    }
}
    ?>
   
	</div>
</div>				
		
</body>
</html>