CREATE TABLE IF NOT EXISTS `board` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `board_id` varchar(20) NOT NULL,
  `board_name` varchar(20) NOT NULL,
  `board_occupation` varchar(30) NOT NULL,
  PRIMARY KEY (`num`)
);