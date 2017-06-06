<?php
	header('Access-Control-Allow-Origin: *');  
	
	include "db.php";
	
    $email = $_GET["email"];
 
	
 
    $email = mysql_real_escape_string( $email );
 
    $result = mysql_query("SELECT email FROM users WHERE email = '$email'");
 
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