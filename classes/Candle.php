<?php

/**
 * Created by PhpStorm.
 * User: Veniamin
 * Date: 26.11.16
 * Time: 18:30
 */
class Candle
{
    protected $color;
    protected $smell;
    protected $price;
    protected $brand;
    protected $form;

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }
}