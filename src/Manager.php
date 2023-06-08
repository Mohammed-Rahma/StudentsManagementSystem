<?php

namespace Nawa\Task\Mang;

use Nawa\Task\Loggable;
use Nawa\Task\Stud\Student;
use Nawa\Task\Cour\Course;


class Manager
{
    use Loggable;

    private $students = array();

    public function addStudent($student)
    {
        $this->students[$student->getId()] = $student;
        $this->log("Added student with ID: " . $student->getId());
    }

    public function getStudentById($id)
    {
        if (isset($this->students[$id])) {
            return $this->students[$id];
        }
        return null;
    }

    public function updateStudent($student)
    {
        if (isset($this->students[$student->getId()])) {
            $this->students[$student->getId()] = $student;
            $this->log("Updated student with ID: " . $student->getId());
        }
    }

    public function deleteStudent($id)
    {
        if (isset($this->students[$id])) {
            $student = $this->students[$id];
            unset($this->students[$id]);
            $this->log("Deleted student with ID: " . $student->getId());
        }
    }
}
