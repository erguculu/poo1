<?php

class Car
{
    /*
     * @var string
     */
    private $color;

    /*
     * @var string
     */
    private $energy;

    /*
     * @var int
     */
    private $currentEnergy;

    /*
    * @var int
    */
    private $currentSpeed;
    /*
    * @var int
    */
    private $nbSeats;
    /*
    * @var int
    */
    private $nbWheels;


    public function __construct(string $color, string $energy, int $nbSeats){

        $this->color = $color;
        $this->energy = $energy;        
        $this->nbSeats = $nbSeats;

    }

    public function getColor() :string 
    {
        return $this->color;
    }

    public function getEnergy() :? string
    {
        return $this->energy;
    }

    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    public function getNbSeats() :int
    {
        return $this->nbSeats;
    }

    public function getCurrentSpeed() :int 
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getEnergyLevel() : int
    {
        return $this->currentEnergy;
    }

    public function setEnergyLevel(int $currentEnergy): void
    {
        if($currentEnergy >= 0){
            $this->currentEnergy = $currentEnergy;
        }
    }

    public function start()
    {
        $this->currentSpeed = 0; 
        $this->currentEnergy = 100;

        return "Roule !";
    }

    public function forward()
    {

        $this->currentSpeed+=10;

        return "Go!";

    }


    public function brake(): string
    {
        $sentence ="";
        while ($this->currentSpeed >=0){
            $this->currentSpeed-=10;
            $sentence .= "Ralentir!!";
            return $sentence;
        }

        $sentence = "Je me suis arreté !";
        return $sentence;
    }




}






