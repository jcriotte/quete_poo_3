<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface {
    
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private int $energyLevel;
    private string $energy;
    private bool $hasParkBrake;
    private bool $hasLight = false;


    public function __construct(string $color, int $nbSeats, string $energy, bool $parkBrake) {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->hasParkBrake = $parkBrake;
    }

    public function start(): string {
        if ($this->hasParkBrake == true) {
            throw new Exception("le frien à main est tiré !");
        }
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

    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $parkbrake): Car
    {
        $this->hasParkBrake = $parkbrake;
        return $this;
    }

    public function switchOn(): Bool
    {
        $this->hasLight = true;
        return $this->hasLight;
    }

    public function switchOff(): bool
    {
        $this->hasLight = false;
        return $this->hasLight;
    }
}


?>