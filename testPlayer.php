<?php

require('Player.php');
$player = new Player('John Doe');
$player->throwPins(rand(1, 5), rand(1, 5));
$score = $player->getPinsThrown();
echo $player->getName() . " heeft de eerste keer " . $score . " gegooid" . PHP_EOL;
echo $player->getName() . " heeft de tweede keer " . $score . " gegooid";

?>