<?php 
 session_start();
include 'connection.php';
include "header/userheader.php";
if(isset($_POST['submit']))
{
  

$product=$_POST['product'];
$name=$_SESSION['name'];
$numrate= $_POST['numrate'];
  $thumb= $_POST['textBox'];
  $x=1;
  $y=2;
if($x==$thumb){
  $thumbs=1;
}elseif($y==$thumb){
$thumbs=2;
}


$checked= $_POST['checked'];
$comment_rating= $_POST['comment'];
$bad='bad';
$poor='poor';
$good='good';
$nice='nice';
$excellent='excellent';
if ($comment_rating==$bad) {
$rating=1;
$comment=$bad;

}elseif ($comment_rating==$poor) {
$rating=2;
$comment=$poor;
}elseif ($comment_rating==$good) {
$rating=3;
$comment= $good;
}elseif ($comment_rating==$nice) {
$rating=4;
$comment= $nice;
}elseif ($comment_rating==$excellent) {
$rating=5;
$comment=$excellent;
}


  $sql = "insert into rating(UserName, ProductName, Numerical_rating, Thumb_rating, Star_rating, Comment, Comment_rating)VALUES ('$name','$product','$numrate', '$thumbs','$checked', '$comment','$rating')";
  $result= mysqli_query($con, $sql);
   if ($result) {
    
      echo "<script>alert('Ratings Added Successfully');</script>";
     }
    else {

      echo "<script>window.location='Details.php';alert('Invalid Data');</script>";
   }
}


?>               




 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Product Details</title>  
             <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<script>

    $(document).ready(function() {
  $(".vote_buttoon").click(function() {
    $(".vote_buttoon").removeClass('active_vote');
    $(this).toggleClass('active_vote');
    
   
  });
});

 

function setText7(obj){
var val = obj.value;
console.log(val);
document.getElementById('textBox').value = val;
}

</script>
<style>

   .up.active_vote .fa{
  color: #0000ff;
 
}
   .down.active_vote .fa{
  color: red;
 
}

</style>
      </head>  


      <body>  
           <br />  
            
           <div class="container" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                <h3 align="center">Product Details</h3><br />  
                <?php  

                include 'connection.php';
          $id=   $_GET['id'];

                $query = "SELECT ProductName, ProductTitle, Image, Price FROM products group by ProductName having ProductName='$id'";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
        
                     
                     <img src="upload/<?php echo $row["Image"]; ?>" class="img-responsive" style="height:300px; width:300px" /><br />  
                     <br>
                    <h4 class="text-info">Product Name:<?php echo $row["ProductName"]; ?></h4> 
                   
                     <?php  $productname=$row["ProductName"];?>
         
                    <h4 class="text-danger">Price: <?php echo $row["Price"]; ?></h4>  

                     <?php  
                     }  
                }  
                              ?>            
                                
                   
                   <?php  
                   $ids=   $_GET['id'];
           $query1="SELECT  MAX(( Numerical_rating + Thumb_rating + Star_rating+ Comment_rating)/(4)) AS average FROM `rating` inner join `products` on products.ProductName=rating.ProductName where rating.ProductName='$ids'";
            $result1 = mysqli_query($con, $query1);  
                if(mysqli_num_rows($result1) > 0)  
                {  
                     while($row1 = mysqli_fetch_array($result1))  
                     {  
                ?>  
        
                       <h4 class="text-danger">Average Rating: <?php echo $row1["average"]; ?></h4>  
<?php
}
}
?>

                            
                           


<button style="font-size:50px;border: none;outline:none;"  name="btnSeven" id="btnSeven" value="1" onclick="setText7(this)"> <a class="up vote_buttoon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></button>
   <button style="font-size:50px;border: none;outline:none;" name="btnSeven" id="btnSeven" value="2" onclick="setText7(this)" ><a class="down vote_buttoon"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a></button>
 
    
                 
                <form method="post">
<input type="hidden" name="textBox" id="textBox" value=""/>

                   <input type="radio" name="checked" value="1">&nbsp;<span class="fa fa-star checked"></span><br>
                   <input type="radio" name="checked" value="2" >&nbsp;<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
                  
                   <input type="radio" name="checked" value="3">&nbsp;<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
                    <input type="radio" name="checked" value="4">&nbsp;<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>

                    <input type="radio" name="checked" value="5">&nbsp;<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
                	
                  <div class="col-md-4">
                  <input type="text " name="comment" placeholder="comment" class="form-control">
                  <br></div>

                  <div class="col-md-4">
                  <input type="text" name="numrate" id="textBox" placeholder="Numerical Rating" class="form-control" />
                </div>
                  <br>
                   <input type="hidden"  name="product" value="<?php echo $productname;?>"> 
                   
                	<input type="submit" name="submit" class="btn btn-primary ">
                </form>
      </div>
           <br />  
      </body>  
 </html>




