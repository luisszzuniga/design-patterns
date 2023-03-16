<?php

require_once('ICri.php');

class Coq implements ICri {
    public function crier() {
        echo "Cocorico\n";
    }
}