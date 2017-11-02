-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: test
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2017_10_25_014237_create_users_table',1),(2,'2017_10_25_015044_create_province_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinces` (
  `sl` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES ('a.  ','Ontario'),('b.  ','Québec'),('c.  ','Nova Scotia'),('d.  ','New Brunswick'),('e.  ','Manitoba'),('f.  ','British Columbia'),('g.  ','Prince Edward Island'),('h.  ','Saskatchewan'),('i.  ','Alberta'),('j.  ','Newfoundland and Labrador'),('k.  ','Northwest Territories'),('l.  ','Yukon'),('m.  ','Nunavut');
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'aaqa','Québec','437-998-7462','M4C5L8','40 000','2017-10-25 06:05:49','2017-10-28 02:13:42',NULL),(2,'aaa','Québec','437-998-7462','M4C5L8','40 000','2017-10-25 06:06:12','2017-10-27 04:22:48','2017-10-27 04:22:48'),(3,'aaa','Nova Scotia','437-998-7462','M4C5L8','35,000.00','2017-10-26 06:41:18','2017-10-26 06:51:15',NULL),(4,'aaa','New Brunswick','437-998-7462','M4C5L8','20,000.00','2017-10-26 06:51:39','2017-10-26 06:51:39',NULL),(5,'aaa','Québec','437-998-7462','M4C5L8','25,000.00','2017-10-26 06:53:24','2017-11-02 02:34:23','2017-11-02 02:34:23'),(6,'aaa','Québec','437-998-7462','M4C5L8','55 000','2017-10-26 06:57:37','2017-10-26 07:42:09',NULL),(7,'bbb','Québec','437-998-7462','M4C 5L8','44 000','2017-10-27 03:08:06','2017-10-27 03:08:06',NULL),(8,'bbb','Québec','437-998-7462','M4C 5L8','44 000','2017-10-27 03:12:14','2017-10-27 03:12:14',NULL),(9,'bbb','Québec','437-998-7462','M4C 5L8','44 000','2017-10-27 03:13:08','2017-10-27 03:13:08',NULL),(10,'bbb','Québec','437-998-7462','M4C 5L8','44 000','2017-10-27 03:13:51','2017-10-27 03:13:51',NULL),(11,'ccczz','Ontario','437-998-7462','M4C5L8','20,000.00','2017-10-27 03:29:35','2017-10-27 05:53:13',NULL),(12,'ccc','Ontario','437-998-7462','M4C 5L8','20,000.00','2017-10-27 03:43:30','2017-11-02 02:50:14',NULL),(13,'ccc','Ontario','437-998-7462','M4C5L8','20,000.00','2017-10-27 03:44:16','2017-11-02 02:34:53','2017-11-02 02:34:53'),(14,'aac','Nova Scotia','437-998-7462','M4C5L8','48,000.00','2017-10-27 03:47:33','2017-10-27 03:48:04',NULL),(15,'abc','Ontario','437-998-7462','M4C5L8','49,000.00','2017-10-27 04:19:15','2017-10-27 04:23:02','2017-10-27 04:23:02'),(16,'ass','Ontario','437-998-7462','M4C5L8','30,000.00','2017-10-27 04:37:42','2017-10-27 04:37:42',NULL),(17,'aass','Ontario','437-998-7462','M4C5L8','40,000.00','2017-10-27 04:48:10','2017-10-27 04:48:10',NULL),(18,'aa','Ontario','437-998-7462','M4C5L8','40,000.00','2017-10-27 05:12:05','2017-10-27 05:12:05',NULL),(19,'aa','Ontario','437-998-7462','M4C5L8','40,000.00','2017-10-27 05:13:33','2017-10-27 05:13:33',NULL),(20,'sss','Ontario','437-998-7462','M4C5L8','40,000.00','2017-10-27 05:20:05','2017-10-27 05:20:05',NULL),(21,'sss','Ontario','437-998-7462','M4C5L8','40,000.00','2017-10-27 05:24:15','2017-10-27 05:24:15',NULL),(22,'ss','Ontario','437-998-7462','M4C5L8','40,000.00','2017-10-27 05:28:12','2017-10-27 05:28:12',NULL),(23,'ssf','Ontario','437-998-7462','M4C5L8','40,000.00','2017-10-27 05:34:09','2017-10-27 05:42:21',NULL),(24,'asd','New Brunswick','437-998-7462','M4C5L8','23,000.00','2017-10-27 05:41:41','2017-10-27 05:41:41',NULL),(25,'zzz','Québec','437-998-7462','M4C5L8','30,000.00','2017-10-27 05:47:07','2017-10-27 05:47:07',NULL),(26,'qqq','Québec','437-998-7462','M4C5L8','30,000.00','2017-10-27 05:51:48','2017-10-27 05:51:48',NULL),(27,'asz','Ontario','437-998-7462','M4C5L8','60,000.00','2017-10-27 05:53:41','2017-10-27 05:53:41',NULL),(28,'xyz','Ontario','437-998-7462','M4C5L8','30,000.00','2017-10-28 02:14:08','2017-11-02 02:50:31','2017-11-02 02:50:31'),(29,'bb1','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-11-02 02:50:45','2017-11-02 02:50:45'),(30,'bb2','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(31,'bb3','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(32,'bb4','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(33,'bb5','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(34,'bb6','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(35,'cc1','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(36,'cc2','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(37,'cc3','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(38,'cc4','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(39,'cc5','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(40,'cc9','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(41,'cc11','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(42,'dd1','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(43,'dd2','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(44,'dd3','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(45,'dd4','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(46,'dd5','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(47,'dd6','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(48,'dd7','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(49,'dd8','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(50,'dd9','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(51,'dd10','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(52,'dd11','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(53,'ee1','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(54,'ee2','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(55,'ee3','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(56,'ee4','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(57,'ee5','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(58,'ee6','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(59,'ee7','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(60,'ee8','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(61,'ee9','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(62,'ee10','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(63,'ee11','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(64,'ff1','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(65,'ff2','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(66,'ff3','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(67,'ff4','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(68,'ff5','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(69,'ff6','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(70,'ff7','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(71,'ff8','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(72,'ff9','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(73,'ff10','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(74,'ff11','Nova Scotia','123-456-7890','M4C5L8','30,000.00','2017-10-16 00:51:31','2017-10-16 00:51:31',NULL),(75,'mno','New Brunswick','437-998-7462','M4C5L8','40,000.00','2017-11-02 02:33:30','2017-11-02 02:33:30',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-01 19:24:43
