
<?php

require_once 'app/controllers/UserController.php';
require_once 'app/controllers/ LearnerController.php';

session_start();


$userController = new UserController();
$userController->checkUserRole(['trainer']);
?>


<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1>Trainer Dashboard</h1>



<h2>Create a New Class</h2>
<form action="trainer-dashboard.php" method="post">
    <label for="class_name">Class Name:</label>
    <input type="text" name="class_name" required>

    <input type="submit" name="create_class" value="Create Class">
</form>

<h2>Your Classes</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Class Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $classes = $trainerController->getTrainerClasses($trainerId);
    foreach ($classes as $class) {
        echo "<tr>";
        echo "<td>{$class['id']}</td>";
        echo "<td>{$class['class_name']}</td>";
        echo "<td>";
        echo "<a href='modify-class.php?id={$class['id']}'>Modify</a> | ";
        echo "<a href='delete-class.php?id={$class['id']}'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>



<a href="logout.php">Logout</a>
</body>
</html>
