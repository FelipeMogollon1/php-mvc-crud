<?php

namespace Controllers;

use Models\JobTitle;
require_once '../models/JobTitle.php';

class JobTitleController {
    public function index() {
        $jobTitleModel = new JobTitle();
        $jobTitles = $jobTitleModel->getAll();
        include '../views/job_titles/index.php';
    }

    public function show($id) {
        $jobTitleModel = new JobTitle();
        $jobTitle = $jobTitleModel->getById($id);
        include '../views/job_titles/show.php';
    }

    public function create() {
        include '../views/job_titles/create.php';
    }

    public function store() {
        $jobTitleModel = new JobTitle();
        $jobTitleModel->name = $_POST['name'];

        if ($jobTitleModel->create()) {
            header("Location: /job_titles");
        } else {
            echo "Error: No se pudo crear el título de trabajo.";
        }
    }

    public function edit($id) {
        $jobTitleModel = new JobTitle();
        $jobTitle = $jobTitleModel->getById($id);
        include '../views/job_titles/edit.php';
    }

    public function update($id) {
        $jobTitleModel = new JobTitle();
        $jobTitleModel->id = $id;
        $jobTitleModel->name = $_POST['name'];

        if ($jobTitleModel->update()) {
            header("Location: /job_titles");
        } else {
            echo "Error: No se pudo actualizar el título de trabajo.";
        }
    }

    public function delete($id) {
        $jobTitleModel = new JobTitle();
        $jobTitleModel->id = $id;

        if ($jobTitleModel->delete()) {
            header("Location: /job_titles");
        } else {
            echo "Error: No se pudo eliminar el título de trabajo.";
        }
    }
}
