<?php

// student_model.php

class StudentModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getStudents() {
        $query = "SELECT * FROM students";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>