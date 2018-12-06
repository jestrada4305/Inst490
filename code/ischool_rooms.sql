-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: ischool_rooms
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buildings` (
  `building_id` int(11) NOT NULL AUTO_INCREMENT,
  `building_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`building_id`),
  UNIQUE KEY `building_id_UNIQUE` (`building_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buildings`
--

LOCK TABLES `buildings` WRITE;
/*!40000 ALTER TABLE `buildings` DISABLE KEYS */;
INSERT INTO `buildings` VALUES (3,'Patuxent'),(4,'Hornbake');
/*!40000 ALTER TABLE `buildings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `room_number` int(11) DEFAULT NULL,
  `building_id` int(11) DEFAULT NULL,
  `sq_footage` text,
  `floor_level` int(11) DEFAULT NULL,
  `has_windows` text,
  `has_carpet` text,
  `has_lock` text,
  `occupied` text,
  `usage` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1101,1,'',1,'','','','',''),(1103,1,'',1,'','','','',''),(1105,1,'',1,'','','','',''),(1109,1,'',1,'','','','',''),(1115,1,'',1,'0','1','1','',''),(1116,1,'',1,'1','1','1','',''),(1117,1,'',1,'0','1','1','',''),(1118,1,'',1,'1','1','1','',''),(1120,1,'',1,'0','1','1','',''),(1122,1,'',1,'1','1','1','',''),(1124,1,'',1,'1','1','1','',''),(1199,1,'',1,'0','0','0','',''),(1109,1,'',1,'1','1','1','',''),(1117,1,'',1,'1','1','1','',''),(2101,1,'',2,'0','0','0','',''),(2102,1,'',2,'0','0','1','',''),(2103,1,'',2,'0','0','1','',''),(2105,1,'',2,'0','0','0','',''),(2106,1,'',2,'0','1','1','',''),(2108,1,'',2,'0','1','0','',''),(2109,1,'',2,'0','0','0','',''),(2110,1,'',2,'1','1','1','',''),(2112,1,'',2,'1','1','1','',''),(2114,1,'',2,'1','1','1','',''),(2116,1,'',2,'1','1','1','',''),(2118,1,'',2,'1','1','1','',''),(2194,1,'',2,'1','','','',''),(2195,1,'',2,'1','','','',''),(2196,1,'',2,'0','','','',''),(2197,1,'',2,'1','0','0','',''),(2198,1,'',2,'1','0','0','',''),(2199,1,'',2,'0','0','0','',''),(2106,1,'',2,'1','','1','',''),(2109,1,'',2,'1','1','1','',''),(2102,2,'',2,'0','0','0','',''),(2104,2,'',2,'0','0','0','',''),(2105,2,'',2,'1','1','1','',''),(2106,2,'',2,'0','1','1','',''),(2108,2,'',2,'0','1','1','',''),(2115,2,'',2,'0','0','0','',''),(2116,2,'',2,'1','1','1','',''),(2117,2,'',2,'0','1','0','',''),(2118,2,'',2,'0','1','0','',''),(2119,2,'',2,'0','1','0','',''),(2120,2,'',2,'0','1','1','',''),(2122,2,'',2,'0','1','1','',''),(2123,2,'',2,'0','1','0','',''),(2124,2,'',2,'0','1','1','',''),(2126,2,'',2,'0','1','1','',''),(2194,2,'',2,'0','1','0','',''),(2195,2,'',2,'0','1','0','',''),(2196,2,'',2,'0','1','0','',''),(2198,2,'',2,'0','1','0','',''),(2199,2,'',2,'0','1','0','',''),(2200,2,'',2,'0','1','0','',''),(2204,2,'',2,'0','1','1','',''),(2206,2,'',2,'0','1','1','',''),(2207,2,'',2,'0','1','1','',''),(2208,2,'',2,'0','1','0','',''),(2209,2,'',2,'0','1','1','',''),(2210,2,'',2,'0','1','1','',''),(2212,2,'',2,'0','1','1','',''),(2214,2,'',2,'0','0','1','',''),(2215,2,'',2,'0','1','1','',''),(2216,2,'',2,'0','1','1','',''),(2291,2,'',2,'0','0','0','',''),(2293,2,'',2,'0','1','0','',''),(2295,2,'',2,'0','0','0','',''),(2297,2,'',2,'0','0','0','',''),(2298,2,'',2,'0','0','0','',''),(2299,2,'',2,'0','0','0','',''),(2117,2,'',2,'1','1','1','',''),(2118,2,'',2,'0','1','1','',''),(2208,2,'',2,'0','1','1','',''),(2210,2,'',2,'0','1','0','','');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-05 22:52:40
