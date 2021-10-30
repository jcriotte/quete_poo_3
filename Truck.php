<?php

require_once 'Car.php';

class Truck extends Car {
    private int $storageCapacity;
    private bool $charged;

    public function __construct(string $color, int $nbSeats, string $energy, bool $parkBrake, int $storageCapacity) {
        parent::__construct($color, $nbSeats, $energy, $parkBrake);
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(): int {
        return $this->storageCapacity;
    }

    public function getCharged(): bool {
        return $this->charged;
    }

    public function setCharged(bool $charged): string {
        if ($this->charged = true) {
            return "full !<br>";
        } else {
            return "in filling !<br>";
        }
    }
}


?>