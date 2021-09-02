<?php

class Player
{
    private $name;
    private $pinsThrown = [
        [4,2],
        [6,3]
    ];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function throwPins($one, $two)
    {
        $this->pinsThrown = [
        [$one, $two], 
        [$one, $two]
        ];
    }

    public function getPinsThrown()
    {
        $score = [$this->pinsThrown[0], $this->pinsThrown[1]];
        var_dump($score);
        return $score;
    }

    public function getName()
    {
        return $this->name;
    }
}
