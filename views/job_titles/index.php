<?php require_once __DIR__ . '/../../functions/UrlHelper.php'; ?>

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
    <?php include __DIR__ . '/../partials/sidebar.php'; ?>

    <div class="container mt-5 ms-3" style="flex-grow: 1;">
        <h1 class="mb-4">Lista de Títulos de Trabajo</h1>
        <a href="<?php echo base_url(); ?>/jobs/create" class="btn btn-primary mb-3">Crear Nuevo Título</a>

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
                            <a href="<?php echo base_url(); ?>/jobs/<?= $jobTitle->id ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="<?php echo base_url(); ?>/jobs/<?= $jobTitle->id ?>/edit" class="btn btn-warning btn-sm">Editar</a>
                            <!-- Botón de Eliminar con Modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-<?= $jobTitle->id ?>">Eliminar</button>
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

<!-- Modal de Confirmación de Eliminación -->
<?php foreach ($jobTitles as $jobTitle): ?>
    <div class="modal fade" id="deleteModal-<?= $jobTitle->id ?>" tabindex="-1" aria-labelledby="deleteModalLabel-<?= $jobTitle->id ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel-<?= $jobTitle->id ?>">Confirmar eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    ¿Está seguro de que desea eliminar el título de trabajo "<?= htmlspecialchars($jobTitle->name) ?>"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="<?php echo base_url(); ?>/jobs/<?= $jobTitle->id ?>/delete" method="POST">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
