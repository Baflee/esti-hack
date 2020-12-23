<?php
$profileFormulaire = filter_input(INPUT_POST, 'inscription', FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_SANITIZE_MAGIC_QUOTES);

$INS = new Inscription();
$classes = $INS->Classe();
$campuss = $INS->Campus();

if (isset($profileFormulaire))
{
$INS->setProfileFromPost();
$INS->saveProfile();
header("Location: /connexion");
}

include_once 'layouts/Basique.php';
?>