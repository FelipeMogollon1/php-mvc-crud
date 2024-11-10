<!-- views/job_titles/index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Títulos de Trabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <!-- Incluir el sidebar -->
    <?php include __DIR__ . '/../partials/sidebar.php'; ?>

    <!-- Contenido principal -->
    <div class="container mt-5 ms-3" style="flex-grow: 1;">
        <h1 class="mb-4">Lista de Títulos de Trabajo</h1>
        <a href="/Proyect_PHP_CRUD/public/job_titles/create" class="btn btn-primary mb-3">Crear Nuevo Título</a>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($jobTitles)): ?>
                <?php foreach ($jobTitles as $jobTitle): ?>
                    <tr>
                        <td><?= $jobTitle->id ?></td>
                        <td><?= htmlspecialchars($jobTitle->name) ?></td>
                        <td>
                            <a href="/Proyect_PHP_CRUD/public/job_titles/<?= $jobTitle->id ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="/Proyect_PHP_CRUD/public/job_titles/<?= $jobTitle->id ?>/edit" class="btn btn-warning btn-sm">Editar</a>
                            <form action="/Proyect_PHP_CRUD/public/job_titles/<?= $jobTitle->id ?>/delete" method="POST" style="display:inline;">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este título?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">No hay títulos de trabajo registrados.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
