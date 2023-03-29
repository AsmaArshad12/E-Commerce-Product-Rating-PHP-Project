<?php

include "connection.php";

if(isset($_POST['submit']))
{

    $title= $_POST['title'];
  
    $sql = "insert into product_title(ProductTitle)VALUES ('$title')";
    $result= mysqli_query($con, $sql);
    if ($result) {
      echo "<script>window.location='ViewProductTitle.php';alert('Product Title Added Successfully');</script>";
     }
    else {
      echo "<script>window.location='AdminHomePage.php';alert('Invalid Data');</script>";
   }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Add Product Title</title>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


    <body  style="background-color:#6CBCE7">
     
 <?php  include "header/adminheader.php"  ?>


   <br><br>
        <div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             <br>           
<h2 style="color:black;text-align:center;"> Add Product Title </h2>
   <br>
                            

<form  method="post">
                              
<center>



    <div class="form-group mb-4 ">                 
        <input  type="text" name="title" placeholder="Product Title" class="form-control w-50" required>
    </div>


    <div class="form-group mb-4 ">                  
        <input type="submit" name="submit" class="btn btn-primary" value="Submit" style="width:50%">             
    </div>
                   
                   
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>