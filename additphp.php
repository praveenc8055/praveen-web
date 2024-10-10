<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="login";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo '<script>alert("connection ok")</script>';
}
else
{
    echo '<script>alert("connection failed")</script>';
}
//getting values
if($_POST['additem'])
{
$productid       =$_POST['productid'];
$name     =$_POST['name'];
$quantity     =$_POST['quantity'];



$data="SELECT * FROM `users` WHERE `email` != '$email' AND `userid` != '$userid'";

$run=mysqli_query($conn,$data);
$count=mysqli_num_rows($run);



if($productid != "" && $name != "" && $quantity != "" )
{ 
    if($count>=0){
        if($password == $cpassword )
        {
         
            $result="INSERT INTO `users` (  `productid`,`name`, `quantity`) 
           VALUES (  '$productid','$name',  '$quantity')";
            echo '<script>alert("registration successfully")</script>';
     } 
     
    else{
        echo '<script>alert("password not matched")</script>';
     }
     
          
    }
    else{
        echo '<script>alert("email or userid is already existence")</script>';
    }

}
else{
    echo '<script>alert("fill all details above given")</script>';
    
}
$execute=mysqli_query($conn,$result);
}

if($execute)
{
    echo '<script>alert("executed")</script>';
}
else{
    echo'<script>alert("not executed")</script>';
}

?>