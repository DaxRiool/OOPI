<?php
 
class BowlingGame
{
    private $scoreBoard = "score";
    private $players;
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
            $this->name[] = readline("wat is je naam? ");
        }
    }

    private function addPlayer()
    {
        $this->players[$this->name];
    }
 
        
    private function playRound()
    {
        $rand = rand(0, 10);
        $this->round++;
        for ($j = 0; $j >= 10; $j++) {
            echo $this->players[0] . "eerste worp " . $rand . PHP_EOL;
            $over = 10 - $rand;
            $rand2 = rand(0, $over);
            if ($rand2 > 0) {
                echo "tweede worp " . $getal . PHP_EOL;
            } else {
                echo "tweede worp mis" . PHP_EOL;
            }
            echo $this->players[1] . "eerste worp " . $rand . PHP_EOL;
            $over = 10 - $rand;
            $rand2 = rand(0, $over);
            if ($rand2 > 0) {
                echo "tweede worp " . $getal . PHP_EOL;
            } else {
                echo "tweede worp mis" . PHP_EOL;
            }
        }
    }

    private function playLastRound()
    {
        if ($this->round == 11) {
            echo $this->scoreboard;
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
