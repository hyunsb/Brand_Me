create table skills_frontend (
  `user_num` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(10) DEFAULT NULL,
  `career` varchar(20) DEFAULT NULL,
  `skills_front_1` varchar(20) DEFAULT NULL,
  `skills_front_2` varchar(20) DEFAULT NULL,
  `skills_front_3` varchar(20) DEFAULT NULL,
  `skills_front_4` varchar(20) DEFAULT NULL,
  `skills_front_per_1` int(11) DEFAULT NULL,
  `skills_front_per_2` int(11) DEFAULT NULL,
  `skills_front_per_3` int(11) DEFAULT NULL,
  `skills_front_per_4` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_num`)

);