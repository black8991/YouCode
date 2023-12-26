<?php
include 'config/Db.php';
class AdminController extends  User
{
    private $userModel;
    protected $pdo;


    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function assignRole($userId, $role)
    {
      
    }

    public function viewDashboard()
    {
     
    }


    public function deleteUser($userId)
    {

        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$userId]);


        header('Location: admin-dashboard.php');
        exit();
    }

    public function banUser($userId)
    {

        $stmt = $this->pdo->prepare("UPDATE users SET status = 'banned' WHERE id = ?");
        $stmt->execute([$userId]);


        header('Location: admin-dashboard.php');
        exit();
    }



    public function getAllUsers()
    {
       
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getUsers() {
       
        $stmt = $this->pdo->query("SELECT id, first_name, last_name, email, role FROM users ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getUserById($userId) {
       
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function modifyUser($userId, $newData) {


        $stmt = $this->pdo->prepare("UPDATE users SET first_name = ?, last_name = ?, email = ?, role = ? WHERE id = ?");
        $stmt->execute([$newData['first_name'], $newData['last_name'], $newData['email'], $newData['role'], $userId]);


        header('Location: admin-dashboard.php');
        exit();
    }

    public function modifyUserRole($userId, $newRole) {

        $stmt = $this->pdo->prepare("UPDATE users SET role = ? WHERE id = ?");
        $stmt->execute([$newRole, $userId]);
    }

}