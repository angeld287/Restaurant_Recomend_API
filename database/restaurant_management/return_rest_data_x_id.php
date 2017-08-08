<?php
include "db.php";
$id = $_GET["id"];
$data=array();
$table_name = "restaurant";
$q=mysqli_query($con,"SELECT * FROM restaurant WHERE restaurant_id = '$id'");
while ($row=mysqli_fetch_assoc($q)){
 $data[$table_name][]=$row;
}
echo json_encode($data);
	
?>

