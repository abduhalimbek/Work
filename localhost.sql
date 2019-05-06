-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `SignUp`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(65) NOT NULL,
  `LastName` varchar(65) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `Email`) VALUES
(1,	'abduhalim',	'Beknazarov',	'abduhalimbek@gmail.com'),
(2,	'orhan',	'gaibovi',	'ahahaha@dd.dd'),
(7,	'abduhalim',	'Beknazarov',	'beknazar2014@outlook.com'),
(8,	'abduhalim',	'Beknazarov',	'beknazar2014@outlook.com');

-- 2019-05-06 08:10:55
