<?php

  require_once "expedition.php";
  require_once "abenteuerkarte.php";

class player
{
    public $gold;
    public $expedition;
    public $handcards = array();

    function __construct($gold, $expedition)
    {
        $this->gold = $gold;
        $this->expedition = $expedition;
    }

    public function __tostring()
    {
        return $this->expedition;
        foreach ($handcards as $card) {
            return $card;
        }
    }

}