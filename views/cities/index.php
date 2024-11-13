<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ciudades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <!-- Incluir el sidebar -->
    <?php include __DIR__ . '/../partials/sidebar.php'; ?>

    <!-- Contenido principal -->
    <div class="container mt-5 ms-3" style="flex-grow: 1;">
        <h1 class="mb-4">Listado de Ciudades</h1>
        <a href="/cities/create" class="btn btn-primary mb-3">Crear nueva ciudad</a>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($cities)): ?>
                <?php foreach ($cities as $city): ?>
                    <tr>
                        <td><?php echo $city->id; ?></td>
                        <td><?php echo $city->name; ?></td>
                        <td>
                            <a href="/cities/<?php echo $city->id; ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="/cities/<?php echo $city->id; ?>/edit" class="btn btn-warning btn-sm">Editar</a>
                            <form action="/cities/<?php echo $city->id; ?>/delete" method="POST" style="display:inline;">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">No hay ciudades registradas.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
