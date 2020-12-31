<?php
include("object/Part.php");
include("object/CT_Part.php");
class part_Model extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    // lấy tất cả các câu hỏi trong part tương ứng
    function getAllQuestion($partid)
    {
        $sql = "SELECT * FROM CT_Part  where PartID= '$partid' ";
       
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
           $course=new CT_Part($row["ID"],$row["PartID"],$row["Questions"],$row["A"],$row["B"],$row["C"],$row["D"],$row["Answer"]);
           $array[]=$course;
        }
        
    }
    return $array;
    }
    
} 


?>