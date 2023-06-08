<?php

namespace Test;
include __DIR__ .'/../vendor/autoload.php'; // Adjust the path to the Manager class file

use Nawa\Task\Mang\Manager;
use Nawa\Task\Stud\Student;
use Nawa\Task\Cour\Course;

// Instantiate the Manager
$manager = new Manager();

// Create some student and course objects
$student1 = new Student("John Doe", "john@example.com");
$student2 = new Student("Jane Smith", "jane@example.com");
$student3 = new Student("Mike Johnson", "mike@example.com");

$course1 = new Course("Math");
$course2 = new Course("English");
$course3 = new Course("Science");

// Add students and courses
$manager->addStudent($student1);
$manager->addStudent($student2);
$manager->addStudent($student3);

$student1->addCourse($course1);
$student2->addCourse($course2);
$student3->addCourse($course3);

// Update student details
$student1->setName("John Smith");
$manager->updateStudent($student1);

// Retrieve student information
$retrievedStudent = $manager->getStudentById($student1->getId());
if ($retrievedStudent) {
    echo "Retrieved Student ID: " . $retrievedStudent->getId() . "\n";
    echo "Retrieved Student Name: " . $retrievedStudent->getName() . "\n";
    echo "Retrieved Student Email: " . $retrievedStudent->getEmail() . "\n";
    echo "Retrieved Student Courses: " . implode(", ", $retrievedStudent->getCourses()) . "\n";
} else {
    echo "Student not found\n";
}

// Delete a student
$manager->deleteStudent($student2->getId());

// Retrieve student information after deletion
$deletedStudent = $manager->getStudentById($student2->getId());
if ($deletedStudent) {
    echo "Deleted Student ID: " . $deletedStudent->getId() . "\n";
} else {
    echo "Student deleted successfully\n";
}

// Log file demonstration
$logFile = 'log.txt';
if (file_exists($logFile)) {
    echo "Log file contents:\n";
    echo file_get_contents($logFile);
} else {
    echo "Log file not found\n";
}
