<?php
 include "db.php";
 if(isset($_GET['id']))
 {
 $id=$_GET['id'];
 $q=mysqli_query($con,"delete from `users` where `id`='$id'");
 if($q)
	echo "success";
 else
	echo "error";
 }
 else{
	 echo "data";
 }
 ?>