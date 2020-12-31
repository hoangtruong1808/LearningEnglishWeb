<?php
class VocabularyBase_Model{
    private $VocabID ;
    private $TopicID;
    private $Word;
    private $ImageUrl;
    private $PronounceUrl;
    private $Category;
    private $Spell;
    private $Example;
    public function __construct($VocabID,$TopicID,$Word,$ImageUrl,$PronounceUrl,$Category,$Spell,$Example)
    {
        $this->VocabID=$VocabID;
        $this->TopicID=$TopicID;
        $this->Word=$Word;
        $this->ImageUrl=$ImageUrl;
        $this->PronounceUrl=$PronounceUrl;
        $this->Category=$Category;
        $this->Spell=$Spell;
        $this->Example=$Example;
    }
    public function __getVo($VocabID)
    {
        return $VocabID;
    }
    public function __getTopic($TopicID)
    {
        return $TopicID;
    }
    public function __getWord($Word)
    {
        return $Word;
    }
    public function __getImage($ImageUrl)
    {
        return $ImageUrl;
    }
    public function __getPronoun($PronounceUrl)
    {
        return $PronounceUrl;
    }
    public function __getCategory($Category)
    {
        return $Category;
    }
    public function __getSpell($Spell)
    {
        return $Spell;
    }
    public function __getExample($Example)
    {
        return $Example;
    }
    

}

?>