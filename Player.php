<?php

class Player
{
    private $name;
    private $pinsThrown = [];

    public function __construct($name)
    {
        $name = "john doe";
    }

    public function throwPins($one, $two)
    {
        $pinsThrown = [$one, $two];
    }

    public function getPinsThrown()
    {
        $pinsThrown = [rand(1, 5), rand(1, 5)];
        echo $pinsThrown;
    }

    public function getName()
    {
    }
}
