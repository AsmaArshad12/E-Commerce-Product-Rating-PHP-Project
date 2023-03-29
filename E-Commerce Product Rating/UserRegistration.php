<?php

include "connection.php";
if(isset($_POST['submit']))
{

  
	$name= $_POST['name'];
	$email= $_POST['email'];
	$password = $_POST['password'];

	$query= "insert into user(Name, Email, Password) values('$name','$email','$password')";
	$result= mysqli_query($con, $query);
	if($result)
	{
		echo "<script>window.location='UserLogin.php';alert('User Registered Successfully');</script>";
	}
	else
	{
		echo "<script>window.location='UserRegistration.php';alert('Invalid Data');</script>";
	
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <title>User Registration</title>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

</head>
<body  style="background-color:#6CBCE7">

	 <?php include"header/header.php";  ?>


<br><br>

 <div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             
     <br>    


    <h2 style="color:black;text-align:center;"> User Registration </h2>
    <br>
                            

    <form  method="post">
                   
        <center>


        <div class="form-group mb-4 ">           
            <input  type="name" name="name" placeholder="Name" class="form-control w-50">
        </div>


        <div class="form-group mb-4 ">
            <input  type="email" name="email" placeholder="Email" class="form-control w-50">                       
        </div>


         <div class="form-group mb-4 ">
            <input  type="password" name="password" placeholder="Password" class="form-control w-50">
        </div>

						
        <div class="form-group mb-4 ">
            <input type="submit" name="submit" class="btn btn-primary" value="Registration" style="width:50%">
        </div>


					
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>