<?php
include "db.php";
$data=array();
$table_name = "restaurant";
$q=mysqli_query($con,"SELECT * FROM restaurant");
while ($row=mysqli_fetch_assoc($q)){
 $data[$table_name][]=$row;
}
echo json_encode($data);
	
?>

