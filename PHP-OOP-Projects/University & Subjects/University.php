<?php
require_once "AbstractUniversity.php";

/**
 * Class University
 */
class University extends AbstractUniversity
{

    public function addSubject(string $code, string $name): Subject
    {
        // TODO: Implement addSubject() method.
        $this->$code = $code;
        $this->name =$name;
    }

    public function addStudentOnSubject(string $subjectCode, Student $student)
    {
        // TODO: Implement addStudentOnSubject() method.
    }

    public function getStudentsForSubject(string $subjectCode)
    {
        // TODO: Implement getStudentsForSubject() method.
    }

    public function getNumberOfStudents(): int
    {
        // TODO: Implement getNumberOfStudents() method.
    }

    public function print()
    {
        // TODO: Implement print() method.
    }
}