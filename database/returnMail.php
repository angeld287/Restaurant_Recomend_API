<?php
$mysqli = new mysqli("localhost", "root", "", "tone_analyzer_app_db");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
 
$consulta = "SELECT * FROM users";

if ($resultado = $mysqli->query($consulta)) {

	$data=array();
    /* obtener el array de objetos */
    while ($obj = $resultado->fetch_object()) {
		$data[]=$obj->email;
    }
	echo json_encode($data);
    /* liberar el conjunto de resultados */
    $resultado->close();
}

/* cerrar la conexión */
$mysqli->close();
?>