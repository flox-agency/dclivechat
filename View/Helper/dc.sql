
CREATE TABLE `analytiques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `time` varchar(11) NOT NULL,
  `time_en_minute` varchar(11) NOT NULL,
  `date_visit` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;
