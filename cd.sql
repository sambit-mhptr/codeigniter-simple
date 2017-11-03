/*
SQLyog Community v12.4.3 (32 bit)
MySQL - 5.6.12-log : Database - codeigniter_test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`codeigniter_test` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `codeigniter_test`;

/*Table structure for table `mo_content` */

DROP TABLE IF EXISTS `mo_content`;

CREATE TABLE `mo_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(300) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `mo_content` */

insert  into `mo_content`(`id`,`title`,`description`) values 
(10,'shiridi sai','qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(11,'shiridi','qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(12,'shiridi sai','qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(13,'shiridi sai','qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq');

/*Table structure for table `mo_registration` */

DROP TABLE IF EXISTS `mo_registration`;

CREATE TABLE `mo_registration` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `mo_registration` */

insert  into `mo_registration`(`id`,`email`,`password`,`date_added`,`full_name`,`phone`) values 
(1,'sambit@gmail.com','Sambit@1','2017-11-03 02:41:04',NULL,NULL),
(2,'sambit@gmail.com','acd18b55e0fbe4ef1c406cdd66d1c50e','2017-11-03 02:45:39',NULL,NULL),
(3,'sambit@gmail.com','acd18b55e0fbe4ef1c406cdd66d1c50e','2017-11-03 02:51:04',NULL,NULL),
(4,'sambit@gmail.com','acd18b55e0fbe4ef1c406cdd66d1c50e','2017-11-03 03:19:34',NULL,NULL),
(5,'sambit@gmail.com','acd18b55e0fbe4ef1c406cdd66d1c50e','2017-11-03 03:19:41',NULL,NULL),
(6,'sambit@gmail.com','acd18b55e0fbe4ef1c406cdd66d1c50e','2017-11-03 03:19:52',NULL,NULL),
(7,'sambit.m@gmail.com','acd18b55e0fbe4ef1c406cdd66d1c50e','2017-11-03 03:27:05',NULL,NULL),
(8,'sambit.mm@gmail.com','acd18b55e0fbe4ef1c406cdd66d1c50e','2017-11-03 04:10:27',NULL,NULL),
(9,'sambit.mhptr22@gmail.com','acd18b55e0fbe4ef1c406cdd66d1c50e','2017-11-03 04:51:02',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
