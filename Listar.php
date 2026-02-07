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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Historial de CVs</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>

        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['email']; ?></td>
                <td><?php echo $fila['fecha_creacion']; ?></td>
                <td>
                    <a href="ver.php?id=<?php echo $fila['id']; ?>">Ver</a> |
                    <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a> |
                    <a href="eliminar.php?id=<?php echo $fila['id']; ?>"
                        onclick="return confirm('¿Seguro que quieres eliminar este CV?');">
                        Eliminar
                    </a>
                </td>


            </tr>
        <?php } ?>

    </table>

</body>

</html>