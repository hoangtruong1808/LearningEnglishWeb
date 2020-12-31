<?php  
class Vocabulary_Lesson{
    private $VoID;
    private $ContentID;
    private $Word;
    private $Discription;
    public function __construct($ID, $ConID, $Word, $Dis)
    {
        $this->VoID=$ID;
        $this->ContentID=$ConID;
        $this->Word=$Word;
        $this->Discription=$Dis;
    }
    public function __getVoiID()
    {
        return $this->VoID;
    }
    public function __getContentID()
    {
        return $this->ContentID;
    }
    public function __getWord()
    {
        return $this->Word;
    }
    public function __getDiscription()
    {
        return $this->Discription;
    }
}
?>