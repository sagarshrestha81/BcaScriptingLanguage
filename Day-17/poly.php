<?php

class Animals{
    function eat(){
        echo "they eat";
    }
}
class Dog extends Animals{
    function speak(){
        echo "bark bark";
    }
}
class Cat extends Animals{
    function speak(){
        echo "meow meow";
    }
}

$obj = new Dog();
$obj->speak();