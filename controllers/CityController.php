<?php

namespace Controllers;

use Models\City;

require_once '../models/City.php';
require_once __DIR__ . '/../functions/UrlHelper.php';


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
                header("Location: " . base_url() . "/cities");
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
            echo "Error: Don't find city.";
        }
    }

    public function update($id) {
        if (isset($_POST['name']) && !empty(trim($_POST['name']))) {
            $cityModel = new City();
            $cityModel->id = $id;
            $cityModel->name = trim($_POST['name']);

            if ($cityModel->update()) {
                header("Location: " . base_url() . "/cities");
                exit();
            } else {
                echo "Error: Don't save city.";
            }
        } else {
            echo "Error: the name is required.";
        }
    }

    public function delete($id) {
        $cityModel = new City();
        $cityModel->id = $id;

        if ($cityModel->delete()) {
            header("Location: " . base_url() . "/cities");
            exit();
        } else {
            echo "Error: Don't delete city.";
        }
    }
}