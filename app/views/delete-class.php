
<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
<h1>Delete Class</h1>

<?php

$classId = $_GET['id'] ?? null;
$classData = $trainerController->getClassById($classId);


if ($classData) {

    echo "<p>Are you sure you want to delete the class '{$classData['class_name']}'?</p>";
    echo "<form action='delete-class.php?id={$classId}' method='post'>";
    echo "<input type='submit' name='delete_class' value='Delete'>";
    echo "</form>";
} else {
    echo "<p>Class not found.</p>";
}
?>


</body>
</html>
