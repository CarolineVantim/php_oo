<?php

class Vehicle{
    public $brand;
    public $color;
    public $engine;
    public $wheels;

    //Método
    public function getEngine($type = "hosers"){
        return "{$this->engine} {$type}";
    }

    public function wheels(){
        return $this->wheels . "wheels";
    }
}