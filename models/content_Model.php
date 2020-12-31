<?php
include("object/Content.php");
class content_Model extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    function getAllContent()
    {
        $sql = 'SELECT * FROM content';
       
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
           $content=new Content($row["ContentID"],$row["LessonID"],$row["Imageurl"],$row["Introduction"],$row["Audio"]);
           $array[]=$content;
        }
        
    }
    return $array;
    }

    function getContent($paramater)
    {
        
       $sql="select * from content where LessonID='$paramater'";
        $result =  $this->query($sql);
    if(!$result)
    {
     echo "truy van k thanh cong";
    }
    else
    {
        $array=array();
        
        $row =mysqli_fetch_assoc($result);
        
           $content=new Content($row["ContentID"],$row["LessonID"],$row["Imageurl"],$row["Introduction"],$row["Audio"]);
          
           return $content;
        
    }
   
    }
   
}
