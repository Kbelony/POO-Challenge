<?php

// Vehicle.php

class Vehicle
{

    protected string $color;

    public int $currentSpeed;

    protected int $nbSeats;

    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    abstract class HighWay
    {
        abstract public array $currentVehicules;
        abstract public int $nbLane;
        abstract public int $maxSpeed;

        public function getCurrentVehicules(): array
        {
            return $this->$currentVehicules;
        }
        public function getNbLane(); int
        {
            return $this->$nbLane;
        }
        public function getMaxSpeed(): int
        {
            return $this->$maxSpeed;
        }
        final class MotorWay
        {
            return $this->$nbLane = 4;
            return $this->$maxSpeed = 130;
        }
        final class PedestrianWay
        {
            return $this->$nbLane = 1;
            return $this->$maxSpeed = 10;
        }
        final class ResidentialWay
        {
            return $this->$nbLane = 2;
            return $this->$maxSpeed = 50;
        }
        abstract class addVehicle()
    }
}