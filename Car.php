<?php

require_once 'Vehicle.php';
class Car extends Vehicle {
    
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private int $energyLevel;
    private string $energy;


    public function __construct(string $color, int $nbSeats, string $energy) {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function start(): string {
        $sentence = "I'm started !<br>";
        return $sentence;
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int {
        return $this-> currentSpeed;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function setEnergy(string $energy): Car {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}


?>