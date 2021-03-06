<?php

require_once "ScoreBoard.php";

class BowlingGame
{
    private $scoreBoard = [];
    private $players = [
    ];

    private $round;
    public $name;
    
    public function __construct()
    {
        $this->round = 0;
    }

    public function askPlayerNames()
    {
        $aantal = readline("hoeveel spelers wil je toevoegen? ");
        for ($i = 1; $i <= $aantal; $i++) {
            $name[] = readline("wat is je naam? ");
            $this->players[] = $name;
        }
    }

    private function addPlayer()
    {
        $a = count($this->players);
        $b = $a - 1;
        echo "spelers zijn" . PHP_EOL;
        for ($q = 0; $q < $a; $q++) {
            echo $this->players[$b][$q] . PHP_EOL;
        }
    }
 
        
    private function playRound()
    {
        $a = count($this->players);
        $b = $a - 1;
        for ($k = 0; $k < $a; $k++) {
            for ($j = 0; $j <= 10; $j++) {
                echo "ronde " . $j . PHP_EOL;
                $rand = rand(0, 10);
                echo $this->players[$b][$k] . " eerste worp " . $rand . PHP_EOL;
                $over = 10 - $rand;
                $rand2 = rand(0, $over);
                if ($rand2 > 0) {
                    echo "tweede worp " . $rand2 . PHP_EOL;
                } else {
                    echo "tweede worp mis" . PHP_EOL;
                }
                $this->scoreBoard[$k] = $this->scoreBoard[$k] + $rand + $rand2;
            }
            // [19], [11]
            $this->round = $j;
        }
    }

    private function playLastRound()
    {
        echo "ronde " . $this->round . PHP_EOL;
        $a = count($this->players);
        $b = $a - 1;
        for ($k = 0; $k < $a; $k++) {
            $rand = rand(0, 10);
            echo $this->players[$b][$k] . " laatste worp " . $rand . PHP_EOL;
            $this->scoreBoard[$k] = $this->scoreBoard[$k] + $rand;
        }
        echo "de scores zijn " . PHP_EOL;
        $tel = count($this->scoreBoard);
        $tel = $tel - 1;
        for ($a = 0; $a <= $tel; $a++) {
            echo $this->players[$tel][$a] . " " . $this->scoreBoard[$a] . PHP_EOL;
        }
    }

    public function play()
    {
        $this->askPlayerNames();
        $this->addPlayer($this->name);
        $this->playRound();
        $this->playLastRound();
    }
}

?>