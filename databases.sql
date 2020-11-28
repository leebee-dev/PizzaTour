--
-- Database : `PizzaTour`
--
CREATE DATABASE IF NOT EXISTS `PizzaTour`
  DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
  USE PizzaTour;

--
-- Table structure for table `menu`
--
CREATE TABLE IF NOT EXISTS `Menu` (
	`idx` INT(5) unsigned NOT NULL auto_increment,
	`name` VARCHAR(100) NOT NULL default '',
	`price` INT(11)[] NOT NULL default 0,
	`description` VARCHAR(255),
	`origin` VARCHAR(64),
	`score` TINYINT default 0,
    PRIMARY KEY (`idx`)
);
--
-- Table structure for table `Nutrition`
--

--
-- Table structure for table `Allergens`
--

--
-- Table structure for table `admin`
--
CREATE TABLE IF NOT EXISTS `Admin` (
    `idx` INT(5) unsigned NOT NULL auto_increment,
    `adminID` varchar(30) NOT NULL UNIQUE,
    `adminName` varchar(60) NOT NULL,
    `Email` varchar(60) default NULL,
    `password` varchar(80) NOT NULL,
    `salt` varchar(10) NOT NULL,
    `created_at` datetime,
    PRIMARY KEY (`idx`)
);