<?php

class Vehicle
{

    function __construct()
    {
        echo "im from class";
    }
    function tyres($count)
    {
        echo $count . "tyres vehicle";
    }

}
class Bus extends Vehicle
{
    function __construct($count)
    {
        echo $count;
        parent::__construct();
    }
    function tyres($count)
    {
        echo $count . "tyres bus";
        parent::tyres(10);
    }

}

$obj = new Vehicle(10);

