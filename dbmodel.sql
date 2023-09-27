CREATE TABLE IF NOT EXISTS `coordinates` (
  `coordinate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tile_id` smallint(5) NOT NULL,
  `board_row` smallint(5) NOT NULL,
  `board_column` smallint(5) NOT NULL,
  `rotate` smallint(5) NOT NULL,
  
  PRIMARY KEY (`coordinate_id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `contracts` (
  
  `board_row`smallint(5) NOT NULL,
  `board_column` smallint(5) NOT NULL,
  `possible_config` smallint(5) NOT NULL,
  `contract_valid` smallint(5) NOT NULL,
  
  PRIMARY KEY (`board_row`,`board_column`),
) ENGINE=InnoDB;
