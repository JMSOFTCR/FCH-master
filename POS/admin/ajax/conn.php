<?php

$conn = mysqli_connect("localhost","root","","pos");
$conn -> ("SET NAMES utf8 COLLATE utf8_unicode_ci");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_character_set_name($conn);

if (!mysqli_set_charset($conn, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conn));
    exit();
} else {
    printf("Conjunto de caracteres actual: %s\n", mysqli_character_set_name($conn));
}

?>