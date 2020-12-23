<?php

Class Classement {

  public function groupes() {
      global $Db;  
      $Resultgroupes = $Db->prepareall('SELECT * FROM groupes WHERE ID_groupes != 1 ORDER BY Points DESC');
      $groupes = $Resultgroupes->fetchAll(PDO::FETCH_CLASS);
      return $groupes;
  }
}
