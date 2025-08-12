<?php

require_once("modelo/Clube.php");
require_once("modelo/Jogador.php");

$Flamengo = new Clube;
$Flamengo->setNome("Flamengo");
$Flamengo->setDivisao("A");
$Flamengo->setAnoFundacao("1895");

// print_r($Flamengo);
$jogador = new Jogador();
$jogador->setNome("Ronaldinho Gaúcho");
$jogador->setNumero(1);
$jogador->setPosicao("Meio-Campo");
$jogador->setClube($Flamengo);

// Imprimir

print "Dados do Jogador:\n";
print "Nome:". $jogador->getNome()."\n";
print "Número:". $jogador->getNumero()."\n";
print "Posição:". $jogador->getPosicao()."\n";
print "Clube:". $jogador->getClube() -> getNome()."\n";

