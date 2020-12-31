<?php
 
 
class content_Controller extends Controller
{
   
    public function __construct(){
        parent::__construct();
       
    }
    public function autoload()
    {
     
        if(isset($_GET['url']))
        {
            $url=rtrim($_GET['url'],"/");
		  
            $url=explode('/',$url);
            if($url[2]!=null){
                $content= $this->LoadModel("content");
                $obj= $content->getContent($url[2]);
                $vocabulary_lesson= $this->LoadModel("vocabulary_lesson");
                $vo_lesson=$vocabulary_lesson->getall();
               
                include("views/layout.php");
            }
        }
        
       
        
    }
}
?>