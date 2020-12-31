<?php 
class CT_Part
{
   private $ID;
   private $PartID;
   private $Questions;
   private $A;
   private $B;
   private $C;
   private $D;
   private $Answer;
   public function __construct($ID,$PartID,$Questions,$A,$B,$C,$D,$Answer)
   {
       $this->ID=$ID;
       $this->PartID=$PartID;
       $this->Questions=$Questions;
       $this->A=$A;
       $this->B=$B;
       $this->C=$C;
       $this->D=$D;
       $this->Answer=$Answer;
   }
   public function __getid()
   {
       return $this->ID;
   }
   public function __getpartid()
   {
    return $this->PartID;
   }
   public function __getquestions()
   {
    return $this->Questions;
   }
   public function __geta()
   {
    return $this->A;
   }
   public function __getb()
   {
    return $this->B;
   }
   public function __getc()
   {
    return $this->C;
   }
   public function __getd()
   {
    return $this->D;
   }
   public function __getanswer()
   {
    return $this->Answer;
   }
}
?>