<?php
include("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM cvs WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
$cv = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver CV</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1><?php echo $cv['nombre']; ?></h1>

<p><strong>Email:</strong> <?php echo $cv['email']; ?></p>
<p><strong>Teléfono:</strong> <?php echo $cv['telefono']; ?></p>

<h2>Perfil</h2>
<p><?php echo nl2br($cv['perfil']); ?></p>

<h2>Experiencia</h2>
<p><?php echo nl2br($cv['experiencia']); ?></p>

<h2>Formación</h2>
<p><?php echo nl2br($cv['formacion']); ?></p>

<h2>Habilidades</h2>
<p><?php echo nl2br($cv['habilidades']); ?></p>

<h2>Idiomas</h2>
<p><?php echo nl2br($cv['idiomas']); ?></p>

<br>
<a href="listar.php">⬅ Volver al listado</a>

</body>
</html>
