<?php
$Groupes = $_SESSION['groupe'];
$CL = new ChallengesList();
$epreuves = $CL->epreuves();
include_once 'layouts/Basique.php';
?>