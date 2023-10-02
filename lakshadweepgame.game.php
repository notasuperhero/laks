<?php

require_once( APP_GAMEMODULE_PATH.'module/table/table.game.php' );

class Lakshadweepgame extends Table {

    function __construct() {
        parent::__construct();
        self::initGameStateLabels( array( 
           
        ) );  

       
    }

    protected function getGameName( )
    {
		// Used for translations and stuff. Please do not modify.
        return "lakshadweepgame";
    }

    protected function setupNewGame( $players, $options = array() )
    {
        $default_colors = array( "ca5a26", "9b4b9d" );
        
        $sql = "INSERT INTO player (player_id, player_color, player_canal, player_name, player_avatar) VALUES ";
        $values = array();
        
        foreach( $players as $player_id => $player )
        {   
            $color = array_shift( $default_colors );
            $values[] = "('".$player_id."','$color','".$player['player_canal']."','".addslashes( $player['player_name'] )."','".addslashes( $player['player_avatar'] )."')";
        }

        $sql .= implode( $values, ',' );
        self::DbQuery( $sql );

        self::reloadPlayersBasicInfos();
        //$board_row=10;
       // $board_column=10;
       // $possible_config=10;
       // $contract_valid=10;
      //  $sql = "INSERT INTO contracts (board_row,board_column,possible_config,contract_valid) VALUES ($board_row, $board_column, $possible_config, $contract_valid) ";
      //  self::DbQuery($sql);



        $this->activeNextPlayer();
    }

    protected function getAllDatas()
    {
       
        $result ['players'] = self::getCollectionFromDb("SELECT player_id id, player_score score, player_no no, player_color color FROM player");
    
      
       
        return $result;

    
    }

    function getGameProgression()
    {
        // TODO: compute and return the game progression

        return 0;
    }

    function getAllOpenContracts(){
        $openContracts = array();

        $sql = "SELECT  board_row board_row, board_column board_column, possible_config possible_config, contract_valid contracts_valid FROM contracts ";
        $result['contracts'] = self::getCollectionFromDb( $sql );

        return $result;
  

    }


    function placeTile()
    {
        // Check that this player is active and that this action is possible at this moment 
        self::checkAction( 'placeTile' );
    }

    function stNextPlayer()
    {
        // Active next player
        $player_id = self::activeNextPlayer();
    }





}
