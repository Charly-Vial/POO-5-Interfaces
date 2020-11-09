<?php
require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Bike extends Vehicule implements LightableInterface
{

    /**
     * @var bool
     */
    private $light;

    public function __construct(string $color, int $nbSeats, bool $light)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->light = $light;
    }

    public function getLight(): string
    {
        if ($this->light == true){
            return 'light is on <br/>';
        } else {
            return 'light is off <br/>';
        }
    }

    public function switchOn () :void {
        if ($this->currentSpeed <= 10) {
            $this->light = false;
            echo 'need current speed > 10 for start light <br/>';
        } else {
            $this->light = true;
        }
    }

    public function switchOff () :void {
        $this->light = false;
    }

}
