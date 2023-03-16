<?php

abstract class Transport {
    
    public string $mean;
    abstract public function deliver();
}

class Truck extends Transport {
    public string $mean;
    
    public function __construct()
    {
        $this->mean = "RoadDelivery";
    }
    public function deliver() {
        echo "Transport camion";
    }
}

class Ship extends Transport {
    
    public function __construct()
    {
        $this->mean = "SeaDelivery";
    }
    public function deliver() {
        echo "Transport bateau";
    }
}