<?php

 
$machinestates = array(

    1 => array(
        "name" => "gameSetup",
        "description" => clienttranslate("Game setup"),
        "type" => "manager",
        "action" => "stGameSetup",
        "transitions" => array( "" => 20 )
),

 
 20 => array(
    "name" => "playerTurn",
    "description" => clienttranslate('${actplayer} must place a Tile.'),
    "descriptionmyturn" => clienttranslate('${you} must place a Tile.'),
    "type" => "activeplayer",
    "possibleactions" => array( "placeTile" ),
    
    "transitions" => array( "placeTile" => 30 )
),
 
 
30 => array(
    "name" => "nextPlayer",
    "type" => "game",
    "action" => "stNextPlayer",
    "updateGameProgression" => true,        
    "transitions" => array( "nextTurn" => 20, "cantPlay" => 30, "endGame" => 99 )
),

 
 99 => array(
    "name" => "gameEnd",
    "description" => clienttranslate("End of game"),
    "type" => "manager",
    "action" => "stGameEnd",
    "args" => "argGameEnd"
),



);