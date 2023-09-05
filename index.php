<?php


// index.php

$db = new PDO('mysql:host=localhost;dbname=students_db', 'root', '');

/* include 'student_controller.php'; */
/* include './Controller/student_controller.php'; */
include './Controller/student_controller.php';
$controller = new StudentController($db);
$controller->getStudents();


?>