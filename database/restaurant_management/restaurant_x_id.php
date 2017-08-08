<?php
	header('Access-Control-Allow-Origin: *');  
	
	include "../db.php";
	
    $id = $_GET["id"];
	$data=array();
 
	//select * from users u left outer join category_restaurant c on c.category_id = u.favorite_cat_restaurant where id = 
    $result = mysqli_query($con,"SELECT * FROM restaurant r LEFT OUTER JOIN category_restaurant c on r.category = c.category_id where restaurant_id = '$id'");
 
    if(!$result)
    {
        echo "error: ".mysql_error();
        exit;
    }
 
    if(!mysqli_num_rows($result) == 0)
    {	
		while ($row=mysqli_fetch_object($result)){
		 $data[]=$row;
		}
        echo json_encode($data);
    }
    else
    {
        echo 'false';
    }
 ?>