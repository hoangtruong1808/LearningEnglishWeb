<?php
include("object/Lesson.php");
class lesson_Model extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    function getAllLesson()
    {
        $sql = 'SELECT * FROM lesson';
       
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
           $lesson=new Lesson($row["LessonID"],$row["CourseID"],$row["Title"],$row["Discription"],$row["ImageUrl"]);
           $array[]=$lesson;
        }
        
    }
    return $array;
    }
   
} 


?>