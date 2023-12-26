<?php
class TrainerController extends User {
    private $classModel;

    public function __construct(ClassModel $classModel) {
        $this->classModel = $classModel;
    }

    public function createClass($className, $trainerId) {
       
        $this->classModel->createClass($className, $trainerId);
    }

    public function getTrainerClasses($trainerId) {
        
       
    }


    public function getClassById($classId) {
     
        $stmt = $this->pdo->prepare("SELECT * FROM classes WHERE id = ?");
        $stmt->execute([$classId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function modifyClass($classId, $newData) {
     
        $stmt = $this->pdo->prepare("UPDATE classes SET class_name = ? WHERE id = ?");
        $stmt->execute([$newData['class_name'], $classId]);

       
        header('Location: trainer-dashboard.php');
        exit();
    }

    public function deleteClass($classId) {
        
        $stmt = $this->pdo->prepare("DELETE FROM classes WHERE id = ?");
        $stmt->execute([$classId]);

        header('Location: trainer-dashboard.php');
        exit();
    }

    public function addLearnerToClass($classId, $learnerId) {
        
    }
}
