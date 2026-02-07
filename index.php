<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Generador de CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container mt-4">

        <h1 class="mb-4">Generador de Currículum Vitae</h1>

        <form action="guardar.php" method="POST" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label class="form-label">Foto (opcional)</label>
                <input type="file" name="foto" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Perfil</label>
                <textarea name="perfil" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Experiencia</label>
                <textarea name="experiencia" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Formación</label>
                <textarea name="formacion" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Habilidades</label>
                <textarea name="habilidades" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Idiomas</label>
                <textarea name="idiomas" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Guardar CV</button>
            <a href="listar.php" class="btn btn-secondary">Ver CVs</a>

        </form>

    </div>

</body>

</html>