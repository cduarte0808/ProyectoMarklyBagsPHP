-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: marklybags
-- ------------------------------------------------------
-- Server version	8.0.37

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
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(100) DEFAULT NULL,
  `correo_electronico` varchar(45) DEFAULT NULL,
  `numero_contacto` varchar(100) DEFAULT NULL,
  `asunto` varchar(45) DEFAULT NULL,
  `mensaje` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (1,'interesada en las carteras','interesada en las carteras','interesada en las carteras','interesada en las carteras','interesada en las carteras'),(2,'claudia duarte','duartecp08@gmail.com','ffffff','interesada en las carteras','interesada en las carteras'),(3,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal','interesada en las carteras','interesada en las carteras'),(4,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal 2d','interesada en las carteras 1','interesada en las carteras 2'),(5,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal 2ddsdfdfsd','interesada en las carteras 1dfsd','interesada en las carteras 2dfsdf'),(6,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal 2ddsdfdfsd','interesada en las carteras 1dfsd','interesada en las carteras 2dfsdf'),(7,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal 2ddsdfdfsd','interesada en las carteras 1dfsd','interesada en las carteras 2dfsdf'),(8,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(9,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(10,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(11,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(12,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(13,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(14,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(15,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(16,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(17,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(18,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(19,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(20,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(21,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(22,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf','interesada en las carteras vf','interesada en las carteras 2vf'),(23,'claudia duarte','duartecp08@gmail.com','prueba mensaje temporal vf  fffffff','interesada en las carteras vf','interesada en las carteras 2vf'),(24,'claudia duarte','duartecp08@gmail.com','34234234','rtgfgdfg','interesada en las carteras 2vf'),(25,'claudia duarte','duartecp08@gmail.com','34234234','rtgfgdfg','interesada en las carteras 2vf');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'cduarte@gmail.com','12345');
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

-- Dump completed on 2024-07-22 23:20:30
