<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="d-flex">
    <?php include __DIR__ . '/../partials/sidebar.php'; ?>

    <div class="container mt-5 ms-3" style="flex-grow: 1;">
        <h1 class="mb-4">Listado de Usuarios</h1>
        <a href="/Proyect_PHP_CRUD/public/users/create" class="btn btn-primary mb-3">Crear nuevo usuario</a>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Título de Trabajo</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user->id; ?></td>
                        <td><?php echo $user->name; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->job_title; ?></td>
                        <td><?php echo $user->city; ?></td>
                        <td>
                            <a href="/Proyect_PHP_CRUD/public/users/<?php echo $user->id; ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="/Proyect_PHP_CRUD/public/users/<?php echo $user->id; ?>/edit" class="btn btn-warning btn-sm">Editar</a>
                            <form action="/Proyect_PHP_CRUD/public/users/<?php echo $user->id; ?>/delete" method="POST" style="display:inline;">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No hay usuarios registrados.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
