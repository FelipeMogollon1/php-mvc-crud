<?php require_once __DIR__ . '/../../functions/UrlHelper.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Detalles del Usuario</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información del Usuario</h5>
            <table class="table">
                <tbody>
                <tr>
                    <th>ID</th>
                    <td><?php echo $user->id; ?></td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td><?php echo $user->name; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $user->email; ?></td>
                </tr>
                <tr>
                    <th>Ciudad</th>
                    <td><?php echo $city->name; ?></td> <!-- Mostrar nombre de la ciudad -->
                </tr>
                <tr>
                    <th>Título de Trabajo</th>
                    <td><?php echo $jobTitle->name; ?></td> <!-- Mostrar nombre del título de trabajo -->
                </tr>
                </tbody>
            </table>

                <div class="d-flex justify-content-between mt-4">
                    <a href="<?php echo base_url(); ?>/users/<?php echo $user->id; ?>/edit" class="btn btn-warning">Editar</a>

                    <form action="<?php echo base_url(); ?>/users/<?php echo $user->id; ?>/delete" method="POST" style="display:inline;">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                    <a href="<?php echo base_url(); ?>" class="btn btn-secondary">Volver al listado</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
