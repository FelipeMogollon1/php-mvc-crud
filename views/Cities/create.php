<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ciudad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Crear Ciudad</h1>
    <form action="/cities/store" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de la ciudad:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Ciudad</button>
    </form>
</div>
</body>
</html>
