<?php
//require_once('app/controllers/AuthController.php');
require_once('app/controllers/UserController.php');
require_once('app/models/User.php');
require_once('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1>SignUp</h1>





<?php
$db=new Db('localhost','youcode','root','');
$user= new User($db);
$c_user = new UserController($user);
$c_user->registerUserhndling();
header('Location: register.php');

?>

</body>
</html>