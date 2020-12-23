<?php

Class Challenge {

  public function setFlagFromChallenge(){   
   $Flag = filter_input(INPUT_POST, 'flag', 
     FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);
   return $Flag;
  }

  public function getChallenge($urlId) {
      global $Db; 
      $Resultepreuve = $Db->preparefull('SELECT * FROM épreuves WHERE ID_epreuves = ?',array($urlId));
      $epreuve = $Resultepreuve->fetch(PDO::FETCH_OBJ);
      return $epreuve;
  }

  public function addPoints($Points, $Groupes) {
      global $Db; 
      $Resultepoints = $Db->preparefull('UPDATE groupes SET Points = Points + ? WHERE ID_groupes = ?',array($Points,$Groupes));
  }

  public function addValidation($Groupes,$urlId) {
      global $Db; 
      $Resultegroupes = $Db->preparefull('INSERT INTO validation(Code_groupe,Code_epreuves) VALUES(?,?)',array($Groupes,$urlId));
  }    

  public function getVerification($urlId,$Groupes) {
      global $Db; 
      $Resultvalidation = $Db->preparefull('SELECT * FROM validation WHERE Code_epreuves = ? AND Code_groupe = ?',array($urlId,$Groupes));
      $validation = $Resultvalidation->fetch(PDO::FETCH_OBJ);
      return $validation;
  }

  public function getGroupe($Groupes) {
      global $Db; 
      $Resultgroupe = $Db->preparefull('SELECT * FROM groupes WHERE ID_groupes = ?',array($Groupes));
      $groupe = $Resultgroupe->fetch(PDO::FETCH_OBJ);
      return $groupe;
  }

}