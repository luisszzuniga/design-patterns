<?php

require_once('ICri.php');

class Poussin implements ICri {
    public function crier() {
        echo "Pouic pouic\n";
    }
}