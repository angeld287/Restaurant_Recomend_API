<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select email from `users`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>