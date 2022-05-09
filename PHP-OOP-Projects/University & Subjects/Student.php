<?php
/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 10:40 PM
 */

/**
 * Class Student
 */
class Student
{
    public string $name;
    public string $studentNumber;

    /**
     * @param string $name
     * @param string $studentNumber
     */
    public function __construct(string $name, string $studentNumber)
    {
        $this->name = $name;
        $this->studentNumber = $studentNumber;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStudentNumber(): string
    {
        return $this->studentNumber;
    }

    /**
     * @param string $studentNumber
     */
    public function setStudentNumber(string $studentNumber): void
    {
        $this->studentNumber = $studentNumber;
    }


}