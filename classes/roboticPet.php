<?php

class RoboticPet extends Pet
{

    // Accessories field
    private $_accessories = array();

    // Constructor

    public function __construct($accessory)
    {
        $this->_accessories[$accessory];
    }

    public function getAccessories()
    {
        return $this->_accessories;
    }
}