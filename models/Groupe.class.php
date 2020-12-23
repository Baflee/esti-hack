<?php

Class Groupe {

  public function setGroupeFromPost(){   
   $this->Nom = filter_input(INPUT_POST, 'nom', 
     FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);
   $this->Description = filter_input(INPUT_POST, 'description', 
     FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);  
   $this->Avatar = filter_input(INPUT_POST, 'avatar', 
     FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);    
  }

  public function getGroupe() {
      global $Db; 
      $Resultgroupe = $Db->preparefull('SELECT * FROM groupes WHERE nom = ?',array($this->Nom));
      $groupe = $Resultgroupe->fetch(PDO::FETCH_OBJ);
      return $groupe;
  }

  public function updateProfile($groupeid,$urlId) {
      global $Db; 
      $Resultepoints = $Db->preparefull('UPDATE profiles SET Code_groupe = ? WHERE ID_profiles = ?',array($groupeid,$urlId));
  }

  public function createGroupe() {
      global $Db;     
      $Db->preparefull("INSERT INTO groupes(Nom, Description, Avatar,Points) VALUES(?,?,?,0)",array($this->Nom, $this->Description, $this->Avatar));
  }



}