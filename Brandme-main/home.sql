create table home (
  `user_id` varchar(10) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `home_information` varchar(30) DEFAULT NULL,
  `user_img` varchar(50) DEFAULT NULL,
  `git` varchar(50) DEFAULT NULL,
  `notion` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)

);