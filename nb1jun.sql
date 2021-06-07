-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: nearby
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `enquiries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travelling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pid` bigint DEFAULT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check-in` date DEFAULT NULL,
  `check-out` date DEFAULT NULL,
  `price` double DEFAULT NULL,
  `adults` bigint DEFAULT NULL,
  `child` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiries`
--

LOCK TABLES `enquiries` WRITE;
/*!40000 ALTER TABLE `enquiries` DISABLE KEYS */;
INSERT INTO `enquiries` VALUES (1,'Sumeet Balwade','0123456789','balwadesr@gmail.com','Friends',20,'Sky Blue','2021-05-15','2021-05-17',2999,2,1,'2021-05-15 03:37:04','2021-05-15 03:37:04');
/*!40000 ALTER TABLE `enquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (19,'vertical','vertical-162073800638.jpg','2021-05-11 07:30:06','2021-05-11 07:30:06'),(20,'vertical','vertical-162073801410.jpg','2021-05-11 07:30:14','2021-05-11 07:30:14'),(21,'horizontal','horizontal-162073812880.jpg','2021-05-11 07:32:08','2021-05-11 07:32:08'),(22,'horizontal','horizontal-162073813649.jpg','2021-05-11 07:32:16','2021-05-11 07:32:16'),(23,'horizontal','horizontal-162073814091.jpg','2021-05-11 07:32:20','2021-05-11 07:32:20'),(24,'horizontal','horizontal-162073814561.jpg','2021-05-11 07:32:25','2021-05-11 07:32:25'),(25,'horizontal','horizontal-162073814917.jpg','2021-05-11 07:32:29','2021-05-11 07:32:29'),(26,'horizontal','horizontal-162073815327.jpg','2021-05-11 07:32:33','2021-05-11 07:32:33');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pno` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (13,1,'slider-16206453208.jpg','2021-05-10 05:45:20','2021-05-10 05:45:20'),(14,1,'slider-162064532054.jpg','2021-05-10 05:45:20','2021-05-10 05:45:20'),(15,1,'thumbnail-162064532016.jpg','2021-05-10 05:45:20','2021-05-10 05:45:20'),(16,1,'ipi1-162064532050.jpg','2021-05-10 05:45:20','2021-05-10 05:45:20'),(17,1,'ipi2-162064532064.jpg','2021-05-10 05:45:20','2021-05-10 05:45:20'),(18,1,'ipi3-162064532076.jpg','2021-05-10 05:45:20','2021-05-10 05:45:20'),(19,10,'slider-162064601012.jpg','2021-05-10 05:56:50','2021-05-10 05:56:50'),(20,10,'slider-162064601051.jpg','2021-05-10 05:56:50','2021-05-10 05:56:50'),(21,10,'thumbnail-162064601029.jpg','2021-05-10 05:56:50','2021-05-10 05:56:50'),(22,10,'ipi1-16206460109.jpg','2021-05-10 05:56:50','2021-05-10 05:56:50'),(23,10,'ipi2-162064601096.jpg','2021-05-10 05:56:50','2021-05-10 05:56:50'),(24,10,'ipi3-162064601072.jpg','2021-05-10 05:56:50','2021-05-10 05:56:50'),(25,12,'slider-162064647671.jpg','2021-05-10 06:04:36','2021-05-10 06:04:36'),(26,12,'thumbnail-16206464765.jpg','2021-05-10 06:04:36','2021-05-10 06:04:36'),(27,12,'ipi1-162064647622.jpg','2021-05-10 06:04:36','2021-05-10 06:04:36'),(28,12,'ipi2-162064647653.jpg','2021-05-10 06:04:36','2021-05-10 06:04:36'),(29,12,'ipi3-162064647627.jpg','2021-05-10 06:04:36','2021-05-10 06:04:36'),(30,13,'slider-162064942357.jpg','2021-05-10 06:53:43','2021-05-10 06:53:43'),(31,13,'slider-162064942355.jpg','2021-05-10 06:53:43','2021-05-10 06:53:43'),(32,13,'slider-162064942389.jpg','2021-05-10 06:53:43','2021-05-10 06:53:43'),(33,13,'slider-162064942384.jpg','2021-05-10 06:53:43','2021-05-10 06:53:43'),(37,13,'ipi2-162064942357.jpg','2021-05-10 06:53:43','2021-05-10 06:53:43'),(38,13,'ipi3-162064942320.jpg','2021-05-10 06:53:43','2021-05-10 06:53:43'),(39,14,'slider-162065524410.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(40,14,'slider-162065524413.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(41,14,'slider-162065524444.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(42,14,'slider-162065524463.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(43,14,'slider-162065524427.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(44,14,'slider-162065524415.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(45,14,'thumbnail-162065524497.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(46,14,'ipi1-162065524491.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(47,14,'ipi2-162065524477.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(48,14,'ipi3-162065524433.jpg','2021-05-10 08:30:44','2021-05-10 08:30:44'),(49,15,'slider-162065540118.jpg','2021-05-10 08:33:21','2021-05-10 08:33:21'),(50,15,'slider-162065540156.jpg','2021-05-10 08:33:21','2021-05-10 08:33:21'),(51,15,'slider-162065540120.jpg','2021-05-10 08:33:21','2021-05-10 08:33:21'),(52,15,'slider-16206554018.jpg','2021-05-10 08:33:21','2021-05-10 08:33:21'),(53,15,'thumbnail-162065540168.jpg','2021-05-10 08:33:21','2021-05-10 08:33:21'),(54,15,'ipi1-162065540126.jpg','2021-05-10 08:33:21','2021-05-10 08:33:21'),(55,15,'ipi2-162065540162.jpg','2021-05-10 08:33:21','2021-05-10 08:33:21'),(56,15,'ipi3-162065540133.jpg','2021-05-10 08:33:21','2021-05-10 08:33:21'),(57,16,'slider-162065564682.jpg','2021-05-10 08:37:26','2021-05-10 08:37:26'),(58,16,'slider-162065564658.jpg','2021-05-10 08:37:26','2021-05-10 08:37:26'),(59,16,'slider-162065564678.jpg','2021-05-10 08:37:26','2021-05-10 08:37:26'),(60,16,'slider-16206556469.jpg','2021-05-10 08:37:26','2021-05-10 08:37:26'),(61,16,'thumbnail-162065564649.jpg','2021-05-10 08:37:26','2021-05-10 08:37:26'),(62,16,'ipi1-162065564631.jpg','2021-05-10 08:37:26','2021-05-10 08:37:26'),(63,16,'ipi2-162065564641.jpg','2021-05-10 08:37:26','2021-05-10 08:37:26'),(64,16,'ipi3-162065564667.jpg','2021-05-10 08:37:26','2021-05-10 08:37:26'),(65,17,'slider-162065584386.jpg','2021-05-10 08:40:43','2021-05-10 08:40:43'),(66,17,'slider-162065584312.jpg','2021-05-10 08:40:43','2021-05-10 08:40:43'),(67,17,'slider-162065584359.jpg','2021-05-10 08:40:43','2021-05-10 08:40:43'),(68,17,'slider-162065584359.jpg','2021-05-10 08:40:43','2021-05-10 08:40:43'),(69,17,'thumbnail-16206558431.jpg','2021-05-10 08:40:43','2021-05-10 08:40:43'),(70,17,'ipi1-162065584420.jpg','2021-05-10 08:40:44','2021-05-10 08:40:44'),(71,17,'ipi2-162065584435.jpg','2021-05-10 08:40:44','2021-05-10 08:40:44'),(72,17,'ipi3-162065584432.jpg','2021-05-10 08:40:44','2021-05-10 08:40:44'),(86,13,'thumbnail-16207086048.jpg','2021-05-10 23:20:04','2021-05-10 23:20:04'),(89,13,'ipi1-162071020731.jpg','2021-05-10 23:46:47','2021-05-10 23:46:47'),(90,13,'ipi1-162071063128.jpg','2021-05-10 23:53:51','2021-05-10 23:53:51'),(91,13,'slider-16207114165.jpg','2021-05-11 00:06:56','2021-05-11 00:06:56'),(92,20,'slider-162090224950.jpg','2021-05-13 05:07:29','2021-05-13 05:07:29'),(93,20,'slider-162090224919.jpg','2021-05-13 05:07:29','2021-05-13 05:07:29'),(94,20,'slider-162090224962.jpg','2021-05-13 05:07:29','2021-05-13 05:07:29'),(95,20,'slider-162090224927.jpg','2021-05-13 05:07:29','2021-05-13 05:07:29'),(96,20,'slider-162090224914.jpg','2021-05-13 05:07:29','2021-05-13 05:07:29'),(97,20,'thumbnail-162090224910.jpg','2021-05-13 05:07:29','2021-05-13 05:07:29'),(98,20,'ipi1-16209022495.jpg','2021-05-13 05:07:29','2021-05-13 05:07:29'),(99,20,'ipi2-16209022499.jpg','2021-05-13 05:07:29','2021-05-13 05:07:29'),(100,20,'ipi3-162090224973.jpg','2021-05-13 05:07:29','2021-05-13 05:07:29'),(101,21,'slider-162090236935.jpg','2021-05-13 05:09:29','2021-05-13 05:09:29'),(102,21,'slider-162090236914.jpg','2021-05-13 05:09:29','2021-05-13 05:09:29'),(103,21,'slider-162090236987.jpg','2021-05-13 05:09:29','2021-05-13 05:09:29'),(104,21,'slider-162090236987.jpg','2021-05-13 05:09:29','2021-05-13 05:09:29'),(105,21,'slider-162090236963.jpg','2021-05-13 05:09:29','2021-05-13 05:09:29'),(107,21,'thumbnail-162090236962.jpg','2021-05-13 05:09:29','2021-05-13 05:09:29'),(108,21,'ipi1-162090236932.jpg','2021-05-13 05:09:29','2021-05-13 05:09:29'),(109,21,'ipi2-162090236937.jpg','2021-05-13 05:09:29','2021-05-13 05:09:29'),(110,21,'ipi3-162090236972.jpg','2021-05-13 05:09:29','2021-05-13 05:09:29'),(111,22,'slider-162090260199.jpg','2021-05-13 05:13:21','2021-05-13 05:13:21'),(112,22,'slider-162090260111.jpg','2021-05-13 05:13:21','2021-05-13 05:13:21'),(113,22,'slider-162090260198.jpg','2021-05-13 05:13:21','2021-05-13 05:13:21'),(114,22,'slider-162090260189.jpg','2021-05-13 05:13:21','2021-05-13 05:13:21'),(115,22,'thumbnail-162090260190.jpg','2021-05-13 05:13:21','2021-05-13 05:13:21'),(116,22,'ipi1-16209026017.jpg','2021-05-13 05:13:21','2021-05-13 05:13:21'),(117,22,'ipi2-162090260148.jpg','2021-05-13 05:13:21','2021-05-13 05:13:21'),(118,22,'ipi3-162090260151.jpg','2021-05-13 05:13:21','2021-05-13 05:13:21'),(119,23,'slider-162090701831.jpg','2021-05-13 06:26:58','2021-05-13 06:26:58'),(120,23,'slider-162090701847.jpg','2021-05-13 06:26:58','2021-05-13 06:26:58'),(121,23,'slider-1620907018100.jpg','2021-05-13 06:26:58','2021-05-13 06:26:58'),(122,23,'slider-162090701844.jpg','2021-05-13 06:26:58','2021-05-13 06:26:58'),(123,23,'thumbnail-162090701889.jpg','2021-05-13 06:26:58','2021-05-13 06:26:58'),(124,23,'ipi1-162090701818.jpg','2021-05-13 06:26:58','2021-05-13 06:26:58'),(125,23,'ipi2-162090701876.jpg','2021-05-13 06:26:58','2021-05-13 06:26:58'),(126,23,'ipi3-162090701890.jpg','2021-05-13 06:26:58','2021-05-13 06:26:58');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_05_02_050821_create_sessions_table',1),(7,'2021_05_02_121749_create_properties_table',1),(8,'2021_05_10_084216_create_images_table',2),(9,'2021_05_11_072732_create_galleries_table',3),(10,'2021_05_15_082801_create_enquiries_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nob` int DEFAULT '0',
  `gc` int DEFAULT '0',
  `price` double(8,2) NOT NULL,
  `ratings` int DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `television` tinyint(1) NOT NULL DEFAULT '0',
  `wifi` tinyint(1) NOT NULL DEFAULT '0',
  `air-conditioner` tinyint(1) NOT NULL DEFAULT '0',
  `free-breakfast` tinyint(1) NOT NULL DEFAULT '0',
  `free-cancellation` tinyint(1) NOT NULL DEFAULT '0',
  `ensuite-bathroom` tinyint(1) NOT NULL DEFAULT '0',
  `swimming-pool` tinyint(1) NOT NULL DEFAULT '0',
  `lawn` tinyint(1) NOT NULL DEFAULT '0',
  `valley-view` tinyint(1) NOT NULL DEFAULT '0',
  `lake-view` tinyint(1) NOT NULL DEFAULT '0',
  `pets-allowed` tinyint(1) NOT NULL DEFAULT '0',
  `alcohol-allowed` tinyint(1) NOT NULL DEFAULT '0',
  `bonfire` tinyint(1) NOT NULL DEFAULT '0',
  `parking` tinyint(1) NOT NULL DEFAULT '0',
  `genset` tinyint(1) NOT NULL DEFAULT '0',
  `towels-and-toiletries` tinyint(1) NOT NULL DEFAULT '0',
  `inverter` tinyint(1) NOT NULL DEFAULT '0',
  `bedroom-and-laundry` tinyint(1) NOT NULL DEFAULT '0',
  `essentials` tinyint(1) NOT NULL DEFAULT '0',
  `towels` tinyint(1) NOT NULL DEFAULT '0',
  `bed-sheets` tinyint(1) NOT NULL DEFAULT '0',
  `soap-and-toilet-paper` tinyint(1) NOT NULL DEFAULT '0',
  `hanger` tinyint(1) NOT NULL DEFAULT '0',
  `CCTV-cameras` tinyint(1) NOT NULL DEFAULT '0',
  `first-aid-kit` tinyint(1) NOT NULL DEFAULT '0',
  `fire-extinguisher` tinyint(1) NOT NULL DEFAULT '0',
  `kitchen` tinyint(1) NOT NULL DEFAULT '0',
  `microwave` tinyint(1) NOT NULL DEFAULT '0',
  `refrigerator` tinyint(1) NOT NULL DEFAULT '0',
  `dishes-and-silverware` tinyint(1) NOT NULL DEFAULT '0',
  `space-where-guests-can-cook-their-own-meals` tinyint(1) NOT NULL DEFAULT '0',
  `bc` tinyint(1) NOT NULL DEFAULT '0',
  `fg` tinyint(1) NOT NULL DEFAULT '0',
  `ce` tinyint(1) NOT NULL DEFAULT '0',
  `ac` tinyint(1) NOT NULL DEFAULT '0',
  `cp` tinyint(1) NOT NULL DEFAULT '0',
  `ws` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (13,'HomeStay','Pune','Mantra','lane no 4','California','Tennessee',1,2,1350.20,3,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets',1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1,0,1,0,'2021-05-10 06:51:32','2021-05-11 00:16:07'),(20,'Resort','Lonavala','Sky Blue','SUKHWANI PALM WING-H,','California','Delaware',1,2,2999.00,5,'sumeet balwade',1,0,0,0,0,0,0,0,0,1,0,0,0,0,1,1,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,1,0,1,0,'2021-05-13 05:06:56','2021-05-13 05:11:04'),(21,'Cottage','Pune','Winter Stay','f 302 Mapple Woodz , Wagholi','Delaware','Texas',2,6,3336.20,3,'dustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including ver',1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,1,0,1,0,1,0,'2021-05-13 05:09:02','2021-05-13 05:10:08'),(22,'Bungalow','Lonavala','Royal Heritage','Neo City phase 1 Bhakori Road wagholi pune','Tennessee','Delaware',4,8,9899.00,4,'Ter 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the',1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1,0,0,0,0,1,0,0,0,0,0,1,1,1,0,0,'2021-05-13 05:12:47','2021-05-13 05:12:47'),(23,'Resort','Pune','High Sight','lane no 4','Delaware','Delaware',3,4,3633.21,3,'the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more r',1,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,1,0,0,0,1,0,0,0,0,0,1,0,0,1,'2021-05-13 06:26:31','2021-05-13 06:27:13');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('g5XA2v7DW0ZFBzdLATUAhlDLBLFASmq0sfVmo5oD',1,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36','YTo4OntzOjY6Il90b2tlbiI7czo0MDoiU1hHQUVJUzc0Y0N1UUExSVNCbDBaWlFvMHlxRnQ2dnNkOGJsN25VMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkamluLkE5dHdrbndBcE1xWUE3cVI3ZW5ycVEybldzbDJyMTkvOElVclpjRTQ1bHJxMFY5NGkiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGppbi5BOXR3a253QXBNcVlBN3FSN2VucnFRMm5Xc2wycjE5LzhJVXJaY0U0NWxycTBWOTRpIjtzOjU6InNkYXRhIjthOjY6e3M6ODoibG9jYXRpb24iO3M6ODoiTG9uYXZhbGEiO3M6ODoiY2hlY2staW4iO3M6MTA6IjIxLTA1LTIwMjEiO3M6OToiY2hlY2stb3V0IjtzOjEwOiIyNS0wNS0yMDIxIjtzOjU6ImFkdWx0IjtzOjE6IjIiO3M6NToiY2hpbGQiO3M6MToiMCI7czo1OiJkZGF0ZSI7aTo0O319',1621584946),('VZCtEgaXqjpqaStemveMxPUq9UVGHuUSzFzBHvcW',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGFITHF3bG5TNmFkd2JISE4yQmljSzJBbEtEdzJwSENlQzN2Z05jeiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=',1621771382);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sumeet Balwade','balwadesr@gmail.com',NULL,'$2y$10$jin.A9twknwApMqYA7qR7enrqQ2nWsl2r19/8IUrZcE45lrq0V94i',NULL,NULL,NULL,NULL,NULL,'2021-05-09 00:08:56','2021-05-09 00:08:56');
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

-- Dump completed on 2021-06-01  9:59:19
