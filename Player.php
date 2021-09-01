<?php

class Player
{
    private $name = "john doe";
    private $pinsThrown = [];

    public function __construct($name)
    {
        $name;
    }

    public function throwPins($one, $two)
    {
        $pinsThrown = [$one, $two];
    }

    public function getPinsThrown()
    {
        echo $pinsThrown; 
    }

    public function getName()
    {
        echo $name;
    }
}
