<?php

require_once('IVehicle.php');

abstract class Vehicle implements IVehicle{
    public $brand;
    protected $color;
    public $engine;
    public $wheels;

    public function __construct($brand = null, $color = null){
        $this->brand = $brand;
        $this->color = $color;

    }

    //Método
    public function getEngine($type = "hosers"){
        return "{$this->engine} {$type}";
    }

    public function wheels(){
        return $this->wheels . "wheels";
    }

    public function getColor(){
        return $this->color . "getColor";
    }
}