-- MySQL dump 10.15  Distrib 10.0.33-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: carzone
-- ------------------------------------------------------
-- Server version	10.0.33-MariaDB-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car` (
  `immat_num` varchar(15) NOT NULL,
  `make` varchar(15) NOT NULL,
  `model` varchar(15) NOT NULL,
  `year` varchar(4) NOT NULL,
  `member_email` varchar(40) NOT NULL,
  PRIMARY KEY (`immat_num`),
  KEY `member_email` (`member_email`),
  CONSTRAINT `car_ibfk_1` FOREIGN KEY (`member_email`) REFERENCES `member` (`member_email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES ('1403JN18','Toyota','Supra','2018','shravan@dell.com'),('1404JN18','Mitsubishi','Evolution','2018','shravan@dell.com'),('1405JN18','Honda','S2000','2018','shravan@dell.com'),('3006JN18','Lotus','Elise','2018','leshna@hp.com');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `shortreaction` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `member_email` varchar(40) NOT NULL,
  KEY `member_email` (`member_email`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`member_email`) REFERENCES `member` (`member_email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `member_email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `member_email` (`member_email`),
  CONSTRAINT `inbox_ibfk_1` FOREIGN KEY (`member_email`) REFERENCES `member` (`member_email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbox`
--

LOCK TABLES `inbox` WRITE;
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `member_email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  PRIMARY KEY (`member_email`),
  UNIQUE KEY `member_email` (`member_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES ('leshna@hp.com','Testing1234','Leshna','Shamloll','52345678','F'),('shravan@dell.com','Testing1234','Shravan','Dwarka','51234567','M');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rendezvous` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(40) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `member_email` varchar(40) NOT NULL,
  `immat_num` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `member_email` (`member_email`),
  KEY `fk_immat` (`immat_num`),
  CONSTRAINT `fk_immat` FOREIGN KEY (`immat_num`) REFERENCES `car` (`immat_num`),
  CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`member_email`) REFERENCES `member` (`member_email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rendezvous`
--

LOCK TABLES `rendezvous` WRITE;
/*!40000 ALTER TABLE `rendezvous` DISABLE KEYS */;
/*!40000 ALTER TABLE `rendezvous` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stakeholders`
--

DROP TABLE IF EXISTS `stakeholders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stakeholders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `phonenum` varchar(10) NOT NULL,
  `stakeholder_email` varchar(30) NOT NULL,
  `priviledge` int(11) NOT NULL,
  `job` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stakeholders`
--

LOCK TABLES `stakeholders` WRITE;
/*!40000 ALTER TABLE `stakeholders` DISABLE KEYS */;
INSERT INTO `stakeholders` VALUES (1,'Heinz','Doofenshmirtz','11111111','heinz@doofenshmirtz.com',1,'Evil scientist'),(2,'Phineas','Flint','22222222','phineas@flint.com',2,'student'),(3,'Perry','the Platypus','33333333','perry@theplatypus.com.com',1,'secret agent'),(4,'Candace','Flint','44444444','candace@flint.com',2,'young adult'),(5,'Ferb','Flint','55555555','ferb@flint.com',1,'student'),(6,'Linda','Flint','66666666','linda@flint.com',1,'Housewife'),(7,'Bufford','Van Stomm','77777777','bufford@vanstomm.com',1,'Bully'),(8,'Isabella','Something','88888888','isabella@something.com',2,'Fireside girl'),(9,'Baljeet','Something','99999999','baljeet@something.com',2,'nerd'),(10,'stacy','Something','10000000','stacy@something.com',2,'Young adult');
/*!40000 ALTER TABLE `stakeholders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-31 18:55:27
