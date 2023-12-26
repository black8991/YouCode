<?php
class LearnerController extends UserController {
    private $classModel;

    public function __construct(ClassModel $classModel) {
        $this->classModel = $classModel;
    }

    public function viewClasses($learnerId) {
        // Implement logic to retrieve and display classes for a learner
    }
    private function getLearnerClasses($learnerId)
    {
        // Implement SQL query to retrieve learner's classes from the database
        $stmt = $this->pdo->prepare("SELECT classes.id, classes.class_name FROM classes JOIN learner_class ON classes.id = learner_class.class_id WHERE learner_class.learner_id = ?");
        $stmt->execute([$learnerId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}
