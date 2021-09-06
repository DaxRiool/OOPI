<?php
 
class BowlingGame
{
    private $scoreBoard;
    private $players;
    private $round;
    
    public function __construct()
    {
        $this->round = 1;
        $this->players;
        return $this;
    }

    public function askPlayerNames()
    {
        $aantal = readline("hoeveel spelers wil je toevoegen? ");
        for ($i = 0; $i >= $aantal; $i++) {
            $name[] = "wat is je naam? ";
        }
    }

    private function addPlayer($name)
    {
        $this->players[$name];
    }

        
    private function playRound()
    {
        echo $this->scoreBoard;
        echo $this->players;
    }

    private function playLastRound()
    {
        if ($this->round == 11) {
        }
    }

    public function play()
    {
        askPlayerNames();
        addPlayer($name);
        playRound();
        playLastRound();
    }
}
