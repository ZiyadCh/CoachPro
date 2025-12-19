-- MySQL dump 10.13  Distrib 8.4.7, for Linux (x86_64)
--
-- Host: localhost    Database: coachpro
-- ------------------------------------------------------
-- Server version	8.4.7-0ubuntu0.25.04.2

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
-- Table structure for table `Avis`
--

DROP TABLE IF EXISTS `Avis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Avis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `coach_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `coach_id` (`coach_id`),
  CONSTRAINT `Avis_ibfk_1` FOREIGN KEY (`coach_id`) REFERENCES `coach` (`id`),
  CONSTRAINT `Avis_ibfk_2` FOREIGN KEY (`id`) REFERENCES `sportif` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Avis`
--

LOCK TABLES `Avis` WRITE;
/*!40000 ALTER TABLE `Avis` DISABLE KEYS */;
/*!40000 ALTER TABLE `Avis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Disponibilite`
--

DROP TABLE IF EXISTS `Disponibilite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Disponibilite` (
  `id_dis` int NOT NULL AUTO_INCREMENT,
  `deb_seance` time DEFAULT NULL,
  `fin_seance` time DEFAULT NULL,
  PRIMARY KEY (`id_dis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Disponibilite`
--

LOCK TABLES `Disponibilite` WRITE;
/*!40000 ALTER TABLE `Disponibilite` DISABLE KEYS */;
/*!40000 ALTER TABLE `Disponibilite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coach`
--

DROP TABLE IF EXISTS `coach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coach` (
  `id` int NOT NULL AUTO_INCREMENT,
  `biographie` text,
  `photo` varchar(255) DEFAULT NULL,
  `disponibilite` int DEFAULT NULL,
  `discipline_sportif` varchar(100) DEFAULT NULL,
  `certification` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coach`
--

LOCK TABLES `coach` WRITE;
/*!40000 ALTER TABLE `coach` DISABLE KEYS */;
INSERT INTO `coach` VALUES (6,'biographie','s',NULL,'1','tefl'),(14,'BONOJOUR','https://avatar.iran.liara.run/public/11',NULL,'Tennis','tefl');
/*!40000 ALTER TABLE `coach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discipline_sportif`
--

DROP TABLE IF EXISTS `discipline_sportif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discipline_sportif` (
  `id_discipline` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_discipline`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discipline_sportif`
--

LOCK TABLES `discipline_sportif` WRITE;
/*!40000 ALTER TABLE `discipline_sportif` DISABLE KEYS */;
/*!40000 ALTER TABLE `discipline_sportif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `reser_id` int NOT NULL AUTO_INCREMENT,
  `sportif_id` int DEFAULT NULL,
  `coach_id` int DEFAULT NULL,
  `debut` time DEFAULT NULL,
  `fin` time DEFAULT NULL,
  PRIMARY KEY (`reser_id`),
  KEY `sportif_id` (`sportif_id`),
  KEY `coach_id` (`coach_id`),
  CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`sportif_id`) REFERENCES `sportif` (`id`),
  CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`coach_id`) REFERENCES `coach` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sport_coach`
--

DROP TABLE IF EXISTS `sport_coach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sport_coach` (
  `sportif_id` int NOT NULL,
  `coach_id` int NOT NULL,
  PRIMARY KEY (`sportif_id`,`coach_id`),
  KEY `coach_id` (`coach_id`),
  CONSTRAINT `sport_coach_ibfk_1` FOREIGN KEY (`sportif_id`) REFERENCES `sportif` (`id`),
  CONSTRAINT `sport_coach_ibfk_2` FOREIGN KEY (`coach_id`) REFERENCES `coach` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sport_coach`
--

LOCK TABLES `sport_coach` WRITE;
/*!40000 ALTER TABLE `sport_coach` DISABLE KEYS */;
/*!40000 ALTER TABLE `sport_coach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sportif`
--

DROP TABLE IF EXISTS `sportif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sportif` (
  `id` int NOT NULL AUTO_INCREMENT,
  `niveau` int DEFAULT NULL,
  `anneExp` int DEFAULT NULL,
  `certifications` varchar(40) DEFAULT NULL,
  `Column2` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sportif`
--

LOCK TABLES `sportif` WRITE;
/*!40000 ALTER TABLE `sportif` DISABLE KEYS */;
/*!40000 ALTER TABLE `sportif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` enum('sportif','coach') NOT NULL DEFAULT 'sportif',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (9,'ad','ahmde','ad@gmail.com','$2y$12$Q9SJHuUCEB2K.qGrBHitqOSO/LO5Mk.y/6jkyUGjm/ZUZQ9EGZptO','sportif'),(10,'hamid','Yassine','yassine@gmail.com','$2y$12$fUxtbfo/Ij528HFFq4RI.e71Wg7s1u7A2UtwzlnctRjsIC5mVORnS','coach'),(18,'mido','rachid','x@gmail.com','$2y$12$PJDb8IlA5rVc1SuLyMZbtuXqaAOwFeaZCUV.DFsTbiNdkmbNkyNza','coach');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-18 21:41:25
