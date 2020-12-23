<?php
$CHA = new Challenge();
$epreuve = $CHA->getChallenge($urlId);
$Flag = $CHA->setFlagFromChallenge();
$Groupes = $_SESSION['groupe'];
$Points = $epreuve->Points;
$validation = $CHA->getVerification($urlId,$Groupes);
$groupe = $CHA->getGroupe($Groupes);
if ($epreuve->Flag == $Flag && $validation->Code_groupe != $_SESSION['groupe'] && $validation->Code_epreuves != $urlId)
{
	if($_SESSION['groupe'] != "1")
	{
		$CHA->addPoints($Points, $Groupes);
		$CHA->addValidation($Groupes,$urlId);
	}
}

include_once 'layouts/Basique.php';
?>