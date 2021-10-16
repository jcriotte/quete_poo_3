<?php
class Vehicle {
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct(string $color) {
        $this->color = $color;
    }
    
    public function forward(): string {
        $this->currentSpeed = 15;
        return "Go !<br>";
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!<br>";
        }
        $sentence .= "I'm stopped !<br>";
        return $sentence;
    }
}


?>