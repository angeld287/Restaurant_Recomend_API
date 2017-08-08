<?php
include "db.php";
$id = $_GET["id"];
$data=array();
$q=mysqli_query($con,"SELECT sum(id) as id, sum(user_voted) as user_voted, sum(restaurant_voted) as restaurant_voted, ((sum(number_voted*5))/(@rowcount:=COUNT(*)*5)) as number_voted FROM rating WHERE restaurant_voted = '$id'");
while ($row=mysqli_fetch_assoc($q)){
 $data[]=$row;
}
echo json_encode($data);
	
?>

