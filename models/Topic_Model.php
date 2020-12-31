<?php

//include_once("../models/Topic.php");
include("object/Topic.php");
class Topic_Model extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    function getTopic()
    {
        $sql = 'SELECT * FROM topic';
       
        $result =  $this->query($sql);
    if(!$result)
    {
     echo "truy van k thanh cong";
    }
    else
    {
        $array=array();
        
        while($row =mysqli_fetch_assoc($result))
        {
           $topic=new Topic($row["TopicID"],$row["TopicName"],$row["CourseID"],$row["ImageUrl"]);
           $array[]=$topic;
        }
        
    }
    return $array;
    }
} 


?>