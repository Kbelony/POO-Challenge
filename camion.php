<?php

require_once 'Vehicle.php';

class Trucks extends Vehicle
{

    public string $energy;
    public int $energyLevel;
    public int $storage;

    public function __construct(string $color, int $nbSeats, string $energy, int $storage)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->storage = $storage;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

}
?>