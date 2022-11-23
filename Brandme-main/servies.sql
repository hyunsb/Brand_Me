CREATE TABLE IF NOT EXISTS `services` (
  `user_id` varchar(20) NOT NULL,
  `services_front_1` varchar(50) NOT NULL,
  `services_front_2` varchar(50) NOT NULL,
  `services_front_3` varchar(50) NOT NULL,
  `services_front_4` varchar(50) NOT NULL,
  `services_back_1` varchar(50) NOT NULL,
  `services_back_2` varchar(50) NOT NULL,
  `services_back_3` varchar(50) NOT NULL,
  `services_back_4` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
)