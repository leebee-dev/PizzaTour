--
-- Database : `PizzaTour`
--
CREATE DATABASE IF NOT EXISTS pizza;
ALTER SCHEMA pizza DEFAULT CHARACTER SET utf8 ;

USE pizza;

--
-- Table structure for table `menu`
-- class 1:pizza , 2:chicken, 3:set, 4:side
--
CREATE TABLE IF NOT EXISTS `Menu` (
	`idx` INT(11) unsigned NOT NULL auto_increment,
	`name` VARCHAR(100) NOT NULL default '',
	`description` VARCHAR(255),
  `class` INT(5) unsigned NOT NULL default 0,
	`origin` VARCHAR(255),
  `img` VARCHAR(64) default "pizza.png",
	`score` TINYINT default 0,
  `best` TINYINT default 0,
   PRIMARY KEY (`idx`)
); 
--
-- Table structure for table `Price`
--
CREATE TABLE IF NOT EXISTS `Price` (
	`idx` INT(11) unsigned NOT NULL,
  `M` INT(11) NOT NULL default 0, 
  `L` INT(11) default 0,
  `Big` INT(11) default 0,

  FOREIGN KEY (`idx`) REFERENCES Menu(`idx`) on delete cascade
);

--
-- Table structure for table `Nutrition`
--
CREATE TABLE IF NOT EXISTS `Nutrition` (
	`idx` INT(11) unsigned NOT NULL,
  `calorie` FLOAT,
  `carbohydrate` FLOAT,
  `sugars` FLOAT,
  `protein` FLOAT,
  `fat` FLOAT,
  `Saturated` FLOAT,
  `trans` FLOAT,
  `cholesterol` FLOAT,
  `salt` FLOAT,

  FOREIGN KEY (`idx`) REFERENCES Menu(`idx`) on delete cascade
);

--
-- Table structure for table `admin`
--
CREATE TABLE IF NOT EXISTS `Admin` (
    `idx` INT(11) unsigned NOT NULL auto_increment,
    `adminID` varchar(30) NOT NULL UNIQUE,
    `adminName` varchar(60) NOT NULL,
    `Email` varchar(60) default NULL,
    `password` varchar(80) NOT NULL,
    `salt` varchar(10) NOT NULL,
    `created_at` datetime,
    PRIMARY KEY (`idx`)
);

--CREATE TABLE `user`
CREATE TABLE IF NOT EXISTS `User` (
    `idx` INT(11) unsigned NOT NULL auto_increment,
    `userID` varchar(30) NOT NULL UNIQUE,
    `userName` varchar(60) NOT NULL,
    `Email` varchar(60) default NULL,
    `password` varchar(80) NOT NULL,
    `salt` varchar(10) NOT NULL,
    `count` INT(11) unsigned default 0,
    `created_at` datetime,
    PRIMARY KEY (`idx`)
);


