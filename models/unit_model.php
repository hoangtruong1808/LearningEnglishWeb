<?php
include("object/Unit.php");
class unit_Model extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    //get tất cả các unit
    function getallunit()
    {
       $sql="select * from unit";
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
            $unit=new Unit($row["UnitID"],$row["UnitName"],$row["CourseID"],$row["KeyWord"],$row["Description"]);
           $array[]=$unit;
        }
        
    }
    return $array;
    }
    // get giá trị của 1 unit
    function getunit($sql)
    {
       
        $result =  $this->query($sql);
    if(!$result)
    {
     echo "truy van k thanh cong";
    }
    else
    {
        $array=array();
        
        $row =mysqli_fetch_assoc($result);
        
           $unit=new Unit($row["UnitID"],$row["UnitName"],$row["CourseID"],$row["KeyWord"],$row["Description"]);
          
        
    }
    return $unit;
    }
    // đếm số lượng unit trong 1 khóa học(course)
    public function countunit($sql)
    {
        $result =  $this->query($sql);
    if(!$result)
    {
     echo "truy van k thanh cong";
    }
    else{
        while($row =mysqli_fetch_assoc($result))
        {
           $unit=$row["count(UnitID)"];
          
        }
        return $unit;
    }
    }
}
