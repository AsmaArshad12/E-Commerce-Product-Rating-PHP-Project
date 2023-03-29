
<!DOCTYPE html>
<html lang="en">
<head>


    <title>View Rating</title>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>


<body  style="background-color:#6CBCE7">
  
<?php
   include "header/adminheader.php"
?>
 <br><br>
 <center>
<h4>Rating Details</h4>
<br>
                
                <table border="1" style="width:1000px; height:150px;text-align:center;">

        <tr>
           
            <th>User Name</th>
            <th>Product Name</th>
           <th>Numerical Rating</th>
           <th>Thumb Rating</th>
           <th>Star Rating</th>
            <th>Comment</th>
          <th>Comment Rating</th>
     
        </tr>


<?php
include "connection.php";

$query="select * from rating";
$x= mysqli_query($con, $query);
while($row= mysqli_fetch_array($x))
{

        ?>
        <tr>
          <td><?php echo $row['UserName']; ?></td>
            <td><?php echo $row['ProductName']; ?></td>
            <td><?php echo $row['Numerical_rating']; ?></td>
            <td><?php echo $row['Thumb_rating']; ?></td>
            <td><?php echo $row['Star_rating']; ?></td>
            <td><?php echo $row['Comment']; ?></td>
            <td><?php echo $row['Comment_rating']; ?></td>
 
        </tr>
<?php
}

?>
  </center>  
</table>
       
    </div>
</div>

</body>
</html>
