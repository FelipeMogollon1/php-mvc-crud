<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="d-flex">
    <?php include __DIR__ . '/../partials/sidebar.php'; ?>

    <div class="container mt-5 ms-3" style="flex-grow: 1;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <h1 class="mb-4 text-center">Editar Usuario</h1>
                <form action="/Project_PHP_CRUD/public/users/<?php echo $user->id; ?>/update" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $user->name; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $user->email; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="city_id" class="form-label">Ciudad:</label>
                        <select name="city_id" id="city_id" class="form-select" required>
                            <?php foreach ($cities as $city): ?>
                                <option value="<?= $city->id; ?>"
                                    <?= $city->id == $user->city_id ? 'selected' : ''; ?>>
                                    <?= $city->name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="job_title_id" class="form-label">Título de Trabajo:</label>
                        <select name="job_title_id" id="job_title_id" class="form-select" required>
                            <?php foreach ($jobTitles as $jobTitle): ?>
                                <option value="<?= $jobTitle->id; ?>"
                                    <?= $jobTitle->id == $user->job_title_id ? 'selected' : ''; ?>>
                                    <?= $jobTitle->name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Actualizar Usuario</button>
                </form>

                <a href="/Project_PHP_CRUD/public/" class="btn btn-secondary w-100 mt-3">Volver al listado</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
