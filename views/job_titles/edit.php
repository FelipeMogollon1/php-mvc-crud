<?php require_once __DIR__ . '/../../functions/UrlHelper.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Título de Trabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <?php include __DIR__ . '/../partials/sidebar.php'; ?>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm p-4">
                <h1 class="mb-4 text-center">Editar Título de Trabajo</h1>
                <form action="<?php echo base_url(); ?>/jobs/<?= $jobTitle->id ?>/update" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del Título de Trabajo:</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?= htmlspecialchars($jobTitle->name) ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Actualizar Título de Trabajo</button>
                </form>
                <a href="<?php echo base_url(); ?>/jobs" class="btn btn-secondary w-100 mt-3">Volver al listado</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
