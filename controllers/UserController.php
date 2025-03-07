<?php

namespace Controllers;

use Models\User;
use Models\City;
use Models\JobTitle;

require_once '../models/User.php';
require_once '../models/City.php';
require_once '../models/JobTitle.php';
require_once __DIR__ . '/../functions/UrlHelper.php';

class UserController {

    public function index() {
        $userModel = new User();
        $users = $userModel->getAll();
        include '../views/users/index.php';
    }

    public function show($id) {
        $userModel = new User();
        $user = $userModel->getById($id);

        $cityModel = new City();
        $city = $cityModel->getById($user->city_id);

        $jobTitleModel = new JobTitle();
        $jobTitle = $jobTitleModel->getById($user->job_title_id);

        include '../views/users/show.php';
    }

    public function create() {

        $cityModel = new City();
        $cities = $cityModel->getAll();

        $jobTitleModel = new JobTitle();
        $jobTitles = $jobTitleModel->getAll();

        include '../views/users/create.php';
    }


    public function store() {
        $userModel = new User();
        $userModel->name = $_POST['name'];
        $userModel->email = $_POST['email'];
        $userModel->password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hashing password
        $userModel->job_title_id = $_POST['job_title_id'];
        $userModel->city_id = $_POST['city_id'];

        if ($userModel->create()) {
            header("Location: " . base_url() . "/users");
        } else {
            echo "Error: Could not save user.";
        }
    }

    // Show the form to edit an existing user
    public function edit($id) {
        $userModel = new User();
        $user = $userModel->getById($id);

        $cityModel = new City();
        $cities = $cityModel->getAll();

        $jobTitleModel = new JobTitle();
        $jobTitles = $jobTitleModel->getAll();

        include '../views/users/edit.php';
    }

    // Handle the update of an existing user
    public function update($id) {
        $userModel = new User();
        $userModel->id = $id;
        $userModel->name = $_POST['name'];
        $userModel->email = $_POST['email'];
        $userModel->password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hashing password
        $userModel->job_title_id = $_POST['job_title_id'];
        $userModel->city_id = $_POST['city_id'];

        if ($userModel->update()) {
            header("Location: " . base_url() . "/users");
        } else {
            echo "Error: Could not update user.";
        }
    }

    // Handle the deletion of a user
    public function delete($id) {
        $userModel = new User();
        $userModel->id = $id;

        if ($userModel->delete()) {
            header("Location: " . base_url() . "/users");
            exit;
        } else {
            echo "Error: Could not delete user.";
        }
    }
}
