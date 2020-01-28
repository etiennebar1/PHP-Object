<?php

require './classes/Voiture.php';

$voiture1 = new Voiture("lada", "Niva","blanc",[2000,1500,800], 800);
$voiture2 = new Voiture("Nissan", "Cube", "Violet", [2500, 1800, 1200], 1200);

echo $voiture1->getMarque();

$voiture1->vitesse = 25;
$voiture2->vitesse = 30;

//echo $voiture1->calculerEnergieCinetique() . "<br />";
//$voiture1->vitesse = 3;
//echo $voiture1->calculerEnergieCinetique();
