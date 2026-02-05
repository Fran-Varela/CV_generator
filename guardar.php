<?php
include("config.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$perfil = $_POST['perfil'];
$experiencia = $_POST['experiencia'];
$formacion = $_POST['formacion'];
$habilidades = $_POST['habilidades'];
$idiomas = $_POST['idiomas'];

$fecha = date("Y-m-d H:i:s");

$sql = "INSERT INTO cvs 
(nombre, email, telefono, perfil, experiencia, formacion, habilidades, idiomas, fecha_creacion)
VALUES 
('$nombre', '$email', '$telefono', '$perfil', '$experiencia', '$formacion', '$habilidades', '$idiomas', '$fecha')";

mysqli_query($conn, $sql);

echo "CV guardado correctamente";
