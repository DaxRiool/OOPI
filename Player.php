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
        $score = $this->pinsThrown[0] + $this->pinsThrown[1];
        return $score;
    }

    public function getName()
    {
        echo $this->name;
    }
}
