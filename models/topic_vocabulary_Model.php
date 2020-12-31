<?php

//include_once("../models/Topic.php");
include("object/Topic_Vocabulary.php");

class topic_vocabulary_Model extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }

    // lấy tất topic_vocabulary (bảng vocabularybase)
    function getall()
    {
        $sql = 'SELECT * FROM vocabularybase';
       
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
           $word=new Word($row["VocabID"],$row["TopicID"],$row["Word"],$row["Category"],$row["Spell"],$row["Meaning"],$row["Example"],$row["Trainstale"],$row["ImageUrl"],$row["PronounceUrl"]);
           $array[]=$word;
        }
        
    }
    return $array;
    }
    function getwordtopic($sql)
    {
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
               $word=new Word($row["VocabID"],$row["TopicID"],$row["Word"],$row["Category"],$row["Spell"],$row["Meaning"],$row["Example"],$row["Trainstale"],$row["Imageurl"],$row["PronounceUrl"]);
               $array[]=$word;
            }
            
        }
        return $array;
    }
} 


?>