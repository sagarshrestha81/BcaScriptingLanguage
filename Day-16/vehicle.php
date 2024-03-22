<?php

class Vehicle
{

    function tyres($count)
    {
        echo $count . "tyres";
    }
    function seats($count)
    {
        echo $count . " seats";
    }

}

class Bus extends Vehicle
{
    function poles($count)
    {
        echo $count . " poles";
    }

}
class Car extends Vehicle
{
    function airbags($count)
    {
        echo $count . " airbags";
    }
}
class PrivateCars extends Car
{
    public $x;
    function travel($count)
    {
        echo $count . " travel";

    }
}


$bus = new Bus();
$bus->tyres(6);
$bus->seats(25);
$bus->poles(3);
echo "<br>";
$car = new PrivateCars();
$car->tyres(4);
$car->seats(5);
$car->airbags(4);
$car->travel(4);

