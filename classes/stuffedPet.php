<?php

class stuffedPet extends Pet
{
    private $_size;
    private $_stuffingType;
    private $_material;

    function __construct($_size="unknown", $_stuffingType="unknown", $_material="unknown")
    {
        $this->_size = $_size;
        $this->_stuffingType = $_stuffingType;
        $this->_material = $_material;
    }

    public function getSize()
    {
        return $this->_size;
    }

    public function setSize($size)
    {
        $this->_size = $size;
    }

    public function getStuffingType()
    {
        return $this->_stuffingType;
    }

    public function setStuffingType($stuffingType)
    {
        $this->_stuffingType = $stuffingType;
    }

    public function getMaterial()
    {
        return $this->_material;
    }

    public function setMaterial($material)
    {
        $this->_material = $material;
    }


}
