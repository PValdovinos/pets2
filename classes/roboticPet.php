<?php

class RoboticPet extends Pet
{

    // Accessories field
    private $_accessories = array();

    public function __construct($animal, $color = "???", $accessories = array())
    {
        parent::__construct($animal, $color);
        $this->_accessories = $accessories;
    }

    public function getAccessories()
    {
        return $this->_accessories;
    }

    public function setAccessories($accessories)
    {
        $this->_accessories = $accessories;
    }

    /*public function getAnimal()
    {
        return $this->_animal;
    }

    public function setAnimal($animal)
    {
        $this->_animal = $animal;
    }

    public function setColor($color)
    {
        $this->_color = $color;
    }
    public function getColor()
    {
        return $this->_color;
    }*/

}