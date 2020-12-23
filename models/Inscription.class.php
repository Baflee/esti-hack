<?php

Class Inscription {

  public function Classe() {
      global $Db;  
      $Resultclasses = $Db->prepareall('SELECT * FROM classes');
      $classes = $Resultclasses->fetchAll(PDO::FETCH_CLASS);
      return $classes;
  }

  public function Campus() {
      global $Db;  
      $Resultcampus = $Db->prepareall('SELECT * FROM campus');
      $campus = $Resultcampus->fetchAll(PDO::FETCH_CLASS);
      return $campus;
  }

  public function setProfileFromPost(){   
   $this->Nom = filter_input(INPUT_POST, 'nom', 
     FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);
   $this->Prenom = filter_input(INPUT_POST, 'prenom', 
     FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);   
   $this->Email = filter_input(INPUT_POST, 'email', 
     FILTER_SANITIZE_EMAIL,FILTER_SANITIZE_MAGIC_QUOTES);
   $this->Motdepasse = filter_input(INPUT_POST, 'password', 
     FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);
   $this->Campus = filter_input(INPUT_POST, 'campus');
   $this->Classe = filter_input(INPUT_POST, 'classe');
  }    

  public function saveProfile() {
      global $Db;     
      $Db->preparefull("INSERT INTO profiles(nom, prenom, description, email, motdepasse, Code_classe, Code_campus,Code_groupe) VALUES(?,?,?,?,?,?,?,1)",array($this->Nom, $this->Prenom, "Description standard a changé.",$this->Email, password_hash($this->Motdepasse, PASSWORD_DEFAULT), $this->Classe, $this->Campus));
  }
  
}