<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .add label{
    font-size: 60px;
    color:#32ab20;
    margin-left:200px;
    margin-top:0px;
    }
    .add input{
        font-size: 40px;
        color:#7dfe69;
    }
    .add button{
        height:60px;
        width:200px;
        margin-left:380px;
        font-size:50px;
        
        background-image: linear-gradient(132deg, #F4D03F 0%, #16d82e 100%);

    }
    .add label,input{
        margin-top:60px;
    }
</style>
    <title>UPDATE DISH</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <div class="add">
        <form method="POST">
            <label for="name" style="margin-left:215px;">Dish:</label>
            <td><?php
             $id=$_GET['id'];
                 $sql="SELECT * FROM `nonvegmenu` WHERE id=$id"; 
                 $result=mysqli_query($conn,$sql);
                 
                 while($row=$result->fetch_assoc()) 
                     {

                         echo"<input type='text' placeholder=".$row['dish']." name='item'>";

                         
                     }
               
                                ?></td><br>
            <label for="">Price:</label>
            <td><?php $id=$_GET['id'];
                 $sql="SELECT * FROM `nonvegmenu` WHERE id=$id"; 
                 $result=mysqli_query($conn,$sql);
                 
                 while($row=$result->fetch_assoc()) 
                     {

                         echo"<input type='integer' placeholder=₹".$row['price']." name='price'>";

                         
                     }
               
                                ?></td><br>
            <button type="submit" name="submit">ADD</button>
        </form>
    </div>

<?php
     
     
     $url="http://localhost/Restaurant/adnonveg.php";

     if(isset($_POST['submit']))
     {
         $id=$_GET["id"];
         $item=$_POST["item"];
         $price=$_POST["price"];
         $sql="UPDATE `nonvegmenu` SET `dish`='$item',`price`='$price' WHERE `id`=$id";
         $result=mysqli_query($conn,$sql);
         if($result)
         {
             header("location: $url"); 
            }  
        }     
?>    
</body>
</html>