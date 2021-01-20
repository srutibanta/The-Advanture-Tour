<?php
session_start();

$con= mysqli_connect('localhost','root');
 mysqli_select_db($con,'Signup');
 
 $user=$_POST['user'];
 
 $password=$_POST['password'];
 
 $s= "select * from signup where user='$user'&& password='$password'";
 $result= mysqli_query($con,$s);
 $num= mysqli_num_rows($result);
 if ($num==1)
 {
   echo"Login Successful";
  header('Refresh:2; url=http://localhost/The-Advanture-Tour/index.html');
 }
 else
 { echo"LOGIN FAILED!";
   header('Refresh:1; url=http://localhost/The-Advanture-Tour/signup.html');
    }
?>
