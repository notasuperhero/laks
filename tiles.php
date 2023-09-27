<?php
class Tile{
    public $tile_id;
    public $config = array(); // Initialized as an empty array
    public $houses = array(); // Initialized as an empty array
    public $fisheries = array(); // Initialized as an empty array
    public $ports = array(); // Initialized as an empty array
    public $forests = array(); // Initialized as an empty array
    public $hotels = array(); // Initialized as an empty array
    public $people = array(); // Initialized as an empty array
    public $contracts_possible = array();
    public $contract_rotation = array();
    public $tile_array = array();
    public $orange;
    public $corals;
    public $long_island_contract = [10,2,3,1,0,3,0,2,1,0,3,1,2,1,2,0,3];
    public $double_island_contract = [10,11,8,5,11,11,5,8,11,11,8,5,11,11,5,8,11];
    public $single_island_contract = [10,7,3,0,11,9,0,1,11,6,1,2,11,4,2,3,11];
    public $four_contract = [0,1];
    public $five_contract = [0,2];
    public $six_contract = [0,3];
    public $seven_contract = [1,2];
    public $eight_contract = [1,3];
    public $nine_contract = [2,3];
    public $ten_contract = [0,1,2,3];
    
             
    public function __construct($tile_id, $config, $houses,$fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation) {
        $this->tile_id = $tile_id;
        
        $this->config = $config;
        $this->houses = $houses;
        $this->fisheries = $fisheries;
        $this->ports = $ports;
        $this->forests = $forests;
        $this->hotels = $hotels;
        $this->orange = $orange;
        $this->corals = $corals;
        $this->people = $people;
        $this->contracts_possible = $contracts_possible;
        $this->contract_rotation = $contract_rotation;
    
    }

}

