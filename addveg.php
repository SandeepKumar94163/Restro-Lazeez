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
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <div class="add">
        <form method="POST">
            <label for="name" style="margin-left:215px;">Dish:</label>
            <input type="text" placeholder="Enter New Item" name="item"><br>
            <label for="">Price:</label>
            <input type="integer" placeholder="Enter Price" name="price"><br>
            <button type="submit" name="submit">ADD</button>
        </form>
    </div>
<?php
     
     
     $url="http://localhost/restaurant/adveg.php";

     if(isset($_POST['submit']))
     {
        $item=$_POST["item"];
     $price=$_POST["price"];
       $sql="INSERT INTO `vegmenu`(`dish`, `price`) VALUES ('$item','$price')";
       $result=mysqli_query($conn,$sql);

       if($result)//success fire
       {
         header("location: $url");//redirect
       }  
       
     }
?>    
</body>
</html>