<?php

require "ScoreBoard.php";


$scoreboard = new ScoreBoard("Dax", "Ahmed");
$scoreboard->calculatePlayerscore("Dax");
$scoreboard->displayScores();
?>