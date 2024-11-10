<!-- views/job_titles/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Título de Trabajo</title>
</head>
<body>
<h1>Crear Nuevo Título de Trabajo</h1>
<form action="/job_titles" method="POST">
    <label for="name">Nombre del Título:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <button type="submit">Guardar</button>
</form>
<br>
<a href="/job_titles">Volver a la lista</a>
</body>
</html>
