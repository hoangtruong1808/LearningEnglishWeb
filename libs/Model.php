<?php
class Model{
	public $connect;
    public function __construct(){//kết nối
		if(!$this->connect)
        {
        $this->connect=mysqli_connect("localhost","root","","learningenglish");
        return $this->connect;
        
        }
	}
   public function query($sql)
   {
    $result = mysqli_query($this->connect,$sql);
    if(!$result)
    {
     echo "truy van k thanh cong";
    }
    
    return $result;
   }
}
?>