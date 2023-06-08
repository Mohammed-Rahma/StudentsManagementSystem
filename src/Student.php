<?php

namespace Nawa\Task\Stud;
use Nawa\Task\Cour\Course;

class Student
{
    public readonly int $id;
    private string $name;
    private string $email;
    private array $courses;

    public function __construct(int $id, string $name, string $email, array $courses = [])
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->courses = $courses;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCourses(): array
    {
        return $this->courses;
    }

    public function addCourse(Course $course): void
    {
        $this->courses[] = $course;
    }

    public function removeCourse($course)
    {
        $index = array_search($course, $this->courses);
        if ($index !== false) {
            array_splice($this->courses, $index, 1);
        }
    }
}
