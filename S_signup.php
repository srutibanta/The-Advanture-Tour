<?php
session_start();
header('Refresh:1; url=http://localhost/The-Advanture-Tour/signup.html');
$con= mysqli_connect('localhost','root');
 mysqli_select_db($con,'signup');
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $user=$_POST['user'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];
 $s= "select * from signup where user='$user'";
 $result= mysqli_query($con,$s);
 $num= mysqli_num_rows($result);
 if ($num==1)
 {
     echo"Username already Taken!";
 }
 else
 {
     $reg= "insert into signup(firstname,lastname,user,email,password,cpassword) values('$firstname','$lastname','$user','$email','$password','$cpassword')";
     mysqli_query($con,$reg);
     echo"Registration Successful";
    }
?>
