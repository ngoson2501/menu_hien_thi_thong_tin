<?php

// student_controller.php

/* include '../Model/student_model.php'; */
include './Model/student_model.php';
class StudentController {
    private $model;

    public function __construct($db) {
        $this->model = new StudentModel($db);
    }

    public function getStudents() {
        $students = $this->model->getStudents();
        /* include 'student_view.php'; */
        include './View/student_view.php';
    }
}




?>