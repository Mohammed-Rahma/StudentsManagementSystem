<?php

namespace Nawa\Task;
use Nawa\Task\Stud\Student;
use Nawa\Task\Cour\Course;
trait Loggable
{
    private $logFile = 'log.txt';

    public function log($message)
    {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] $message" . PHP_EOL;
        file_put_contents($this->logFile, $logMessage, FILE_APPEND);
    }
}