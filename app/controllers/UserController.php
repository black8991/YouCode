<?php
include 'app/models/User.php';
require_once 'app/views/login.php';
class UserController extends User
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function registerUser($first_name, $last_name, $email, $password)
    {
        $this->userModel->registerUser($first_name, $last_name, $email, $password);
        header('Location: login.php');
        exit();
    }

    public function registerUserhndling()
    {


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data

            $name = $_POST["name"];
            $first_name = $_POST["first_name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
        }
        header('Location: register.php');
    }

    public function logineUserhandel()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];

        }

    }







    public function loginUser($email, $password) {



        $user = $this->userModel->getUserByEmail($email);


        if ($user && password_verify($password, $user['password'])) {

            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];


            switch ($user['role']) {
                case 'admin':
                    header('Location: admin-dashboard.php');
                    break;
                case 'trainer':
                    header('Location: trainer-dashboard.php');
                    break;
                case 'learner':
                    header('Location: learner-dashboard.php');
                    break;
                default:
                   echo 'password not valid';
                    break;
            }
            exit();
        } else {
            echo "<p>Invalid email or password.</p>";
        }
    }


    public function checkUserRole($allowedRoles = [])
    {

        if (!isset($_SESSION['user_role']) || !in_array($_SESSION['user_role'], $allowedRoles)) {

            header('Location: login.php');
            exit();
        }
    }

}
