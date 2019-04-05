<?php

$conn = mysqli_connect("localhost","Masteruserp","Airi9516","fchmaintenance");
$conn->set_charset("SET NAMES utf8 COLLATE utf8_unicode_ci"); 
//("SET NAMES utf8fchmaintenance  COLLATE utf8_unicode_ci"); fchmaintenance
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