global$adminController;

<?php

require_once 'app/controllers/UserController.php';
//require_once

session_start();
$db = new Db('localhost','youcode','root','')
$userController = new UserController($db);
$userController->checkUserRole(['admin']);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
<h1>Admin Dashboard</h1>
<?php

session_start();


$userController = new UserController($db);
$userController->checkUserRole(['admin']);
?>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
 
    $users = $adminController->getAllUsers();

    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['first_name']} {$user['last_name']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td>{$user['role']}</td>";
        echo "<td>";
        echo "<a href='modify-user.php?id={$user['user_id']}'>Modify</a> | ";
        echo "<a href='delete-user.php?id={$user['id']}'>Delete</a> | ";
        echo "<a href='ban-user.php?id={$user['id']}'>Ban</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>


<?php

session_start();


$userController = new UserController();
$userController->checkUserRole(['admin']);
?>


<h2>User Management</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
   
    $adminController = new AdminController($userModel);
    $users = $adminController->getUsers();

    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['first_name']}</td>";
        echo "<td>{$user['last_name']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td>{$user['role']}</td>";
        echo "<td>";
        echo "<a href='modify-user.php?id={$user['id']}'>Modify Role</a>";
        echo " <a href='delete-user.php?id={$user['id']}'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<a href="logout.php">Logout</a>

</body>
</html>
