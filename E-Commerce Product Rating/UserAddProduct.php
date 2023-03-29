<?php

include "connection.php";

if(isset($_POST['submit']))
{

    $title= $_POST['title'];
    $productname= $_POST['productname'];
    $image=$_FILES['image']['name'];
    $price= $_POST['price'];

    $sql = "insert into products(ProductTitle, ProductName, Image, Price)VALUES ('$title','$productname','$image', '$price')";
    $result= mysqli_query($con, $sql);

    if ($result) {
      echo "<script>window.location='UserAddProduct.php';alert('Products Added Successfully');</script>";
     }
    else {

      echo "<script>window.location='UserAddProduct.php';alert('Invalid Data');</script>";
   }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Add Product</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


    <body  style="background-color:#6CBCE7">
     
 <?php  include "header/userheader.php"  ?>


   <br><br>
        <div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             <br>           
<h2 style="color:black;text-align:center;"> Add Product </h2>
   <br>
                            

<form  method="post" enctype="multipart/form-data">
                         
<center>



    <div class="form-group mb-4 ">
                        
       <select name="title" class="form-control w-50" required>
        <option value="">Select Product Title</option>
        <?php
        $query1 = mysqli_query($con,"select distinct(ProductTitle) FROM product_title ");
        while ($row = mysqli_fetch_assoc($query1)) {
        ?>

        <option value="<?php echo $row['ProductTitle']; ?>"><?php echo $row['ProductTitle']; ?></option>
        <?php } ?>
       </select>
                       
    </div>


       <div class="form-group mb-4 ">                    
        <input  type="text" name="productname" placeholder="Product Name" class="form-control w-50" required>
    </div>



     <div class="form-group mb-4 ">
       <input type="file" name="image" required style="margin-right:90px">
    </div>



       <div class="form-group mb-4 ">
        <input  type="text" name="price" placeholder="Price" class="form-control w-50" required>
    </div>





    <div class="form-group mb-4 ">             
        <input type="submit" name="submit" class="btn btn-primary" value="Add Product" style="width:50%">
    </div>
                   

                   
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>