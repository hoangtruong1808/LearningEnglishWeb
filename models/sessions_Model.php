<?php
include("models/object/Sessions.php");
class sessions_Model extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }

    //lấy tất cả các session không điều kiện
    function getallsession()
    {
        $sql = "SELECT * FROM session ";
       
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

           $session=new Sessions($row["SessionID"],$row["SessionName"],$row["UnitID"],$row["Description"],$row["ImageUrl"]);
           $array[]=$session;
        }
        
    }
    return $array;
    }
    
    //lấy các session có điều kiện
    function getall($sql)
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

           $session=new Sessions($row["SessionID"],$row["SessionName"],$row["UnitID"],$row["Description"],$row["ImageUrl"]);
           $array[]=$session;
        }
        
    }
    return $array;
    }
} 


?>