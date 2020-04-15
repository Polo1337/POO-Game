<?php
require_once('game.php');

$nomPerso1 = "Pol";
$nomPerso2 = "Jean";

$perso1 = new Perso($nomPerso1);
$perso2 = new Perso($nomPerso2);

$i = 0;
while (($perso1->getVie() > 0) && ($perso2->getVie() > 0)) {
    $i = $i + 1;
    echo 'tour' . $i;

    $perso1->frapperAdversaire($perso2);
    $perso2->frapperAdversaire($perso1);
    $perso1->afficher();
    $perso2->afficher();
}

if ($perso1->getVie() <= 0) {
    echo $perso2->getNom() . ' WIN ' . $perso1->getNom();
} else {
    echo $perso1->getNom() . 'LOOSE' . $perso2->getNom();
}
