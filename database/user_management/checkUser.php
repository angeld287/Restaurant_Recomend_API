<?php
	header('Access-Control-Allow-Origin: *');  
	
	include "../db.php";
	
    $name = $_GET["name"];
 
	
 
    $name = mysql_real_escape_string( $name );
 
    $result = mysql_query("SELECT name FROM users WHERE name = '$name'");
 
    if(!$result)
    {
        echo "error: ".mysql_error();
        exit;
    }
 
    if(mysql_num_rows($result) == 0)
    {
        echo 'true';//email is unique. not signed up before
    }
    else
    {
        echo 'false';
    }
?>