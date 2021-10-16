<?php
require_once 'HighWay.php';
final class PedestrianWay extends HighWay {

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        $this->currentVehicles = [];
    }

    public function addVehicle(Vehicle $vehicle):void {
        array_push($this->currentVehicles, $vehicle);
    }
}