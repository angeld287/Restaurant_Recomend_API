<?php
$db = new PDO('mysql:host=localhost;dbname=tone_analyzer_app_db;charset=utf8mb4', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(!mysql_connect('localhost','root',''))
    {
        echo "error: ".mysql_error();
        exit;
    }
    if(!mysql_select_db('tone_analyzer_app_db'))
    {
        echo "error: ".mysql_error();
        exit;
    }
	
?>