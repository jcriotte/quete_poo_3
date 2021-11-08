<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface {

    private bool $hasLight = false;

    public function switchOn(): Bool
    {
        if ($this->currentSpeed > 0) {
            $this->hasLight = true;
        }
        return $this->hasLight;
    }

    public function switchOff(): bool
    {
        $this->hasLight = false;
        return $this->hasLight;
    }
}
?>