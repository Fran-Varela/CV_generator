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

$foto_nombre = NULL;

if (!empty($_FILES['foto']['name'])) {
    $foto_nombre = time() . "_" . $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $foto_nombre);
}

$sql = "INSERT INTO cvs 
(nombre, email, telefono, perfil, experiencia, formacion, habilidades, idiomas, foto)
VALUES
('$nombre', '$email', '$telefono', '$perfil', '$experiencia', '$formacion', '$habilidades', '$idiomas', '$foto_nombre')";

mysqli_query($conn, $sql);

header("Location: listar.php");
exit;

