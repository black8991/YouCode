
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1>Modify Class</h1>

<?php

$classId = $_GET['id'] ?? null;
$classData = $trainerController->getClassById($classId);


if ($classData) {
    
    echo "<form action='modify-class.php?id={$classId}' method='post'>";
    echo "<label for='class_name'>Class Name:</label>";
    echo "<input type='text' name='class_name' value='{$classData['class_name']}' required>";

    echo "<input type='submit' name='modify_class' value='Modify'>";
    echo "</form>";
} else {
    echo "<p>Class not found.</p>";
}
?>


</body>
</html>
