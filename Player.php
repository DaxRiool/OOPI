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
        $this->score = $this->pinsThrown[0] + $this->pinsThrown[1];
    }

    public function getName()
    {
        $name = "piet";
        echo $this->name;
    }
}
