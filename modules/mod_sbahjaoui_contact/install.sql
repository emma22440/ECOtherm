CREATE TABLE IF NOT EXISTS `#__sbahjaoui_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `phone` varchar(150) NOT NULL,
  `website` text NOT NULL,
  `subject` varchar(150) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

