<?php

require_once('ICri.php');

class Poule implements ICri {
    public function crier() {
        echo "Cot cot cot\n";
    }
}