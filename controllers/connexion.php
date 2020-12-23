<?php


$Login = filter_input(INPUT_POST, 'connexion', FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);

$CON = new Connexion();

if (isset($Login))
{
$CON->setProfileFromPost();
$CON->userLogin();
}

if (isset($_SESSION['idprofile']) AND $_SESSION['idprofile'] > 0)
{
header("Location: accueil");	
}

include_once 'layouts/Basique.php';