<?php
class Bicycle
{
    /**
     * @var string
     */
    private $color;

    /**
    * @var integer
    */
    private $currentSpeed;
    /**
    * @var integer
    */
    private $nbSeats;
    /**
    * @var integer
    */
    private $nbWheels;


    public function __construct(string $color)
{
    $this->color = $color;

}


public function getColor() :? string 
{
    return $this->color;
}


public function getCurrentSpeed() :? int 
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0){
        $this->currentSpeed = $currentSpeed;
    }
}


    public function forward()
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
}