//Define Tiles Here
$tile_id=0;
$config_tile=[0,0,1,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[1,0];
$hotels=[0,0];
$orange=true;
$corals=2;
$people=[2,0];
$contracts_possible=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$contract_rotation=[10,2,3,1,0,3,0,2,1,0,3,1,2,1,2,0,3];

// Create Tile objects using the provided properties

$tile_0 = new Tile(0, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);


$tile_id=1;
$config_tile=[0,0,1,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[1,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=2;
$people=[1,0];
$contracts_possible=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$contract_rotation=[10,2,3,1,0,3,0,2,1,0,3,1,2,1,2,0,3];


$tile_1 = new Tile(1, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=2;
$config_tile=[0,0,1,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[1,0];
$hotels=[0,0];
$orange=true;
$corals=1;
$people=[2,0];
$contracts_possible=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$contract_rotation=[10,2,3,1,0,3,0,2,1,0,3,1,2,1,2,0,3];


$tile_2 = new Tile(2, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=3;
$config_tile=[0,0,1,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[1,0];
$hotels=[0,0];
$orange=true;
$corals=2;
$people=[2,0];
$contracts_possible=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$contract_rotation=[10,2,3,1,0,3,0,2,1,0,3,1,2,1,2,0,3];


$tile_3 = new Tile(3, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=4;
$config_tile=[0,0,1,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[1,0];
$hotels=[0,0];
$orange=true;
$corals=3;
$people=[2,0];
$contracts_possible=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$contract_rotation=[10,2,3,1,0,3,0,2,1,0,3,1,2,1,2,0,3];


$tile_4 = new Tile(4, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=5;
$config_tile=[0,0,1,1];
$houses=[1,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=2;
$people=[1,0];
$contracts_possible=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$contract_rotation=[10,2,3,1,0,3,0,2,1,0,3,1,2,1,2,0,3];


$tile_5 = new Tile(5, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=6;
$config_tile=[0,0,1,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[1,0];
$hotels=[0,0];
$orange=true;
$corals=3;
$people=[2,0];
$contracts_possible=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$contract_rotation=[10,2,3,1,0,3,0,2,1,0,3,1,2,1,2,0,3];


$tile_6 = new Tile(6, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=7;
$config_tile=[0,0,1,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[1,0];
$hotels=[0,0];
$orange=true;
$corals=2;
$people=[2,0];
$contracts_possible=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$contract_rotation=[10,2,3,1,0,3,0,2,1,0,3,1,2,1,2,0,3];


$tile_7 = new Tile(7, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=8;
$config_tile=[0,1,0,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[1,0];
$hotels=[0,0];
$orange=true;
$corals=2;
$people=[1,0];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];


$tile_8 = new Tile(8, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=9;
$config_tile=[0,1,0,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[1,0];
$hotels=[0,0];
$orange=true;
$corals=3;
$people=[1,0];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_9 = new Tile(9, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=10;
$config_tile=[0,1,0,1];
$houses=[0,0];
$fisheries=[0,1];
$ports=[0,0];
$forests=[0,0];
$hotels=[1,0];
$orange=true;
$corals=0;
$people=[1,2];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_10 = new Tile(10, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=11;
$config_tile=[0,1,0,1];
$houses=[1,1];
$fisheries=[0,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=0;
$people=[1,3];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_11 = new Tile(11, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=12;
$config_tile=[0,0,1,1];
$houses=[1,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=1;
$people=[1,0];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_12 = new Tile(12, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=13;
$config_tile=[0,0,1,1];
$houses=[1,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=3;
$people=[1,0];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_13 = new Tile(13, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=14;
$config_tile=[0,1,0,1];
$houses=[1,1];
$fisheries=[0,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=0;
$people=[1,3];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_14 = new Tile(14, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=15;
$config_tile=[0,1,0,1];
$houses=[1,1];
$fisheries=[0,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=0;
$people=[1,3];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_15 = new Tile(15, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=16;
$config_tile=[0,1,0,1];
$houses=[0,1];
$fisheries=[1,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=0;
$people=[1,2];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_16 = new Tile(16, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=17;
$config_tile=[0,1,0,1];
$houses=[0,1];
$fisheries=[0,0];
$ports=[1,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=0;
$people=[1,2];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_17 = new Tile(17, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=18;
$config_tile=[0,1,0,1];
$houses=[0,1];
$fisheries=[0,0];
$ports=[1,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=0;
$people=[2,1];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_18 = new Tile(18, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=19;
$config_tile=[0,1,0,1];
$houses=[0,0];
$fisheries=[0,1];
$ports=[1,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=0;
$people=[2,2];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_19 = new Tile(19, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);


$tile_id=20;
$config_tile=[0,1,0,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,1];
$forests=[0,0];
$hotels=[1,0];
$orange=true;
$corals=0;
$people=[2,1];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_20 = new Tile(20, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=21;
$config_tile=[0,1,0,1];
$houses=[0,1];
$fisheries=[0,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[1,0];
$orange=true;
$corals=0;
$people=[2,1];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_21 = new Tile(21, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=22;
$config_tile=[0,1,0,1];
$houses=[0,0];
$fisheries=[0,1];
$ports=[1,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=0;
$people=[2,2];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_22 = new Tile(22, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=23;
$config_tile=[0,1,0,1];
$houses=[0,1];
$fisheries=[1,0];
$ports=[0,];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=0;
$people=[2,1];
$contracts_possible=[0,2,3,6,7,10,11,14,15];
$contract_rotation=[10,8,5,5,8,8,5,5,8];

$tile_23 = new Tile(23, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=24;
$config_tile=[0,0,0,1];
$houses=[0,0];
$fisheries=[1,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=2;
$people=[1,0];
$contracts_possible=[0,1,2,3,5,6,7,9,10,11,13,14,15];
$contract_rotation=[10,7,3,0,9,0,1,6,1,2,4,2,3];

$tile_24 = new Tile(24, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=25;
$config_tile=[0,0,0,1];
$houses=[0,0];
$fisheries=[0,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[1,0];
$orange=true;
$corals=3;
$people=[1,0];
$contracts_possible=[0,1,2,3,5,6,7,9,10,11,13,14,15];
$contract_rotation=[10,7,3,0,9,0,1,6,1,2,4,2,3];

$tile_25 = new Tile(25, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=26;
$config_tile=[0,0,0,1];
$houses=[0,0];
$fisheries=[1,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=3;
$people=[1,0];
$contracts_possible=[0,1,2,3,5,6,7,9,10,11,13,14,15];
$contract_rotation=[10,7,3,0,9,0,1,6,1,2,4,2,3];

$tile_26 = new Tile(26, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_id=27;
$config_tile=[0,0,0,1];
$houses=[0,0];
$fisheries=[1,0];
$ports=[0,0];
$forests=[0,0];
$hotels=[0,0];
$orange=true;
$corals=3;
$people=[1,0];
$contracts_possible=[0,1,2,3,5,6,7,9,10,11,13,14,15];
$contract_rotation=[10,7,3,0,9,0,1,6,1,2,4,2,3];

$tile_27 = new Tile(27, $config_tile, $houses, $fisheries,$ports,$forests,$hotels,$orange,$corals,$people,$contracts_possible,$contract_rotation);

$tile_array = [$tile_0,$tile_1,$tile_2,$tile_3,$tile_4,$tile_5,$tile_6,$tile_7,$tile_8,$tile_9,$tile_10,$tile_11,$tile_12,$tile_13,$tile_14,$tile_15,$tile_16,$tile_17,$tile_18,$tile_19,$tile_20,$tile_21,$tile_22,$tile_23,$tile_24,$tile_25,$tile_26,$tile_27]

?>