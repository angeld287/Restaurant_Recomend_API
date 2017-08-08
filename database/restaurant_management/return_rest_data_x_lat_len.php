<?php
include "db.php";
$latitude = $_GET["latitude"];
$length = $_GET["length"];
$data=array();
$q=mysqli_query($con,"SELECT * FROM `restaurant` WHERE (latitude > '$latitude' - 0.003 and latitude < '$latitude' + 0.003) and (length > '$length' - 0.003 and length < '$length' + 0.003)");
while ($row=mysqli_fetch_assoc($q)){
 $data[]=$row;
}
echo json_encode($data);
	
?>

