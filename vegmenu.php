<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="dish.php">Dishes
                <ul>
                        <li><a href="http://localhost/Restaurant/dish.php#starter">Starter</a></li>
                        <li><a href="http://localhost/Restaurant/dish.php#maincourse">Main-Course</a></li>
                        <li><a href="http://localhost/Restaurant/dish.php#drinks">Drinks</a></li>
                        <li><a href="http://localhost/Restaurant/dish.php#desserts">Desserts</a></li>
                        <li><a href="http://localhost/Restaurant/dish.php#salad">Salad</a></li>
                    </ul>
                        
                </a></li>  
                
                <li><a href="#">Menu
                    <ul>
                        <li><a href="vegmenu.php">Veg</a></li>
                        <li><a href="nonvegmenu.php">Non-Veg</a></li>
                    </ul>
                </a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="orders.php">Orders</a></li>
            </ul>
        </div>
    </header>
    <div class="content-veg">
        <img src="biryani.jpg" alt="">
        <img src="burgur.jpg" alt="">
        <img src="burgur2.jpg" alt="">
        <img src="burgur1.jpg" alt="">
        <img src="biryani.jpg" alt="">
        <img src="burgur2.jpg" alt="">
        
    </div>
    <div class="con-veg">
        <h2>VEG-MENU</h2>
    </div>
    <div class="table">
        <table>
        <tr>
            <th>S.No.</th>
            <th>DISH</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Amount</th>
        </tr>

    
    </div>
    <?php 
        $sql="SELECT * FROM `vegmenu` WHERE 1";
        $result=mysqli_query($conn,$sql);
        $no=1;
        // $quantity="SELECT `quantity` FROM `vegmenu`;
        $price=(int)"SELECT `price` FROM `vegmenu` WHERE 1";
        
        $quantity=(int)"SELECT `quantity` FROM `vegmenu` WHERE 1";
        // $amount= ($price)*($quantity);
        
        while($row=$result->fetch_assoc())
        {
            echo"
            <tr>
            <td>".$no."</td>
            <td>".$row["dish"]."</td>
            <td>₹".$row["price"]."</td>
            <td>".$row["quantity"]."</td>
            <td>₹".$row['price']*$row['quantity']."</td>
        </tr>
        
        ";
        $no++;

    }
?>
    
    </table>
</body>
</html>