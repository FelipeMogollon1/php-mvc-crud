<?php require_once __DIR__ . '/../../functions/UrlHelper.php'; ?>

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
    <?php include __DIR__ . '/../partials/sidebar.php'; ?>

    <div class="container mt-5 ms-3" style="flex-grow: 1;">
        <h1 class="mb-4">Listado de Ciudades</h1>
        <a href="<?php echo base_url(); ?>/cities/create" class="btn btn-primary mb-3">Crear nueva ciudad</a>

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
                            <a href="<?php echo base_url(); ?>/cities/<?php echo $city->id; ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="<?php echo base_url(); ?>/cities/<?php echo $city->id; ?>/edit" class="btn btn-warning btn-sm">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-<?php echo $city->id; ?>">Eliminar</button>

                            <!-- Modal de Confirmación -->
                            <div class="modal fade" id="deleteModal-<?php echo $city->id; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirmar eliminación</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Está seguro de que desea eliminar esta ciudad?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form action="<?php echo base_url(); ?>/cities/<?php echo $city->id; ?>/delete" method="POST">
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
