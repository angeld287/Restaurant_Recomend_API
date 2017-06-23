<?php
 include "../db.php";
 if(isset($_POST['insert']))
 {
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $q=mysqli_query($con,"INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$name','$email',MD5('$password'))");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>