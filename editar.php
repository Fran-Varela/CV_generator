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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container mt-4">

    <h1 class="mb-4">Editar CV (Nueva versión)</h1>

    <form action="guardar.php" method="POST">

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $cv['nombre']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $cv['email']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="<?php echo $cv['telefono']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Perfil</label>
            <textarea name="perfil" class="form-control"><?php echo $cv['perfil']; ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Experiencia</label>
            <textarea name="experiencia" class="form-control"><?php echo $cv['experiencia']; ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Formación</label>
            <textarea name="formacion" class="form-control"><?php echo $cv['formacion']; ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Habilidades</label>
            <textarea name="habilidades" class="form-control"><?php echo $cv['habilidades']; ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Idiomas</label>
            <textarea name="idiomas" class="form-control"><?php echo $cv['idiomas']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar nueva versión</button>
        <a href="listar.php" class="btn btn-secondary">Cancelar</a>

    </form>

</div>

</body>
</html>
