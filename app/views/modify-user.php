
<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
<h1>Modify User</h1>

<?php

$userId = $_GET['id'] ?? null;
$userData = $adminController->getUserById($userId);


if ($userData) {
    
    echo "<form action='modify-user.php?id={$userId}' method='post'>";
    echo "<label for='first_name'>First Name:</label>";
    echo "<input type='text' name='first_name' value='{$userData['first_name']}' required>";

    echo "<label for='last_name'>Last Name:</label>";
    echo "<input type='text' name='last_name' value='{$userData['last_name']}' required>";

    echo "<label for='email'>Email:</label>";
    echo "<input type='email' name='email' value='{$userData['email']}' required>";

    echo "<label for='role'>Role:</label>";
    echo "<select name='role' required>";
    echo "<option value='admin' " . ($userData['role'] === 'admin' ? 'selected' : '') . ">Admin</option>";
    echo "<option value='trainer' " . ($userData['role'] === 'trainer' ? 'selected' : '') . ">Trainer</option>";
    echo "<option value='learner' " . ($userData['role'] === 'learner' ? 'selected' : '') . ">Learner</option>";
    echo "</select>";

    echo "<input type='submit' name='modify_user' value='Modify'>";
    echo "</form>";
} else {
    echo "<p>User not found.</p>";
}
?>

<h1>Modify User Role</h1>

<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


$userController = new UserController();
$userController->checkUserRole(['admin']);


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modify_role'])) {
    $userId = $_GET['id'] ?? null;
    $newRole = $_POST['new_role'] ?? '';

    
    $adminController = new AdminController($userModel);
    $adminController->modifyUserRole($userId, $newRole);

    header('Location: admin-dashboard.php');
    exit();
}
?>


<form action="modify-user.php?id=<?php echo $_GET['id']; ?>" method="post">
    <label for="new_role">New Role:</label>
    <input type="text" name="new_role" required>

    <input type="submit" name="modify_role" value="Modify Role">
</form>

</body>
</html>
