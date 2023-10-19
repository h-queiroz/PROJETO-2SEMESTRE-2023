CREATE DATABASE  IF NOT EXISTS `bonnadica` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bonnadica`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bonnadica
-- ------------------------------------------------------
-- Server version	8.1.0

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
-- Table structure for table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8*/;
CREATE TABLE `pizza` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `ingredientes` varchar(200) DEFAULT NULL,
  `preço` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pizza`
--

LOCK TABLES `pizza` WRITE;
/*!40000 ALTER TABLE `pizza` DISABLE KEYS */;
INSERT INTO `pizza` VALUES (1,'calabreza','2 xícaras cha de farinha de trigo 1 colher sopa de fermento em pó meia colher cha de sal 1 xicara cha de água 4 colheres sopa de oleo 1 xicara cha de molho de tomate 300 g de linguica calabresa  ',49.99),(2,'queijo','2 xícaras (chá) de farinha de trigo 1 colher (sopa) de fermento em pó meia colher (chá) de sal 1 xícara (chá) de água 4 colheres (sopa) de óleo 1 xícara (chá) de molho de tomate 1 unidade de queijo   ',49.99),(3,'portuguesa','2 xícaras chá de farinha de trigo, 1colher sopa de fermento em pó ,meia colher chá de sal ,1 xícara chá de água, 4 colheres sopa de óleo, 150g de queijo muçarela, 50g de presunto ,1tomate em rodelas,',49.99);
/*!40000 ALTER TABLE `pizza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'kauan','kauan@gmail.com','$2y$10$0tYlJ6dtWtzyFtpVYy1/EuJXirjWjppPfSSxfdJK6FHmwJhW4zcm.'),(2,'1234','test@gmail.com','$2y$10$MGibNCM/xWdtwvlUgfAy..Dcd9MOmVMEvm5Z9d5GIRTbSGAyZEUVy'),(3,'renata','renata@gmail.com','$2y$10$r0epdiYRBIOV.n5ZACZyv..eLmzKEU4I6qZbkVLQfMyj7VhOLq2HS'),(4,'tiago','tiago@gmail.com','$2y$10$EuHjxKpr2e3Df.1ZloSLvuFGcfqNcJWmEQEwS9yV2GxinWVtsyVd2');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-19  0:32:31
