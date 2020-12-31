<?php 
class Word
{
   private  $VocabID;
   private  $TopicID;
   private  $Word;
   private  $Category;
   private  $Spell;
   private  $Meaning;
   private  $Example;
   private  $Trainstale;
   private  $ImageUrl;
   private  $PronounceUrl;
   public function __construct($VocabID , $TopicID,$Word,  $Category, $Spell,  $Meaning,  $Example,  $Trainstale,  $ImageUrl, $PronounceUrl)
   {
       $this->VocabID=$VocabID;
       $this->TopicID=$TopicID;
       $this->Word=$Word;
       $this->Category=$Category;
       $this->Spell=$Spell;
       $this->Meaning=$Meaning;
       $this->Example=$Example;
       $this->Trainstale=$Trainstale;
       $this->ImageUrl=$ImageUrl;
       $this->PronounceUrl=$PronounceUrl;
   }
   public function __getVocabId()
   {
       return $this->VocabID;
   }
   public function __getTopicID()
   {
       return $this->TopicID;
   }
   public function __getWord()
   {
       return $this->Word;
   }
   public function __getCategory()
   {
       return $this->Category;
   }
   public function __getSpell()
   {
       return $this->Spell;
   }
   public function __getMeaning()
   {
       return $this->Meaning;
   }
   public function __getTrainstale()
   {
       return $this->Trainstale;
   }
   public function __getImageUrl()
   {
       return $this->ImageUrl;
   }
   public function __getExample()
   {
       return $this->Example;
   }
   public function __getPronounceUrl()
   {
       return $this->PronounceUrl;
   }

}
?>