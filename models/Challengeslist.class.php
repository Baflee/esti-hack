<?php

Class ChallengesList {

  public function epreuves() {
      global $Db;  
      $Resultepreuves = $Db->prepareall('SELECT * FROM épreuves');
      $epreuves = $Resultepreuves->fetchAll(PDO::FETCH_CLASS);
      return $epreuves;
  }
}
