<?php

require_once('Coq.php');
require_once('Poule.php');
require_once('Poussin.php');

$coq = new Coq();
$poule = new Poule();
$poussin = new Poussin();

$coq->crier(); // Affiche "Cocorico"
$poule->crier(); // Affiche "Cot cot cot"
$poussin->crier(); // Affiche "Chip chip"