<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        button{
            width:130px;
            height:40px;
            font-size:25px;
            margin:1px 1px;
            margin-bottom:9px;
        }
        tr td{
            font-size:40px;
        }
        table{
            margin-left:2%;
            margin-right:2%;
        }
    </style>
    <title>ADMIN-VEG</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="nav">
            <ul>
                <li><a href="http://localhost/Restaurant/adminhome.php">Home</a></li>
                <li><a href="">Dish
                    <ul>
                        <li>Starter</li>
                        <li>Main-Course</li>
                        <li>Drinks</li>
                        <li>Desserts</li>
                        <li>Salad</li>
                    </ul>

                </a></li>
                <li><a href="">Tables</a></li>
                <li><a href="">Items
                    <ul>
                        <li><a href="http://localhost/Restaurant/adveg.php">Veg</a></li>
                        <li><a href="http://localhost/Restaurant/adnonveg.php">Non-Veg</a></li>
                    </ul>
                </a></li>
                <li><a href="">Feedback</a></li>
            </ul>
        </div>
    </header>
    <div class="content-veg">
        <img src="biryani.jpg" alt="">
        <img src="burgur.jpg" alt="">
        <img src="burgur2.jpg" alt="">
        <img src="burgur1.jpg" alt="">
        <img src="biryani.jpg" alt="">
        <img src="burgur.jpg" alt="">
    </div>
    <div class="con-veg">
        <h2>VEG-MENU</h2>
    </div>
    <div>
        <button style="margin-left:30px;height:80px;width:180px;"><a href="http://localhost/Restaurant/addveg.php">ADD ITEM</a></button>
    </div>
    <div class="table">
        <table>
        <tr>
            <th>S.No.</th>
            <th>DISH</th>
            <th>Price</th>
            <th colspan=2>Manage Items</th>
        </tr>
    
    </div>
</div>
<?php
$sql="SELECT * FROM `vegmenu` WHERE 1";
$result=mysqli_query($conn,$sql);
$no=1;

    while($row=$result->fetch_assoc())
    {
        echo"
        <tr>
            <td>".$no."</td>
            <td>".$row["dish"]."</td>
            <td>₹".$row["price"]."</td>        
            <td><button><a href='http://localhost/Restaurant/editveg.php?id=$row[id]'>EDIT</a></button></td>
            <td><button><a href='http://localhost/Restaurant/delveg.php?id=$row[id]'>DELETE</a></button></td>
        </tr>
        ";
        $no++;

    }
?>
</table>
</body>
</html>