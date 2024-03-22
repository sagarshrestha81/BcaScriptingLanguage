<?php

class Vehicle
{
    private $x = 100;
    function __construct()
    {
        // return $this->x;
    }

    private function tricks()
    {

    }
}
class Bus extends Vehicle
{
    public $y;

    function __construct()
    {


    }
    function getdata()
    {
        $y = $this->x;
        return $y;
    }
}

$obj = new Vehicle();
echo $obj->tricks();


