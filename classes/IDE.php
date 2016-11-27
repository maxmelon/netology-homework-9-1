<?php

class IDE
{
    protected $name;
    protected $developer;
    protected $version;
    protected $barePrice;
    protected $discount;

    public function __construct($name, $developer, $version, $barePrice, $discount)
    {
        $this->name = $name;
        $this->developer = $developer;
        $this->version = $version;
        $this->barePrice = $barePrice;
        $this->discount = $discount;
    }

    public function getPrice()
    {
        $price = $this->barePrice - $this->discount;
        return $price;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

}