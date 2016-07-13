<?php
class expedition {
  public $name;
  public $kleidung;
  public $technik;
  public $proviant;
  public $special;

  function __construct($name, $kleidung,$technik,$proviant, $special) {
    $this->name = $name;
    $this->kleidung = $kleidung;
    $this->technik = $technik;
    $this->proviant = $proviant;
    $this->special = $special;
  }
  function __tostring() {
    $namestr = (string)$this->name;
    $kleidungstr = (string)$this->kleidung;
    $technikstr = (string)$this->technik;
    $proviantstr = (string)$this->proviant;
    $specialstr = (string)$this->special;
    return $namestr . " " . $kleidungstr . " " . $technikstr . " " . $proviantstr . " " . $specialstr . "\n";
  }
}

?>
