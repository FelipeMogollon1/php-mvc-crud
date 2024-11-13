<?php

use Controllers\UserController;
use Controllers\CityController;
use Controllers\JobTitleController;

require_once '../controllers/UserController.php';
require_once '../controllers/CityController.php';
require_once '../controllers/JobTitleController.php';

$userController = new UserController();
$cityController = new CityController();
$jobTitleController = new JobTitleController();

$baseUri = dirname($_SERVER['SCRIPT_NAME']);
$requestUri = str_replace($baseUri, '', $_SERVER['REQUEST_URI']);
$requestUri = rtrim($requestUri, '/');
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Rutas para UserController
if ($requestUri === '' || $requestUri === '/') {
    $userController->index();
} elseif ($requestUri === '/users' && $requestMethod === 'GET') {
    $userController->index();
} elseif ($requestUri === '/users/create' && $requestMethod === 'GET') {
    $userController->create();
} elseif ($requestUri === '/users' && $requestMethod === 'POST') {
    $userController->store();
} elseif (preg_match('/^\/users\/(\d+)$/', $requestUri, $matches) && $requestMethod === 'GET') {
    $userController->show($matches[1]);
} elseif (preg_match('/^\/users\/(\d+)\/edit$/', $requestUri, $matches) && $requestMethod === 'GET') {
    $userController->edit($matches[1]);
} elseif (preg_match('/^\/users\/(\d+)\/update$/', $requestUri, $matches) && $requestMethod === 'POST') {
    $userController->update($matches[1]);
} elseif (preg_match('/^\/users\/(\d+)\/delete$/', $requestUri, $matches) && $requestMethod === 'POST') {
    $userController->delete($matches[1]);

// Rutas para CityController
} elseif ($requestUri === '/cities' && $requestMethod === 'GET') {
    $cityController->index();
} elseif ($requestUri === '/cities/create' && $requestMethod === 'GET') {
    $cityController->create();
} elseif ($requestUri === '/cities' && $requestMethod === 'POST') {
    $cityController->store();
} elseif (preg_match('/^\/cities\/(\d+)$/', $requestUri, $matches) && $requestMethod === 'GET') {
    $cityController->show($matches[1]);
} elseif (preg_match('/^\/cities\/(\d+)\/edit$/', $requestUri, $matches) && $requestMethod === 'GET') {
    $cityController->edit($matches[1]);
} elseif (preg_match('/^\/cities\/(\d+)\/update$/', $requestUri, $matches) && $requestMethod === 'POST') {
    $cityController->update($matches[1]);
} elseif (preg_match('/^\/cities\/(\d+)\/delete$/', $requestUri, $matches) && $requestMethod === 'POST') {
    $cityController->delete($matches[1]);

// Rutas para JobTitleController
} elseif ($requestUri === '/jobs' && $requestMethod === 'GET') {
    $jobTitleController->index();
} elseif ($requestUri === '/jobs/create' && $requestMethod === 'GET') {
    $jobTitleController->create();
} elseif ($requestUri === '/jobs' && $requestMethod === 'POST') {
    $jobTitleController->store();
} elseif (preg_match('/^\/jobs\/(\d+)$/', $requestUri, $matches) && $requestMethod === 'GET') {
    $jobTitleController->show($matches[1]);
} elseif (preg_match('/^\/jobs\/(\d+)\/edit$/', $requestUri, $matches) && $requestMethod === 'GET') {
    $jobTitleController->edit($matches[1]);
} elseif (preg_match('/^\/jobs\/(\d+)\/update$/', $requestUri, $matches) && $requestMethod === 'POST') {
    $jobTitleController->update($matches[1]);
} elseif (preg_match('/^\/jobs\/(\d+)\/delete$/', $requestUri, $matches) && $requestMethod === 'POST') {
    $jobTitleController->delete($matches[1]);

} else {
    echo "Page not found";
}
