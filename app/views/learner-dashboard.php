
<?php

require_once 'app/controllers/UserController.php';


session_start();

$userController = new UserController();
$userController->checkUserRole(['learner']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
<h1>Learner Dashboard</h1>



<h2>Your Classes</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Class Name</th>
    </tr>
    </thead>
    <tbody>
    <?php
   
    $learnerClasses = $learnerController->getLearnerClasses($learnerId);
    foreach ($learnerClasses as $class) {
        echo "<tr>";
        echo "<td>{$class['id']}</td>";
        echo "<td>{$class['class_name']}</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>


<a href="logout.php">Logout</a>
</body>
</html>
