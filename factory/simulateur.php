<?php

include 'transport.php';
include 'logistics.php';

class SeaLogistics extends Logistics {
    
    public function __construct()
    {
        $this->transport = new Ship();
    }
}

$seaLogistics = new SeaLogistics();
echo $seaLogistics->meanOfTransport();

$roadLogistics = new RoadLogistics();
echo $roadLogistics->meanOfTransport();