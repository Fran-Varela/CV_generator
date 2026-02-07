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
    <title>Currículum Vitae</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container mt-4">

    <div class="card p-4">

        <div class="row align-items-center mb-4">
            <div class="col-md-3 text-center">
                <?php if ($cv['foto']) { ?>
                    <img src="uploads/<?php echo $cv['foto']; ?>" class="img-fluid rounded-circle mb-2" width="150">
                <?php } else { ?>
                    <div class="text-muted">Sin foto</div>
                <?php } ?>
            </div>

            <div class="col-md-9">
                <h2><?php echo $cv['nombre']; ?></h2>
                <p class="mb-1"><strong>Email:</strong> <?php echo $cv['email']; ?></p>
                <p><strong>Teléfono:</strong> <?php echo $cv['telefono']; ?></p>
            </div>
        </div>

        <div class="cv-section">
            <h5>Perfil profesional</h5>
            <p><?php echo nl2br($cv['perfil']); ?></p>
        </div>

        <div class="cv-section">
            <h5>Experiencia laboral</h5>
            <p><?php echo nl2br($cv['experiencia']); ?></p>
        </div>

        <div class="cv-section">
            <h5>Formación académica</h5>
            <p><?php echo nl2br($cv['formacion']); ?></p>
        </div>

        <div class="cv-section">
            <h5>Habilidades</h5>
            <p><?php echo nl2br($cv['habilidades']); ?></p>
        </div>

        <div class="cv-section">
            <h5>Idiomas</h5>
            <p><?php echo nl2br($cv['idiomas']); ?></p>
        </div>

    </div>

    <div class="mt-3">
        <a href="listar.php" class="btn btn-secondary">Volver</a>
        <button onclick="window.print()" class="btn btn-primary">Imprimir</button>
    </div>

</div>

</body>
</html>
