<?php
class Lesson
{
    private $LessonID;
    private $CourseID;
    private $Title;
    private $Discription;
    private $ImageUrl;
    public function __construct($LesID , $CouID, $Tit, $Dis, $Img)
    {
        $this->LessonID=$LesID;
        $this->CourseID=$CouID;
        $this->Title=$Tit;
        $this->Discription=$Dis;
        $this->ImageUrl=$Img;
    }
    public function __getLesson()
    {
        return $this->LessonID;
    }
    public function __getCourse()
    {
        return $this->CourseID;
    }
    public function __getTitle()
    {
        return $this->Title;
    }
    public function __getDiscription()
    {
        return $this->Discription;
    }
    public function __getImage()
    {
        return  $this->ImageUrl;
    }
}

?>