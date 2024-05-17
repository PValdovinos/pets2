<?php

class Pet
{
    //2 private fields
    private $_animal;
    private $_color;

    //constructor

    public function __construct($_animal, $_color)
    {
        $this->_animal = $_animal;
        $this->_color = $_color;
    }

    /**
     * @return mixed|string
     */
    public function getAnimal()
    {
        return $this->_animal;
    }


    /**
     * @param mixed|string $animal
     */
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
    }
}