<?php

require_once 'vendor/autoload.php';

use App\classes\Student;

$students = new Student();

$students->createStudent(1, "Al-Hasan Rahman", "ahr.18dec@gmail.com", ['+9901234567', '+9901234567']);
$students->createStudent(2, "Zonaed Zeshan", "zonaed.ain@gmail.com", ['+9901234567', '+9901234567']);
$students->createStudent(3, "Saidur Rahman Riad", "riadsaidur@gmail.com", ['+9901234567', '+9901234567']);
$students->createStudent(4, "Al-Hasan Rahman", "ahr.18dec@gmail.com", ['+9901234567', '+9901234567']);
$students->createStudent(5, "Zonaed Zeshan", "zonaed.ain@gmail.com", ['+9901234567', '+9901234567']);
$students->createStudent(6, "Saidur Rahman Riad", "riadsaidur@gmail.com", ['+9901234567', '+9901234567']);

include 'pages/home.php';