<?php
 class Sessions{
     private $SessionID;
     private $SessionName;
     private $UnitID;
     private $Description;
     private $ImageUrl;
     public function __construct($id, $name, $unit,$des,$image)
     {
         $this->SessionID=$id;
         $this->SessionName=$name;
         $this->UnitID=$unit;
         $this->Description=$des;
         $this->ImageUrl=$image;
     }
     public function __getSessionID()
     {
         return $this->SessionID;
     }
     public function __getUnitID()
     {
         return $this->UnitID;
     }
     public function __getSessionName()
     {
         return $this->SessionName;
     }
     public function __getDescription()
     {
         return $this->Description;
     } 
     public function __getImageUrl()
     {
         return $this->ImageUrl;
     }
 }
?>