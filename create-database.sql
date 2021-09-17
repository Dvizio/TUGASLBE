DROP DATABASE IF EXISTS `genshin`;
CREATE DATABASE `genshin`; 
USE `genshin`;
SET NAMES utf8 ;
SET character_set_client = utf8mb4 ;

CREATE TABLE `enemies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)