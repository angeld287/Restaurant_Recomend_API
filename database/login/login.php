<?php
	header('Access-Control-Allow-Origin: *');  
	
	include "../db.php";
	
    $name = $_GET["name"];
	$password = $_GET["password"];
	$data=array();
 
    $result = mysqli_query($con,"SELECT * FROM users WHERE (name = '$name' or email = '$name') and password=MD5('$password')");
 
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
        echo json_encode($data);//email is unique. not signed up before
    }
    else
    {
        echo 'false';
    }
?>