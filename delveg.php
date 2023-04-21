<?php
include "connect.php";

    $id=$_GET["id"];
    $item=$_POST["item"];
    $price=$_POST["price"];
    $url="http://localhost/Restaurant/adveg.php"; 
    $sql="DELETE FROM `vegmenu` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: $url"); 
       }
?>