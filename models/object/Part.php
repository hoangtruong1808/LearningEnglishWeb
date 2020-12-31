<?php 
class Part
{
   private $PartID;
   private $CourseID;
   private $Name ;
    public function __construct($PartID,$CourseID,$Name)
    {
        $this->PartID=$PartID;
        $this->CourseID=$PartID;
        $this->Name=$Name;
    }
    public function __getpartid()
    {
        return $this->PartID;
    }
    public function __getcourseid()
    {
        return $this->CourseID;
    }
    public function __getname()
    {
        return $this->Name;
    }
}
?>