<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

// Estado

$Parana = new Estado;
$Parana->setNome("Parana");
$Parana->setSigla("PR");

$SantaCatarina = new Estado;
$SantaCatarina->setNome("Santa Catarina");
$SantaCatarina->setSigla("SC");

// Cidades

$Foz = new Cidade;
$Foz->setNome("Foz do Iguaçu");
$Foz->setQtdHabitantes(259335);
$Foz->setAltitude(192);
$Foz->setEstado($Parana );

$Cascavel = new Cidade;
$Cascavel->setNome("Cascavel");
$Cascavel->setQtdHabitantes(364104);
$Cascavel->setAltitude(781);
$Cascavel->setEstado($Parana );

// $Blumenau = new Cidade;
// $Blumenau->setNome("Blumenau");
// $Blumenau->setQtdHabitantes("363.340");
// $Blumenau->setAltitude("21");
// $Blumenau->setEstado($SantaCatarina);

// $Florianópolis = new Cidade;
// $Florianópolis->setNome("Florianópolis");
// $Florianópolis->setQtdHabitantes(1324000);
// $Florianópolis->setAltitude(3);
// $Florianópolis->setEstado($SantaCatarina);

$Parana->addCidade($Foz);
$Parana->addCidade($Cascavel);
foreach ($Parana->getCidades() as $cidadePar) {

    print $cidadePar;
}
