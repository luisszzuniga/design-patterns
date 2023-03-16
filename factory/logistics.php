<?php

abstract class Logistics 
{    
    public Transport $transport;
    
    public function __construct()
    {
        
    }
    public function meanOfTransport() {
        return $this->transport->mean;
    }
}

class RoadLogistics extends Logistics 
{
    public function __construct()
    {
        $this->transport = new Truck();
    }
}