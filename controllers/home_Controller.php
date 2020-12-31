<?php
 
 
class home_Controller extends Controller
{
    public function __construct(){
        parent::__construct();
       
    }
    public function autoload()
    {
        $topic= $this->LoadModel("Topic");
        $obj= $topic->getTopic();
        include("views/layout.php");
        
    }
}
?>