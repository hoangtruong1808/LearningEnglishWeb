<?php 
 class Content
 {//ContentID`, `LessonID`, `Imageurl`, `Introduction`, `Transcript
     private $ContentID;
     private $LessonID;
     private $Imageurl;
     private $Introduction;
     
     private $Audio;
     public function __construct($cont, $less, $img, $intro, $audio)
     {
         $this->ContentID=$cont;
         $this->LessonID=$less;
         $this->Imageurl=$img;
         $this->Introduction=$intro;
      
         $this->Audio=$audio;
     }
     public function __getContent(){
         return $this->ContentID;
     }
     public function __getLesson(){
        return $this->LessonID;
    }
    public function __getImage(){
        return $this->Imageurl;
    }
    public function __getIntroduction(){
        return $this->Introduction;
    }
   
    public function __getAudio(){
        return $this->Audio;
    }
 }
?>