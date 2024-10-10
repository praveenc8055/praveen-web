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
if($_POST['register'])
{
$name       =$_POST['name'];
$userid     =$_POST['userid'];
$email      =$_POST['email'];
$dob        =$_POST['dob'];
$gender      =$_POST['gender'];
$password   =$_POST['password'];
$cpassword  =$_POST['cpassword'];
$role       =$_POST['role'];
$number     =$_POST['number'];


$data="SELECT * FROM `users` WHERE `email` != '$email' AND `userid` != '$userid'";

$run=mysqli_query($conn,$data);
$count=mysqli_num_rows($run);



if($name != "" && $userid != "" && $email != "" && $dob != "" && 
$gender != "" && $password != "" && $cpassword != "" && $role != "" && $number != "")
{ 
    if($count>=0){
        if($password == $cpassword )
        {
         
            $result="INSERT INTO `users` ( `name`, `userid`, `email`, `dob`, `gender`, `password`, `role`, `number`) 
           VALUES (  '$name', '$userid', '$email', '$dob', '$gender', '$password', '$role', '$number')";
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