<?php

require "Player.php";
$bestand = new Player("Dax");
$bestand->throwPins(rand(1, 5), rand(1, 5));
$score = $bestand->getPinsThrown();
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
            $this->score[] = $bestand->pinsThrown[0] + $bestand->pinsThrown[1];
        }
    }
    private function calculateAllscores()
    {
        $this->score[] = $bestand->pinsThrown[0] + $bestand->pinsThrown[1];
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