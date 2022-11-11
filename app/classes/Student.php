<?php

namespace App\classes;

class Student {

  private array $students;

  public function createStudent(int $id, string $name, string $email, array $phone) {
    $this->students[] = [
      "id" => $id,
      "name" => $name,
      "email" => $email,
      "phone" => $phone,
    ];
  }

  public function getStudents() {
    return $this->students;
  }

}