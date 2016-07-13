<?php
  require_once 'expedition.php';
  require_once 'abenteuerkarte.php';
  require_once 'player.php';

  $wueste = new expedition("Wueste", 2,2,2,0);
  $dschungel = new expedition("Dschungel", 0,1,0,1);
  $meer = new expedition("Meer", 2,2,2,2);
  $land = new expedition("Land", 2,3,1,3);

  $bob = new abenteuerkarte("Bob", 1,0,0,1,1,1,0);
  $seth = new abenteuerkarte("Seth", 0,1,0,3,1,1,0);
  $jack = new abenteuerkarte("Jack", 0,0,1,2,1,1,0);
  $peter = new abenteuerkarte("Peter", 2,0,0,1,1,2,2);
  $lisa = new abenteuerkarte("Lisa", 0,2,0,3,2,2,3);
  $hassan = new abenteuerkarte("Hassan", 0,0,2,2,1,2,1);
  $luke = new abenteuerkarte("Luke", 3,0,0,1,1,2,0);
  $mo = new abenteuerkarte("Mo", 0,3,0,3,2,2,1);
  $juri = new abenteuerkarte("Juri", 0,0,3,2,1,2,3);

  $abenteuerkarten = array($bob,$seth,$jack,$peter,$lisa,$hassan,$luke,$mo,$juri);
  $abenteuerkartencount = sizeof($abenteuerkarten) - 1;
  $expeditions = array($wueste,$dschungel,$meer,$land);
    $playercount = 4;
    $handcartcount = 7;
    $players = array();

    for($i = 0; $i<$playercount; $i++) {
        $r = rand(0,3);
        array_push($players, new player(0,$expeditions[$r]));
        for($j = 0; $j<$handcartcount; $j++) {
            $u = rand(0,$abenteuerkartencount);
            $players[$i]->handcards[$j] = $abenteuerkarten[$u];
        }
}
    foreach ($players as $player) {
    echo "Spieler " . $i . ": " . $player->__tostring();
        for($j = 0; $j<$handcartcount; $j++) {
            echo $player->handcards[$j];
        }
}


  /* function upgradeexpedition($playedcard->upgradeattribute, $playedcard->upgradevalue) {
  $expedition->upgradeattribute += $this->upgradeattribute + $this->upgradevalue;
}
  */
?>