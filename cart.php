<?php
error_reporting();
$servername="localhost";
$username="root";
$password="";
$dbname="cart";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo '<script>alert("adding to cart")</script>';
}
else
{
    echo '<script>alert("connection failed")</script>';
}

if($_POST['cart'])
{
$name       =$_POST['name'];
$product     =$_POST['product'];
$price      =$_POST['price'];

if(true )
{
         
 $result="INSERT INTO `cart` ( `name`, `product`, `price`) 
 VALUES (  '$name', '$product', '$price')";
 echo '<script>alert("registration successfully")</script>';
} 
else{
        echo '<script>alert("not added")</script>';
     }
     
$execute=mysqli_query($conn,$result);
}

if($execute)
{
    echo '<script>alert("addec")</script>';
}
else{
    echo'<script>alert("not added")</script>';
}

?>