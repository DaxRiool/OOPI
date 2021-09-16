<?php

$bestand = new Player("dax ");

class ScoreBoard
{
    private $scores = [];
    private $players = [];

    public function __construct($players)
    {
        $this->players[] = $players;
    }
    private function calculatePlayerscore() 
    {
        for ($i = 0; $i >= 10; $i++) {
            echo $bestand->pinsThrown[0];
            echo $bestand->pinsThrown[1];
            $this->scores[] = $bestand->pinsThrown[0] + $bestand->pinsThrown[1];
        }
    }
    private function calculateAllscores()
    {
        $this->score[] = $bestand->pinsThrown[0] + $bestand->pinsThrown[1];
        $score = $player->getPinsThrown();
    }
    public function displayScores()
    {
        var_dump($this->score);
    }
    public function displayWinner()
    {
        echo "winner is " . $this->player;
    }
}

$scoreb = new ScoreBoard("dax");

?> 