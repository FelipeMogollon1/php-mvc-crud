<!-- views/job_titles/show.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Título de Trabajo</title>
</head>
<body>
<h1>Detalle del Título de Trabajo</h1>
<p><strong>ID:</strong> <?= $jobTitle->id ?></p>
<p><strong>Nombre:</strong> <?= htmlspecialchars($jobTitle->name) ?></p>
<a href="/job_titles">Volver a la lista</a>
</body>
</html>
