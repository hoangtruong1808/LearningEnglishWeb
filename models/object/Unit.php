<?php
class Unit
{
    private $UnitID;
    private $UnitNam;
    private $CourseID;
    private $KeyWord;
    private $Description;
    public function  __construct($id, $name, $course, $key,$des)
    {
        $this->UnitID = $id;
        $this->UnitNam = $name;
        $this->CourseID = $course;
        $this->KeyWord = $key;
        $this->Description=$des;
    }

    public function __getUnitID()
    {
        return $this->UnitID;
    }
    public function __getCourseID()
    {
        return $this->CourseID;
    }
    public function __getUnitName()
    {
        return $this->UnitNam;
    }
    public function __getKeyWord()
    {
        return $this->KeyWord;
    }
    public function __getDescription()
    {
        return $this->Description;
    }
}
