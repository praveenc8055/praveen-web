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
if($_POST['login'])
{

$email      =$_POST['email'];
$password   =$_POST['password'];

$data="SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

$execute=mysqli_query($conn,$data);
$count=mysqli_num_rows($execute);


if($count>=1){
    $run='CREATE TABLE `users`.`user` (`id` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `cartid` VARCHAR(20) NOT NULL , `address` VARCHAR(200) NOT NULL ) ENGINE = InnoDB';
    header("location:product.php");
}

else{
    echo '<script>alert("check email and password")</script>';
}

}
if($run){
    echo '<script>alert("excecuted")</script>';
}

else{
    echo '<script>alert("not exececuted")</script>';
}


?>