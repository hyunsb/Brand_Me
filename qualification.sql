create table qualification (
  `user_num` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(10) DEFAULT NULL,
  `edu` tinyint(1) DEFAULT NULL,
  `work` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_num`)

);