<?php

class Player
{
    private $name;
    private $pinsThrown = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function throwPins($one, $two)
    {
        $this->pinsThrown = [$one, $two];
    }

    public function getPinsThrown()
    {
        echo $this->pinsThrown[0];
        echo $this->pinsThrown[1];
    }

    public function getName()
    {
        $name = "piet";
        echo $this->name;
    }
}
