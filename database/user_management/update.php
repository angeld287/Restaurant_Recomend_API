<?php
 include "../db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $favorite_cat_restaurant=$_POST['favorite_cat_restaurant'];
 $q=mysqli_query($con,"UPDATE `users` SET `name`='$name',`email`='$email',`favorite_cat_restaurant`='$favorite_cat_restaurant' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>