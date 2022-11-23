create table skills_backend (
  `user_id` varchar(10) DEFAULT NULL,
  `skills_back_1` varchar(20) DEFAULT NULL,
  `skills_back_2` varchar(20) DEFAULT NULL,
  `skills_back_3` varchar(20) DEFAULT NULL,
  `skills_back_4` varchar(20) DEFAULT NULL,
  `skills_back_per_1` int(11) DEFAULT NULL,
  `skills_back_per_2` int(11) DEFAULT NULL,
  `skills_back_per_3` int(11) DEFAULT NULL,
  `skills_back_per_4` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)

);