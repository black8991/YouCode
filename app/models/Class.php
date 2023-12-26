<?php

class ClassModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function createClass($className, $trainerId) {
       
        $stmt = $this->pdo->prepare("INSERT INTO classes (class_name, trainer_id) VALUES (?, ?)");
        $stmt->execute([$className, $trainerId]);
    }

    public function getTrainerClasses($trainerId) {
       
        $stmt = $this->pdo->prepare("SELECT * FROM classes WHERE trainer_id = ?");
        $stmt->execute([$trainerId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modifyClass($classId, $newData)
    {


    }

    public function deleteClass($classId)
    {
        
    }

    public function addLearnerToClass($classId, $learnerId)
    {
       
    }

  
}
