<?php

    include_once __DIR__."/Product.php";
    use Store as Game;

    function displayGame ($game) {
        echo "$game->$category, min age: $game->$minAge, game type: $game->$type";
    }

?>