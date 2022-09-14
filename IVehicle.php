<?php

interface IVehicle{
    
    public function getEngine($type = "hosers");

    public function wheels();

    public function getColor();
}