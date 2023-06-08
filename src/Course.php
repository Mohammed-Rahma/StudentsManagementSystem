<?php

namespace Nawa\Task\Cour;

class Course
{
    private $id;
    private $name;

    public function __construct($name)
    {
        $this->id = uniqid(); // Generate a unique ID
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}
