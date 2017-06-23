<?php
    include "db.php";
	ini_set("memory_limit","32M");
	
	//[['Funeraria Blandino', 18.4621996, -69.9730876, 4],['Jade Teriyak', 18.4625312, -69.9685834]];
	
    $d = mysql_query("SELECT name, latitude, length FROM `restaurant`") or die( mysql_error() );
    $place = array();
    while($r = mysql_fetch_assoc($d)) {
		$r["latitude"] = floatval($r["latitude"]);
		$r["length"] = floatval($r["length"]);
        $place[] = array( $r['name'], $r['latitude'], $r['length'] );
    }

    echo json_encode($place);
?>;

