<?php
class AuthController {
    private $userModel;

    public function __construct(User $userModel) {
        $this->userModel = $userModel;
    }

    public function registerUser($firstName, $lastName, $email, $password, $role) {
      


       
        $this->userModel->register($firstName, $lastName, $email, $password, $role);

        
        header('Location: login.php');
        exit();
    }

    public function loginUser($email, $password) {
     
        $userData = $this->userModel->getUserByEmail($email);

        if ($userData && password_verify($password, $userData['password'])) {
        
            session_start();
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['user_role'] = $userData['role'];

          
            if ($userData['role'] == 'admin') {
                header('Location: admin-dashboard.php');
            } elseif ($userData['role'] == 'trainer') {
                header('Location: trainer-dashboard.php');
            } elseif ($userData['role'] == 'learner') {
                header('Location: learner-dashboard.php');
            }
            exit();
        } else {
         
        }
    }
}
