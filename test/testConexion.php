<?php
$mysqli = new mysqli("localhost", "root", "", "appleire");

/* comprobar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

/* comprobar si la conexión sigue estable */
if ($mysqli->ping()) {
    printf ("¡La conexión se mantiene!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}

/* cerrar la conexión */
$mysqli->close();
?>
