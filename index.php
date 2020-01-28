<?php

require './classes/Vehicule.php';
require './classes/Voiture.php';
require './classes/Coupe.php';

$toto = new Coupe("peugeot", "504", "vert",[2000, 1000, 1000], 800);
var_dump($toto);

$voiture1 = new Voiture("lada", "Niva","blanc",[2000,1500,800], 800);
$voiture2 = new Voiture("Nissan", "Cube", "Violet", [2500, 1800, 1200], 1200);

echo $voiture1->getMarque();

$voiture1->vitesse = 25;
$voiture2->vitesse = 30;

//echo $voiture1->calculerEnergieCinetique() . "<br />";
//$voiture1->vitesse = 3;
//echo $voiture1->calculerEnergieCinetique();
