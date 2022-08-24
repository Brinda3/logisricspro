<?php
session_start();
$username=trim($_POST['id']);
$password=trim($_POST['password']);
$host="localhost";

$user="root";

$pass="";
$dbname = 'sih';
$con = mysqli_connect($host, $user, $pass,$dbname);  
if(! $con )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
//echo 'Connected successfully';  
  

 //to prevent from mysqli injection  
 $username = stripcslashes($username);  
 $password = stripcslashes($password);  
 $username = mysqli_real_escape_string($con, $username);  
 $password = mysqli_real_escape_string($con, $password);  

 $sql = "select *from login where id = '$username' and password = '$password'";  
 $result = mysqli_query($con, $sql);  
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
 $count = mysqli_num_rows($result);  
   
 if($count == 1)
 {  
     
       setcookie("id",$username);
       

        header("Location: main.php");
          
 }  
 else{  
     

        header("Location: error.php");
 }  
 
 mysqli_close($conn);
?>
?>