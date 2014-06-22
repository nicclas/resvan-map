CREATE TABLE `moves_storyline` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` varchar(255) DEFAULT NULL,
  `storyline` mediumblob,
  `day` varchar(255) DEFAULT NULL,
  `handle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `day` (`day`)
) ENGINE=MyISAM AUTO_INCREMENT=37954 DEFAULT CHARSET=latin1;
