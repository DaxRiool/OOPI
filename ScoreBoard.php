<?php

require "Player.php";
$bestand = new Player("Dax");
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
        $this->score[] = $bestand->pinsThrown[0] + $bestand->pinsThrown[1];
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
    }
}
?> 