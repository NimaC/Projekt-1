<?php
  class abenteuerkarte
  {
    public $name;
    public $kleidung;
    public $technik;
    public $proviant;
    public $upgradeattribute;
    public $upgradevalue;
    public $goldgiven;
    public $special;

    function __construct($name, $kleidung, $technik, $proviant, $upgradeattribute, $upgradevalue, $goldgiven, $special)
    {
      $this->name = $name;
      $this->kleidung = $kleidung;
      $this->technik = $technik;
      $this->proviant = $proviant;
      $this->upgradeattribute = $upgradeattribute;
      $this->upgradevalue = $upgradevalue;
      $this->goldgiven = $goldgiven;
    }
    
    function __tostring() {
      $namestr = (string)$this->name;
      return $namestr . "\n";
    }
  }
?>
