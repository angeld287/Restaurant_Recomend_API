<?php
    include "db.php";
	ini_set("memory_limit","32M");
	
	//[['Funeraria Blandino', 18.4621996, -69.9730876, 4],['Jade Teriyak', 18.4625312, -69.9685834]];
	
    $d = mysql_query("SELECT * FROM `restaurant`") or die( mysql_error() );
    $place = array();
    while($r = mysql_fetch_object($d)) {
		//$r["latitude"] = floatval($r["latitude"]);
		//$r["length"] = floatval($r["length"]);
        $place[] = $r;
    }

    echo json_encode($place);
?>;

