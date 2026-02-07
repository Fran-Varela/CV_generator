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
    <title>Editar CV</title>
</head>
<body>

<h1>Editar CV</h1>

<form action="guardar.php" method="POST">

    <input type="hidden" name="editar" value="1">

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?php echo $cv['nombre']; ?>"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $cv['email']; ?>"><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono" value="<?php echo $cv['telefono']; ?>"><br><br>

    <label>Perfil:</label><br>
    <textarea name="perfil"><?php echo $cv['perfil']; ?></textarea><br><br>

    <label>Experiencia:</label><br>
    <textarea name="experiencia"><?php echo $cv['experiencia']; ?></textarea><br><br>

    <label>Formación:</label><br>
    <textarea name="formacion"><?php echo $cv['formacion']; ?></textarea><br><br>

    <label>Habilidades:</label><br>
    <textarea name="habilidades"><?php echo $cv['habilidades']; ?></textarea><br><br>

    <label>Idiomas:</label><br>
    <textarea name="idiomas"><?php echo $cv['idiomas']; ?></textarea><br><br>

    <button type="submit">Guardar nueva versión</button>

</form>

<br>
<a href="listar.php">⬅ Cancelar</a>

</body>
</html>
