<?php

//include_once("../models/Topic.php");
include("object/Vocabulary_Lesson.php");

class vocabulary_lesson_Model extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }

    // lấy tất topic_vocabulary (bảng vocabularybase)
    function getall()
    {
        $sql = 'SELECT * FROM vocabulary_lesson';
       
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
           $word=new Vocabulary_Lesson($row["VoID"],$row["ContentID"],$row["Word"],$row["Discription"]);
           $array[]=$word;
        }
        
    }
    return $array;
    }
    
} 


?>