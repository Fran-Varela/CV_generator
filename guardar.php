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

$sql = "INSERT INTO cvs 
(nombre, email, telefono, perfil, experiencia, formacion, habilidades, idiomas)
VALUES
('$nombre', '$email', '$telefono', '$perfil', '$experiencia', '$formacion', '$habilidades', '$idiomas')";

mysqli_query($conn, $sql);

header("Location: listar.php");
exit;

