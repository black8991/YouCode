<?php
require_once('../app/controllers/TrainerController.php');
require_once('../app/models/Class.php');
require_once('../config/db.php');

$classModel = new ClassModel($pdo);
$trainerController = new TrainerController($classModel);




session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


include('../views/trainer-dashboard.php');
