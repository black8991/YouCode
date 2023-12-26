
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<h1>Login</h1>

<?php

require_once 'app/controllers/UserController.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'] ;
    $password = $_POST['password'];

    $pdo=new Db('localhost','youtest','root','');
    $usrm= new User($pdo);
    $userController= new UserController($usrm);
    $userController->loginUser($email, $password);
}
?>

<form action="index.php" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <input type="submit" name="login" value="Login">
</form>


</body>
</html>
