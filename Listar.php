<?php
include("config.php");

$sql = "SELECT * FROM cvs ORDER BY fecha_creacion DESC";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de CVs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container mt-4">

    <h1 class="mb-4">Historial de CVs</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

        <?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['email']; ?></td>
                <td><?php echo $fila['fecha_creacion']; ?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="ver.php?id=<?php echo $fila['id']; ?>">Ver</a>
                    <a class="btn btn-sm btn-warning" href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>
                    <a class="btn btn-sm btn-danger"
                       href="eliminar.php?id=<?php echo $fila['id']; ?>"
                       onclick="return confirm('¿Seguro que quieres eliminar este CV?');">
                       Eliminar
                    </a>
                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

    <a href="index.php" class="btn btn-secondary">Crear nuevo CV</a>

</div>

</body>
</html>
