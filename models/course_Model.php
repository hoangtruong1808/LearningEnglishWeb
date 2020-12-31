<?php
include("object/Course.php");
class course_Model extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    function getAllCourse()
    {
        $sql = 'SELECT * FROM course';
       
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
           $course=new Course($row["CourseID"],$row["CourseName"]);
           $array[]=$course;
        }
        
    }
    return $array;
    }
    public function getCourse( $sql)
    {
        $result =  $this->query($sql);
        if(!$result)
        {
         echo "truy van k thanh cong";
        }
        else
        {
           $row =mysqli_fetch_assoc($result);
       
           $course=new Course($row["CourseID"],$row["CourseName"]);
           
        
        }
        return $course;
    }
} 


?>