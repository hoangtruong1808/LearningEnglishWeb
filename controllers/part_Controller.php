<?php
 
 
class part_Controller extends Controller
{
   
    public function __construct(){
        parent::__construct();
       
    }
   
    public function getdata()
    {
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],"/");
            
            $url=explode('/',$url);
            $c=$url[3];
            
        }
        if($c!=null)
        {
        $topic= $this->LoadModel("part");
        $obj= $topic->getAllQuestion($c);
        include("views/layout.php");
        }
    }
}
?>