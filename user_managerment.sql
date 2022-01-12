-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: qlsv
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `UserDB`
--

DROP TABLE IF EXISTS `UserDB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `UserDB` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserDB`
--

LOCK TABLES `UserDB` WRITE;
/*!40000 ALTER TABLE `UserDB` DISABLE KEYS */;
INSERT INTO `UserDB` VALUES (1,'1','anhhn@gmail.com','1234567890'),(2,'anhhn@gmail.com','anhhn@gmail.com','1234567890'),(3,'anhhn@gmail.com','','1234567890'),(4,'anhhn@gmail.com','','1234567890'),(5,'','anhhn@gmail.com','1234567890'),(6,'','anhhn@gmail.com','1234567890'),(7,'','anhhn@gmail.com','1234567890'),(8,'','anhhn@gmail.com','1234567890'),(9,'anhhn@gmail.com','anhhn@gmail.com','123456anhhn@gmail.com7890'),(10,'anhhn@gmail.com','anhhn@gmail.com','anhhn@gmail.com'),(11,'login_page.php','login_page.php','login_page.php'),(12,'voicoixinhgai271297@gmail.com','anhhn','anhhn'),(13,'voicoixinhgai271297@gmail.com','anhhn@gmail.com','http://localhost/task2');
/*!40000 ALTER TABLE `UserDB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserDB1`
--

DROP TABLE IF EXISTS `UserDB1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `UserDB1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserDB1`
--

LOCK TABLES `UserDB1` WRITE;
/*!40000 ALTER TABLE `UserDB1` DISABLE KEYS */;
INSERT INTO `UserDB1` VALUES (18,NULL,'form_data','form_data','voicoixinhgai271297@gmail.com','sasasas');
/*!40000 ALTER TABLE `UserDB1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-12 22:46:52
