<?php
require_once('../app/controllers/AdminController.php');
require_once('../app/models/User.php');
require_once('../config/db.php');

$userModel = new User($pdo);
$adminController = new AdminController($userModel);



session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


$adminController->viewDashboard();


include('../views/admin-dashboard.php');






