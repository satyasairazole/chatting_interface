-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: mingle
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `chat_data`
--

DROP TABLE IF EXISTS `chat_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat_data` (
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_data`
--

LOCK TABLES `chat_data` WRITE;
/*!40000 ALTER TABLE `chat_data` DISABLE KEYS */;
INSERT INTO `chat_data` VALUES ('satyasairazole','venkata','sairazole1417@gmail.com','Rameshrazole@1','phno');
/*!40000 ALTER TABLE `chat_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reciever`
--

DROP TABLE IF EXISTS `reciever`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reciever` (
  `sender_name` varchar(20) DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `messege` varchar(50) DEFAULT NULL,
  `reciever_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reciever`
--

LOCK TABLES `reciever` WRITE;
/*!40000 ALTER TABLE `reciever` DISABLE KEYS */;
INSERT INTO `reciever` VALUES ('mylove','11.43 AM','01/05/22','who are you ?','satyasairazole'),('mylove','02:19 AM','05/05/22','sarle vuruko','satyasairazole');
/*!40000 ALTER TABLE `reciever` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sender`
--

DROP TABLE IF EXISTS `sender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sender` (
  `sender_name` varchar(20) DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `reciever_name` varchar(20) DEFAULT NULL,
  `messege` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sender`
--

LOCK TABLES `sender` WRITE;
/*!40000 ALTER TABLE `sender` DISABLE KEYS */;
INSERT INTO `sender` VALUES ('satyasairazole','11:28 AM','01/05/22','mylove','hello world'),('satyasairazole','13:55 PM','01/05/22','mylove','Hey there anyone using mingle..!'),('satyasairazole','14:37 PM','01/05/22','mylove','this is mahesh chandra'),('satyasairazole','21:18 PM','01/05/22','mylove','hey prasanth ela vunnav'),('satyasairazole','01:43 AM','05/05/22','mylove','jii'),('satyasairazole','01:43 AM','05/05/22','mylove','yyhj'),('satyasairazole','01:43 AM','05/05/22','mylove','hyhuhuj'),('satyasairazole','01:43 AM','05/05/22','mylove','u7uiko'),('satyasairazole','01:43 AM','05/05/22','mylove','tyujghjbn'),('satyasairazole','02:37 AM','05/05/22','mylove','jhshhs \\\\ hdhhd');
/*!40000 ALTER TABLE `sender` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-16 22:11:38
