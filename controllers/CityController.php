<?php

namespace Controllers;

use Models\City;
require_once '../models/City.php';

class CityController {
    public function index() {
        $cityModel = new City();
        $cities = $cityModel->getAll();
        include '../views/cities/index.php';
    }

    public function show($id) {
        $cityModel = new City();
        $city = $cityModel->getById($id);
        include '../views/cities/show.php';
    }

    public function create() {
        include '../views/cities/create.php';
    }

    public function store() {
        if (isset($_POST['name']) && !empty(trim($_POST['name']))) {
            $cityModel = new City();
            $cityModel->name = trim($_POST['name']);

            if ($cityModel->create()) {
                header("Location: /Project_PHP_CRUD/public/cities");
            } else {
                echo "Error: don't save city.";
            }
        } else {
            echo "Error: name is required.";
        }
    }

    public function edit($id) {
        $cityModel = new City();
        $city = $cityModel->getById($id);

        if ($city) {
            include '../views/cities/edit.php';
        } else {
            echo "Error: Ciudad no encontrada.";
        }
    }

    public function update($id) {
        if (isset($_POST['name']) && !empty(trim($_POST['name']))) {
            $cityModel = new City();
            $cityModel->id = $id;
            $cityModel->name = trim($_POST['name']);

            if ($cityModel->update()) {
                header("Location: /Project_PHP_CRUD/public/cities");
                exit();
            } else {
                echo "Error: No se pudo actualizar la ciudad.";
            }
        } else {
            echo "Error: El nombre de la ciudad es requerido.";
        }
    }

    public function delete($id) {
        $cityModel = new City();
        $cityModel->id = $id;

        if ($cityModel->delete()) {
            header("Location: /Project_PHP_CRUD/public/cities");
            exit();
        } else {
            echo "Error: No se pudo eliminar la ciudad.";
        }
    }
}
