
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<?php

session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$userController = new UserController();
$userController->checkUserRole(['admin']);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $userId = $_GET['id'] ?? null;

    $adminController = new AdminController($userModel);
    $adminController->deleteUser($userId);

    
    header('Location: admin-dashboard.php');
    exit();
}
?>

<p>Are you sure you want to delete this user?</p>
<form action="delete-user.php?id=<?php echo $_GET['id']; ?>" method="post">
    <input type="submit" name="delete_user" value="Delete User">
</form>

<h1>Delete User</h1>

<?php

$userId = $_GET['id'] ?? null;
$userData = $adminController->getUserById($userId);


if ($userData) {
    
    echo "<p>Are you sure you want to delete the user '{$userData['first_name']} {$userData['last_name']}'?</p>";
    echo "<form action='delete-user.php?id={$userId}' method='post'>";
    echo "<input type='submit' name='delete_user' value='Delete'>";
    echo "</form>";
} else {
    echo "<p>User not found.</p>";
}
?>


</body>
</html>

