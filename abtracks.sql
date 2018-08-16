/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.16-MariaDB : Database - abtracks_server
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`abtracks_server` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `abtracks_server`;

/*Table structure for table `abtracks_admin` */

DROP TABLE IF EXISTS `abtracks_admin`;

CREATE TABLE `abtracks_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `abtracks_admin` */

insert  into `abtracks_admin`(`username`,`password`) values ('bogart','poe');

/*Table structure for table `abtracks_child_info` */

DROP TABLE IF EXISTS `abtracks_child_info`;

CREATE TABLE `abtracks_child_info` (
  `parent_id` int(4) DEFAULT NULL,
  `child_id` int(4) NOT NULL AUTO_INCREMENT,
  `child_nickname` varchar(20) NOT NULL,
  `device_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `abtracks_child_info` */

insert  into `abtracks_child_info`(`parent_id`,`child_id`,`child_nickname`,`device_id`) values (1000,1,'Test child',1),(1000,2,'Test child 2',2),(1001,3,'jayson',3);

/*Table structure for table `abtracks_hardware_info` */

DROP TABLE IF EXISTS `abtracks_hardware_info`;

CREATE TABLE `abtracks_hardware_info` (
  `device_id` int(4) NOT NULL AUTO_INCREMENT,
  `device_imei` bigint(15) NOT NULL,
  `device_number` bigint(10) NOT NULL,
  PRIMARY KEY (`device_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `abtracks_hardware_info` */

insert  into `abtracks_hardware_info`(`device_id`,`device_imei`,`device_number`) values (1,356940032033323,9286309939),(2,865904023313387,9557905102),(3,9161960060,9161960060);

/*Table structure for table `abtracks_parent_child_specification` */

DROP TABLE IF EXISTS `abtracks_parent_child_specification`;

CREATE TABLE `abtracks_parent_child_specification` (
  `user_id` int(4) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `parent_name` varchar(20) NOT NULL,
  `device_imei` bigint(15) NOT NULL,
  `child_id` int(4) NOT NULL,
  `child_nickname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `abtracks_parent_child_specification` */

insert  into `abtracks_parent_child_specification`(`user_id`,`user_username`,`parent_name`,`device_imei`,`child_id`,`child_nickname`) values (1000,'admin','Test Parent',356940032033323,1000,'Test Child'),(1000,'admin','Test Parent',865904023313387,1001,'Test Child 2');

/*Table structure for table `abtracks_parent_info` */

DROP TABLE IF EXISTS `abtracks_parent_info`;

CREATE TABLE `abtracks_parent_info` (
  `parent_id` int(4) NOT NULL AUTO_INCREMENT,
  `parent_name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=latin1;

/*Data for the table `abtracks_parent_info` */

insert  into `abtracks_parent_info`(`parent_id`,`parent_name`,`password`) values (1000,'Test Parent','parent'),(1001,'jayson','jayson');

/*Table structure for table `abtracks_user_account` */

DROP TABLE IF EXISTS `abtracks_user_account`;

CREATE TABLE `abtracks_user_account` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `parent_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=latin1;

/*Data for the table `abtracks_user_account` */

insert  into `abtracks_user_account`(`user_id`,`user_username`,`user_password`,`parent_id`) values (1000,'admin','password',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
