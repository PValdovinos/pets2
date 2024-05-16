<?php

class Pet
{
    //2 private fields
    private $_animal;
    private $_color;

    //constructor

    public function __construct($_animal="unknown", $_color="unknown")
    {
        $this->_animal = $_animal;
        $this->_color = $_color;
    }

    /**
     * @return mixed|string
     */
    public function getAnimal(): mixed
    {
        return $this->_animal;
    }

    /**
     * @param mixed|string $animal
     */
    public function setAnimal(mixed $animal): void
    {
        $this->_animal = $animal;
    }
}