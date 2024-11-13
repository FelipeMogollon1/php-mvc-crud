<?php require_once __DIR__ . '/../../functions/UrlHelper.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Título de Trabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <?php include __DIR__ . '/../partials/sidebar.php'; ?>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm p-4">
                <h1 class="mb-4 text-center">Detalle del Título de Trabajo</h1>
                <div class="mb-3">
                    <p><strong>ID:</strong> <?= $jobTitle->id ?></p>
                </div>
                <div class="mb-3">
                    <p><strong>Nombre:</strong> <?= htmlspecialchars($jobTitle->name) ?></p>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <!-- Botón Editar -->
                    <a href="<?php echo base_url(); ?>/jobs/<?= $jobTitle->id ?>/edit" class="btn btn-warning">Editar</a>

                    <!-- Botón Eliminar con Modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-<?= $jobTitle->id ?>">Eliminar</button>

                    <!-- Botón Volver al listado -->
                    <a href="<?php echo base_url(); ?>/jobs" class="btn btn-secondary">Volver al listado</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Confirmación de Eliminación -->
<div class="modal fade" id="deleteModal-<?= $jobTitle->id ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro de que desea eliminar este título de trabajo?
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
