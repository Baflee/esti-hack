<?php

Class Accueil {
/**
 * Permet d'afficher les catégories sur la page web
 * 
 * @return strings | Renvoie les catégories présentes dans la base de données
 */
  public function getCategories() {
      global $Db;  
      $Resultcategories = $Db->prepareall('SELECT * FROM categories');
      $categories = $Resultcategories->fetchAll(PDO::FETCH_CLASS);
      return $categories;
  }


/**
 * Permet d'afficher les sous-catégories sur la page web
 * 
 * @return strings | Renvoie les sous-catégories présentes dans la base de données
 */
  public function getSousCategories() {
      global $Db;  
      $Resultsouscategories = $Db->prepareall('SELECT * FROM souscategories');
      $souscategories = $Resultsouscategories->fetchAll(PDO::FETCH_CLASS);
      return $souscategories;
  }  
}