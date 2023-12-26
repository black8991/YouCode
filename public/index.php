<?php
require_once('../app/controllers/AuthController.php');
require_once('../app/models/User.php');
require_once('../config/db.php');

/*
$userModel = new User($pdo);
$authController = new AuthController($userModel);


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authController->loginUser($email, $password);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authController->loginUser($email, $password);
}*/


include('../views/login.php');
