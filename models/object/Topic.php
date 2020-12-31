<?php
class Topic
{
    private $TopicId;
    private $TopicName;
    private $CourseID;
    private $Image;
    public function __construct($TopicId,$TopicName,$CourseID,$image)
    {
        $this->TopicId=$TopicId;
        $this->TopicName=$TopicName;
        $this->CourseID=$CourseID;
        $this->Image=$image;
    }
    public function __getTopicID()
    {
        return $this->TopicId;
    }
    public function __getTopicName()
    {
        return $this->TopicName;
    }
    public function __getCourseID()
    {
        return $this->CourseID;
    }
    public function __getImage(){
        return $this->Image;
    }
    
} 
?>