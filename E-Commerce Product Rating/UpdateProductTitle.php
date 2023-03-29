<?php

include "connection.php";
if(isset($_POST['submit']))
{

  $id=$_POST['id'];
  
  $title= $_POST['title'];
  
$query="update product_title set ProductTitle='$title' where Id='$id'";
$update=mysqli_query($con, $query);

if($update)
{
  echo "<script>window.location='ViewProductTitle.php';alert('Update Successfully');</script>";
   
}

else
{
  echo "<script>window.location='ViewProductTitle.php';alert('InValid Data');</script>";
}


}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Update Product Title</title>
   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<body  style="background-color:#6CBCE7">
    
   <?php 

include "header/adminheader.php";




$Id=$_GET['id'];
$query="select * from product_title where Id='$Id'";
$x= mysqli_query($con, $query);
while($row=mysqli_fetch_array($x))
{
?>


<br><br>

<div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             <br>           
<h2 style="color:black;text-align:center;"> Update Product Title </h2>
   <br>
                           
 

     <form  method="post">
                              
       <center>

      <div class="form-group mb-4 ">
                <input  type="hidden" name="id" value="<?php echo $row['Id']; ?>" class="form-control w-50">
                       
            </div>


       <label style="margin-right: 290px">Product Title</label>    
                   
                   
        <div class="form-group mb-4 ">
                        
            <input  type="text" name="title" class="form-control w-50" value="<?php echo $row['ProductTitle']; ?>">
                       
        </div>


<?php
}
?>

           <div class="form-group mb-4 ">
                      
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" style="width:50%">
           </div>
                       
          
                       
    </div>
    </div>                
         <br><br>            
</form>
</body>
</html>
