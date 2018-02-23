-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: employee
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `employee`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `employee` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;

USE `employee`;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tokenId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isOnline` tinyint(1) NOT NULL DEFAULT '0',
  `salary` decimal(8,2) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'574daa379545e9af101c2731',1,1191.57,63,'developer','Foley Day','male','foleyday@fanfare.com','+0511 (895) 577-2157','850 Clara Street, Westmoreland, Kansas, 6963','a:5:{i:0;a:1:{s:5:\"skill\";s:6:\"Python\";}i:1;a:1:{s:5:\"skill\";s:3:\"CSS\";}i:2;a:1:{s:5:\"skill\";s:2:\"C#\";}i:3;a:1:{s:5:\"skill\";s:2:\"JS\";}i:4;a:1:{s:5:\"skill\";s:4:\"Lisp\";}}',NULL,NULL),(2,'574daa378cb97f935a5c8e2e',1,1314.06,21,'developer','Chasity Carver','female','chasitycarver@fanfare.com','+0511 (833) 412-3736','218 Bulwer Place, Maybell, Utah, 4847','a:5:{i:0;a:1:{s:5:\"skill\";s:2:\"C#\";}i:1;a:1:{s:5:\"skill\";s:5:\"VBNet\";}i:2;a:1:{s:5:\"skill\";s:5:\"NoSQL\";}i:3;a:1:{s:5:\"skill\";s:4:\"Java\";}i:4;a:1:{s:5:\"skill\";s:5:\"React\";}}',NULL,NULL),(3,'574daa3735fce3f5e9b0bdd9',1,2046.78,51,'developer','Dean Ramirez','male','deanramirez@fanfare.com','+0511 (894) 463-3263','184 Bleecker Street, Hannasville, Connecticut, 4908','a:5:{i:0;a:1:{s:5:\"skill\";s:4:\"Ruby\";}i:1;a:1:{s:5:\"skill\";s:2:\"JS\";}i:2;a:1:{s:5:\"skill\";s:5:\"NoSQL\";}i:3;a:1:{s:5:\"skill\";s:4:\"HTML\";}i:4;a:1:{s:5:\"skill\";s:2:\"C#\";}}',NULL,NULL),(4,'574daa370866cd66710f5519',0,1393.47,22,'developer','Greta Mcfadden','female','gretamcfadden@fanfare.com','+0511 (917) 441-3834','497 Milford Street, Grimsley, Alaska, 9648','a:5:{i:0;a:1:{s:5:\"skill\";s:2:\"C#\";}i:1;a:1:{s:5:\"skill\";s:4:\"Ruby\";}i:2;a:1:{s:5:\"skill\";s:3:\"PHP\";}i:3;a:1:{s:5:\"skill\";s:2:\"JS\";}i:4;a:1:{s:5:\"skill\";s:7:\"Laravel\";}}',NULL,NULL),(5,'574daa37114b923fcb959533',1,1788.16,70,'developer','Bradley Kirk','male','bradleykirk@fanfare.com','+0511 (971) 547-3430','781 Randolph Street, Eagleville, Wisconsin, 3923','a:5:{i:0;a:1:{s:5:\"skill\";s:5:\"NoSQL\";}i:1;a:1:{s:5:\"skill\";s:6:\"Python\";}i:2;a:1:{s:5:\"skill\";s:3:\"PHP\";}i:3;a:1:{s:5:\"skill\";s:2:\"JS\";}i:4;a:1:{s:5:\"skill\";s:3:\"CSS\";}}',NULL,NULL),(6,'574daa37bc4712260e3415d5',0,3848.90,65,'developer','Alfreda Ortiz','female','alfredaortiz@fanfare.com','+0511 (874) 515-3829','921 Rutledge Street, Hampstead, Northern Mariana Islands, 9259','a:5:{i:0;a:1:{s:5:\"skill\";s:4:\"Java\";}i:1;a:1:{s:5:\"skill\";s:2:\"JS\";}i:2;a:1:{s:5:\"skill\";s:3:\"PHP\";}i:3;a:1:{s:5:\"skill\";s:4:\"Ruby\";}i:4;a:1:{s:5:\"skill\";s:2:\"JS\";}}',NULL,NULL),(7,'574daa37b6b60c495de67280',1,1282.14,50,'developer','Mckee Summers','male','mckeesummers@fanfare.com','+0511 (873) 578-3997','733 Everett Avenue, Centerville, Colorado, 6706','a:5:{i:0;a:1:{s:5:\"skill\";s:4:\"Lisp\";}i:1;a:1:{s:5:\"skill\";s:6:\"Python\";}i:2;a:1:{s:5:\"skill\";s:4:\"Zend\";}i:3;a:1:{s:5:\"skill\";s:4:\"Java\";}i:4;a:1:{s:5:\"skill\";s:5:\"RLang\";}}',NULL,NULL),(8,'574daa37d0ef76e417a4571b',1,1495.46,51,'developer','Joseph Calhoun','male','josephcalhoun@fanfare.com','+0511 (886) 493-3295','129 Tompkins Place, Succasunna, South Dakota, 603','a:5:{i:0;a:1:{s:5:\"skill\";s:3:\"PHP\";}i:1;a:1:{s:5:\"skill\";s:4:\"HTML\";}i:2;a:1:{s:5:\"skill\";s:3:\"SQL\";}i:3;a:1:{s:5:\"skill\";s:5:\"React\";}i:4;a:1:{s:5:\"skill\";s:2:\"C#\";}}',NULL,NULL),(9,'574daa3788291a030a564e54',0,3872.94,42,'developer','Hayes Macias','male','hayesmacias@fanfare.com','+0511 (815) 442-3884','883 Pine Street, Zortman, Maryland, 9701','a:5:{i:0;a:1:{s:5:\"skill\";s:4:\"Java\";}i:1;a:1:{s:5:\"skill\";s:2:\"C#\";}i:2;a:1:{s:5:\"skill\";s:5:\"NoSQL\";}i:3;a:1:{s:5:\"skill\";s:4:\"Lisp\";}i:4;a:1:{s:5:\"skill\";s:6:\"Python\";}}',NULL,NULL),(10,'574daa37c0e6294de5987cb5',1,2893.52,27,'developer','Regina Berg','female','reginaberg@fanfare.com','+0511 (843) 417-2788','674 Claver Place, Dennard, Pennsylvania, 3998','a:5:{i:0;a:1:{s:5:\"skill\";s:4:\"Java\";}i:1;a:1:{s:5:\"skill\";s:3:\"PHP\";}i:2;a:1:{s:5:\"skill\";s:2:\"C#\";}i:3;a:1:{s:5:\"skill\";s:6:\"Python\";}i:4;a:1:{s:5:\"skill\";s:4:\"Perl\";}}',NULL,NULL),(11,'574daa37c66e1e38eb4e05c2',1,2374.26,43,'developer','Miranda Gross','female','mirandagross@fanfare.com','+0511 (986) 446-2789','727 Pooles Lane, Boomer, Marshall Islands, 6052','a:5:{i:0;a:1:{s:5:\"skill\";s:6:\"Python\";}i:1;a:1:{s:5:\"skill\";s:5:\"HTML5\";}i:2;a:1:{s:5:\"skill\";s:3:\"PHP\";}i:3;a:1:{s:5:\"skill\";s:4:\"Lisp\";}i:4;a:1:{s:5:\"skill\";s:4:\"Perl\";}}',NULL,NULL),(12,'574daa374124bc8ac066e65e',0,2787.84,43,'developer','Casey Lang','male','caseylang@fanfare.com','+0511 (839) 417-3910','165 Tabor Court, Kidder, Louisiana, 1670','a:5:{i:0;a:1:{s:5:\"skill\";s:3:\"SQL\";}i:1;a:1:{s:5:\"skill\";s:4:\"Java\";}i:2;a:1:{s:5:\"skill\";s:4:\"Lisp\";}i:3;a:1:{s:5:\"skill\";s:3:\"AWS\";}i:4;a:1:{s:5:\"skill\";s:3:\"DTS\";}}',NULL,NULL),(13,'574daa3731aafea412b01231',1,3485.72,23,'developer','Brandy Everett','female','brandyeverett@fanfare.com','+0511 (910) 414-2740','895 Union Avenue, Catharine, Indiana, 3975','a:5:{i:0;a:1:{s:5:\"skill\";s:2:\"JS\";}i:1;a:1:{s:5:\"skill\";s:4:\"Java\";}i:2;a:1:{s:5:\"skill\";s:6:\"Python\";}i:3;a:1:{s:5:\"skill\";s:2:\"GO\";}i:4;a:1:{s:5:\"skill\";s:3:\"SQL\";}}',NULL,NULL);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_02_22_082408_create_tickets_table',1),(4,'2018_02_22_183226_create_employees_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-21  02:02:50
