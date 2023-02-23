<?php
class Course{
    protected $id;
    protected $name;
    protected $students = array();
    protected $grades = array();

    public function __construct($id,$name)
    {
        $this->id   = $id;
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

    public function addStudent($student)
    {
        $this->students[] = $student;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function addGrade($studentId)
    {
        $this->grades
    }
}
?>