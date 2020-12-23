<?php

Class Connexion {

  public function setProfileFromPost(){      
   $this->Email = filter_input(INPUT_POST, 'email', 
     FILTER_SANITIZE_EMAIL,FILTER_SANITIZE_MAGIC_QUOTES);
   $this->Motdepasse = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES); 
  }      

  public function userLogin() {
      global $Db;  
      $Resultlogin = $Db->preparefull("SELECT * FROM profiles WHERE email = ?",array($this->Email));
      $profiles = $Resultlogin->fetch(PDO::FETCH_OBJ);
      
      if(password_verify($this->Motdepasse, $profiles->Motdepasse)) {
         $_SESSION['idprofile'] = $profiles->ID_profiles;
         $_SESSION['nom'] = $profiles->Nom;
         $_SESSION['prenom'] = $profiles->Prenom;
         $_SESSION['email'] = $profiles->Email;
         $_SESSION['campus'] = $profiles->Code_campus;
         $_SESSION['classe'] = $profiles->Code_classe;
         $_SESSION['groupe'] = $profiles->Code_groupe;
         header("Location: /accueil/");
      } else { header("Location: /connexion/"); echo"aaaaaaaaaa";}
  }
}