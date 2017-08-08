<?php
 include "../db.php";
 if(isset($_POST['insert']))
 {
	 //`user_voted``restaurant_voted``number_voted`
 $user_voted=$_POST['user_voted'];
 $restaurant_voted=$_POST['restaurant_voted'];
 $number_voted=$_POST['number_voted'];
 $q=mysqli_query($con,"INSERT INTO rating (`user_voted`,`restaurant_voted`,`number_voted`) VALUES ('$user_voted','$restaurant_voted',$number_voted)");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>