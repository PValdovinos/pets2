<?php

class RoboticPet extends Pet
{

    // Accessories field
    private $accessories = array();

    // Constructor

    public function __construct($accessory)
    {
        $this->accessories[$accessory];
    }

    public function getAccessories()
    {
        return $this->accessories;
    }
}