<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];

sleep(4);

//echo ("He tardado 3 segundos en ejecutar esta p&aactute;gina...");
echo ("Tus datos: " . $nombre . " - " . $apellido . " - " . $telefono);
?> 
