<?php
$conn=new mysqli('localhost','root','','restraunt');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}
?>