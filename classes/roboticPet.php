<?php

class RoboticPet extends Pet
{

    // Accessories field
    private $_accessories = array();


    public function getAccessories()
    {
        return $this->_accessories;
    }
}