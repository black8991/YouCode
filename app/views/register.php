<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>



<?php/*
$pdo=new Db('localhost','youtest','root','');
$usrm= new User($pdo);
$userController= new UserController($usrm);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = $_POST['last_name'];
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;


    $userController->registerUser($first_name, $last_name, $email, $password);
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>User Information Form</title>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-md mx-auto bg-white rounded p-6 shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Register</h1>

    <form action="index.php" method="post">

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <!-- First Name -->
        <div class="mb-4">
            <label for="first_name" class="block text-gray-600 text-sm font-medium mb-2">First Name</label>
            <input type="text" id="first_name" name="first_name" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email Address</label>
            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
            <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Register</button>
        </div>

    </form>

</div>

</body>
</html>



</body>
</html>
