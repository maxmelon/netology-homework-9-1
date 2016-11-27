<?php
class Mug
{
    protected $color;
    protected $volume;
    protected $price;
    protected $material;
    protected $owner;

    public function __construct($color, $volume, $price, $material, $owner)
    {
        $this->color = $color;
        $this->volume = $volume;
        $this->price = $price;
        $this->material = $material;
        $this->owner = $owner;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
}