-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: freeads
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ads` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` VALUES (1,'BMW 2 Series',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642883951-0.jpg',5400,'USA',1,'2022-01-22 19:39:11','2022-01-22 19:39:11'),(2,'Cadillac CT5',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642884040-0.jpg',8700,'Italy',1,'2022-01-22 19:40:40','2022-01-22 19:40:40'),(3,'Chevrolet Corvette',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642884076-0.jpg',4500,'France',1,'2022-01-22 19:41:16','2022-01-22 19:41:16'),(4,'Genesis G80',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642884113-0.jpg',9400,'Belgium',1,'2022-01-22 19:41:53','2022-01-22 19:41:53'),(5,'Hyundai Accent',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642884146-0.jpg',2100,'Germany',1,'2022-01-22 19:42:26','2022-01-22 19:42:26'),(6,'Kia Forte',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642884196-0.jpg',17980,'Ghana',1,'2022-01-22 19:43:16','2022-01-22 19:43:16'),(7,'Kia Sedona',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642884241-0.jpg',6320,'Nigeria',1,'2022-01-22 19:44:01','2022-01-22 19:44:01'),(8,'Hyundai Santa Cruz',2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642885041-0.jpg',12750,'Spain',1,'2022-01-22 19:57:21','2022-01-22 19:57:21'),(9,'Ford Maverick',2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642885084-0.jpg',7210,'Benin',1,'2022-01-22 19:58:04','2022-01-22 19:58:04'),(10,'Honda Ridgeline',2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642885129-0.jpg',15230,'Bahamas',1,'2022-01-22 19:58:49','2022-01-22 19:58:49'),(11,'Jeep Gladiator',2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642885174-0.jpg',9875,'China',1,'2022-01-22 19:59:34','2022-01-22 19:59:34'),(12,'Toyota Tacoma',2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642885219-0.jpg',16900,'Brazil',1,'2022-01-22 20:00:19','2022-01-22 20:00:19'),(13,'Ford F-150',2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642885290-0.jpg',11300,'Columbia',1,'2022-01-22 20:01:30','2022-01-22 20:01:30'),(14,'GMC Sierra 1500',2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non lorem viverra, semper orci eget, convallis justo. Proin auctor nunc sed mollis commodo. Fusce blandit lacus at varius suscipit. Nulla commodo tortor urna, ultricies accumsan nulla convallis eget. Phasellus posuere erat eu tincidunt aliquam. Suspendisse blandit, justo at tristique sagittis, libero ligula ornare purus, vitae tempus enim leo ut neque. Donec faucibus sapien nibh, sed volutpat urna sollicitudin a.\r\n\r\nPraesent sollicitudin vel dui in cursus. Aliquam risus nisi, porttitor nec metus vitae, vestibulum porta justo. Fusce aliquam orci ut neque mattis consectetur. Aenean elit magna, aliquet eu commodo nec, maximus in mauris. Cras velit est, vulputate id efficitur a, fringilla eget velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin euismod libero odio, sed facilisis velit eleifend eu. Phasellus efficitur molestie odio vel tincidunt. In tempor nibh ligula, sed erat curae.','/images/prods/prod-1642885359-0.jpg',2000,'Czech Republic',1,'2022-01-22 20:02:39','2022-01-22 20:02:39');
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cats`
--

DROP TABLE IF EXISTS `cats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cats` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cats`
--

LOCK TABLES `cats` WRITE;
/*!40000 ALTER TABLE `cats` DISABLE KEYS */;
INSERT INTO `cats` VALUES (1,'Cars',NULL,'2022-01-22 19:38:29','2022-01-22 19:38:29'),(2,'Trucks',NULL,'2022-01-22 19:38:34','2022-01-22 19:38:34');
/*!40000 ALTER TABLE `cats` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_11_21_090102_create_ads_table',1),(6,'2021_11_25_113930_create_cats_table',1);
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_login_unique` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jefferson','jefferson.vodounnou@gmail.com','jeff','admin','+229 66548742','2022-01-22 19:37:58','$2y$10$G1XKwRRvcLIJBqDJZvC0w.AmS9rkrdjTaclc1yms3BQeuZqiUkHg6','/images/user-default.png',NULL,'2022-01-22 19:37:41','2022-01-22 19:37:58');
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

-- Dump completed on 2022-01-22 22:06:21
