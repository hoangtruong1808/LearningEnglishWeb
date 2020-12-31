<?php
 
 
class topic_Controller extends Controller
{
   
    public function __construct(){
        parent::__construct();
       
    }
    public function autoload()
    {
       
        $topic= $this->LoadModel("Topic");
        $obj= $topic->getTopic();
        //$objrender="views/Topic/topic.php";
        //include("views/Topic/topic.php");
        include("views/layout.php");
        
    }
    public function getdata()
    {
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],"/");
            
            $url=explode('/',$url);
            $c=$url[3];
            
        }
        if($c!=null){
        $topic= $this->LoadModel("topic_vocabulary");
        $obj= $topic->getwordtopic("SELECT* from vocabularybase, topic where vocabularybase.TopicID=topic.TopicID AND vocabularybase.TopicID=$c");
        include("views/layout.php");}
    }
}
?>