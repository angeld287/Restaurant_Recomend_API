<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost","root","","resta_recomm_app_db") or die ("could not connect database");
 
$db = new PDO('mysql:host=localhost;dbname=resta_recomm_app_db;charset=utf8mb4', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(!mysql_connect('localhost','root',''))
    {
        echo "error: ".mysql_error();
        exit;
    }
    if(!mysql_select_db('resta_recomm_app_db'))
    {
        echo "error: ".mysql_error();
        exit;
    }
	
?>