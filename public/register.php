<?php
require_once('../app/controllers/AuthController.php');
require_once('../app/models/User.php');
require_once('../config/db.php');

$userModel = new User($pdo);
$authController = new AuthController($userModel);


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $authController->registerUser($firstName, $lastName, $email, $password, $role);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $authController->registerUser($firstName, $lastName, $email, $password, $role);
}


include('../views/register.php');
