<?php
 
 
class lesson_Controller extends Controller
{
   
    public function __construct(){
        parent::__construct();
       
    }
    public function autoload()
    {
       
        $lesson= $this->LoadModel("lesson");
        $obj= $lesson->getAllLesson();
        //$objrender="views/Topic/topic.php";
        //include("views/Topic/topic.php");
        include("views/layout.php");
        
    }
}
?>