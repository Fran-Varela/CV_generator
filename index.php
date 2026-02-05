<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de CV</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Generador de Currículum Vitae</h1>

    <form action="guardar.php" method="POST" enctype="multipart/form-data">

    <h2>Datos personales</h2>

    <label>Nombre completo</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Teléfono</label><br>
    <input type="text" name="telefono"><br><br>

    <h2>Perfil profesional</h2>
    <textarea name="perfil" rows="4"></textarea><br><br>

    <h2>Experiencia laboral</h2>
    <textarea name="experiencia" rows="4"></textarea><br><br>

    <h2>Formación académica</h2>
    <textarea name="formacion" rows="4"></textarea><br><br>

    <h2>Habilidades</h2>
    <textarea name="habilidades" rows="3"></textarea><br><br>

    <h2>Idiomas</h2>
    <textarea name="idiomas" rows="3"></textarea><br><br>

    <h2>Foto</h2>
    <input type="file" name="foto"><br><br>

    <button type="submit">Guardar CV</button>

</form>

</body>
</html>
