<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cv_generator";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error de conexión");
}
?>
