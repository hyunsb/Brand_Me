CREATE TABLE IF NOT EXISTS `contact` (
  `user_num` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(40) NOT NULL,
  PRIMARY KEY (`user_num`)
);
