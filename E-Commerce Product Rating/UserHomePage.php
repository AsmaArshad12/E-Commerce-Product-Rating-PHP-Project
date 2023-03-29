 <!DOCTYPE html>
<html lang="en">
<head>

    <title>User Home Page</title>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>


<body  style="background-color:#6CBCE7">
  
<?php
   include "header/userheader.php";

?>
 <br><br>
 <center>

<br>
                
            
<?php
include "connection.php";
?>
 <div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
       
<form  method="post" action="Products.php">
                   

         <div class="form-group mb-4">
                        
       <select name="title" class="form-control w-50" required>
        <option value="">Select Product Title</option>
        <?php
        $query1 = mysqli_query($con,"select distinct(ProductTitle) from product_title ");
        while ($row = mysqli_fetch_assoc($query1)) {
        ?>

        <option value="<?php echo $row['ProductTitle']; ?>"><?php echo $row['ProductTitle']; ?></option>

?>

        <?php } ?>
       </select>
                       
    </div>

 
   <div class="form-group mb-4 ">
                        
        <input type="submit" name="submit" class="btn btn-primary" value="Search" style="width:50%">
                        
    </div>
 </center>                   

  </form>  
</div>
</body>
</html>