<?php
 
 
class topic_Controller extends Controller
{
    public function __construct(){
        parent::__construct();
       
    }
    public function getdata()
    {
       
        $listword= $this->LoadModel("topic_vocabulary");
        
        
        include("views/Topic/topic.php");
       

    }
}
?>