<?php
$groupeFormulaire = filter_input(INPUT_POST, 'creationgroupe', FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);

$GRO = new Groupe();
if (isset($groupeFormulaire))
{
$GRO->setGroupeFromPost();
$GRO->createGroupe();
$groupe = $GRO->getGroupe();
$groupeid = $groupe->ID_groupes;
$GRO->updateProfile($groupeid,$urlId);
$_SESSION['groupe'] = $groupeid;
header("Location: /accueil");
}

if($urlId != $_SESSION['idprofile'] || !isset($_SESSION['idprofile']) || $_SESSION['groupe'] != 1)
{
header("Location: /accueil");
}
include_once 'layouts/Basique.php';
?>