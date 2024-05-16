<?php

class RoboticPet extends Pet
{

    // Accessories field
    private $_accessories = array();

    public function __construct($animal, $name = "unknown", $color = "???", $accessories = array())
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

}