CREATE TABLE IF NOT EXISTS `contactme` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `contactme_user_id` varchar(20) NOT NULL,
  `contactme_name` varchar(20) NOT NULL,
  `contactme_email` varchar(20) NOT NULL,
  `contactme_title` varchar(20) NOT NULL,
  `contactme_message` varchar(100) NOT NULL,
  PRIMARY KEY (`num`)
)