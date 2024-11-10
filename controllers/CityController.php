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
        $cityModel = new City();
        $cityModel->name = $_POST['name'];

        if ($cityModel->create()) {
            header("Location: /cities");
        } else {
            echo "Error: No se pudo crear la ciudad.";
        }
    }

    public function edit($id) {
        $cityModel = new City();
        $city = $cityModel->getById($id);
        include '../views/cities/edit.php';
    }

    public function update($id) {
        $cityModel = new City();
        $cityModel->id = $id;
        $cityModel->name = $_POST['name'];

        if ($cityModel->update()) {
            header("Location: /cities");
        } else {
            echo "Error: No se pudo actualizar la ciudad.";
        }
    }

    public function delete($id) {
        $cityModel = new City();
        $cityModel->id = $id;

        if ($cityModel->delete()) {
            header("Location: /cities");
        } else {
            echo "Error: can't delete city.";
        }
    }
}
