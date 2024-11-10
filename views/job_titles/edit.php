<!-- views/job_titles/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Título de Trabajo</title>
</head>
<body>
<h1>Editar Título de Trabajo</h1>
<form action="/job_titles/<?= $jobTitle->id ?>/update" method="POST">
    <label for="name">Nombre del Título:</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($jobTitle->name) ?>" required>
    <br><br>
    <button type="submit">Actualizar</button>
</form>
<br>
<a href="/job_titles">Volver a la lista</a>
</body>
</html>
