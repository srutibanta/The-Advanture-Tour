<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "contact_us";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 echo "Your message was sent successfully";
 $name=$_GET['name'];
 $email=$_GET['email'];
 $mobile=$_GET['phone'];
 $message=$_GET['message'];
 $res = mysqli_query($conn,"insert into contact
  values('$name','$email','$mobile','$message')");
   $conn -> close();
?>