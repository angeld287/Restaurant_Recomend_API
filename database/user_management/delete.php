<?php
 include "../db.php";
 if(isset($_POST['delete']))
 {
 $id=$_POST['id'];
 $q=mysqli_query($con,"DELETE FROM users WHERE id = '$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>