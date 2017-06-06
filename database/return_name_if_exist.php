<?php
include "db.php";
$name=$_POST['name'];
$data=array();
$q=mysqli_query($con,"select * from `users` where name = '$name'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>