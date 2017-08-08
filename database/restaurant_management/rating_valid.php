<?php
	header('Access-Control-Allow-Origin: *');  
	
	include "../db.php";
	
	$user_voted=$_GET['user_voted'];
	$restaurant_voted=$_GET['restaurant_voted'];
	$data=array();
 
	//select * from users u left outer join category_restaurant c on c.category_id = u.favorite_cat_restaurant where id = 
    $result = mysqli_query($con,"SELECT * FROM rating WHERE restaurant_voted = '$restaurant_voted' and user_voted = '$user_voted'");
 
    if(!$result)
    {
        echo "error: ".mysql_error();
        exit;
    }
 
    if(mysqli_num_rows($result) > 0)
    {	
		echo 0;
    }
    else
    {
        echo 1;
	}	
?>



