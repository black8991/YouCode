<?php
require_once('../app/controllers/LearnerController.php');
require_once('../app/models/Class.php');
require_once('../config/db.php');

$classModel = new ClassModel($pdo);
$learnerController = new LearnerController($classModel);



session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}



include('../views/learner-dashboard.php');
