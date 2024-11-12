<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Ciudad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <?php include __DIR__ . '/../partials/sidebar.php'; ?>

    <div class="container mt-5 ms-3" style="flex-grow: 1;">
        <h1 class="mb-4">Detalle de Ciudad</h1>
        <p><strong>ID:</strong> <?php echo $city->id; ?></p>
        <p><strong>Nombre:</strong> <?php echo $city->name; ?></p>
        <a href="/Proyect_PHP_CRUD/public/cities" class="btn btn-secondary">Volver al listado</a>
    </div>
</div>
</body>
</html>
