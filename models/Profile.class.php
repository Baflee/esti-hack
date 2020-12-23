<?php

Class Profile {

  public function getProfile($urlId) {
      global $Db; 
      $Resultprofile = $Db->preparefull('SELECT profiles.ID_profiles as ID_profiles, profiles.Nom AS Nom, profiles.Prenom AS Prenom, profiles.Email AS Email, profiles.Description AS Description, classes.Nom AS Classe, campus.Nom AS Campus, groupes.Nom AS Groupe FROM profiles INNER JOIN classes ON profiles.Code_classe = classes.ID_classes INNER JOIN campus ON profiles.Code_campus = campus.ID_campus INNER JOIN groupes ON profiles.Code_groupe = groupes.ID_groupes WHERE ID_profiles = ?',array($urlId));
      $profile = $Resultprofile->fetch(PDO::FETCH_OBJ);
      return $profile;
  }
}