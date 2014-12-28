# Tennis Scoring
Allows you to keep track of the score between 2 tennis players.

### Example:
```php
<?php

require 'vendor/autoload.php';

$player1 = new Acme\Player('Player 1', 0);
$player2 = new Acme\Player('Player 2', 0);

$player1->earnPoints(3);
$player2->earnPoints(3);

$game = new Acme\Tennis($player1, $player2);

echo $game->score(); // Outputs Deuce
```