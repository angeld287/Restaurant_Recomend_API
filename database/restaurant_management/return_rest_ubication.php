<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"SELECT name, mapzoom FROM `restaurant`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}

echo json_encode($data);
?>