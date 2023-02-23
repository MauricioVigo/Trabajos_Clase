-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: final
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Table structure for table `pisos`
--

DROP TABLE IF EXISTS `pisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pisos` (
  `Codigo_piso` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `puerta` varchar(5) NOT NULL,
  `cp` int(11) NOT NULL,
  `metros` int(11) NOT NULL,
  `zona` varchar(15) DEFAULT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `comprado` enum('si','no') DEFAULT NULL,
  PRIMARY KEY (`Codigo_piso`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pisos`
--

LOCK TABLES `pisos` WRITE;
/*!40000 ALTER TABLE `pisos` DISABLE KEYS */;
INSERT INTO `pisos` VALUES (23,'prueba',544,4,'99',204,434,'madrid',1000,'1676883464-SLA_3734.jpg',1,'si'),(24,'atocha',544,4,'h',28028,120,'Madrid',200000,'1677144192-hola.jpg',90,'no'),(25,'Ronda atocha',544,4,'p',28028,120,'Madrid',9999,'1677145625-hola.jpg',55,'no');
/*!40000 ALTER TABLE `pisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prueba`
--

DROP TABLE IF EXISTS `prueba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prueba` (
  `imagen` varchar(30) NOT NULL,
  `comprado` enum('si','no') DEFAULT NULL,
  PRIMARY KEY (`imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prueba`
--

LOCK TABLES `prueba` WRITE;
/*!40000 ALTER TABLE `prueba` DISABLE KEYS */;
INSERT INTO `prueba` VALUES ('1675253470-hola.jpg','si');
/*!40000 ALTER TABLE `prueba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `name` varchar(30) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('jose','jose@','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','admin',1),('mauricio','mauricio@','8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92','vendedor',7),('pepe','pepe@','314ffd6162923d94123a7010c7c67be278592e5922ac5e3e404d65aa01608293','comprador',10),('luis','luis@luis.es','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','vendedor',19);
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

-- Dump completed on 2023-02-23 10:50:58
