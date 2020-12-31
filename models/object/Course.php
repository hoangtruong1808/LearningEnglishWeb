<?php
class Course
{
    private $CourseID;
    private $CourseName;
    public function __construct($id,$name)
    {
        $this->CourseID=$id;
        $this->CourseName=$name;
    }
    public function __getCourse()
    {
        return $this->CourseID;
    }
    public function __getCourseName()
    {
        return $this->CourseName;
    }
}
?>