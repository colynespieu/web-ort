-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: todolist
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.16.04.2

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
-- Table structure for table `todo`
--

DROP TABLE IF EXISTS `todo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todo` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todo`
--

LOCK TABLES `todo` WRITE;
/*!40000 ALTER TABLE `todo` DISABLE KEYS */;
INSERT INTO `todo` VALUES (26,'1.3.6.1.2.1.2.2.1 - ifEntry','\r\n    1.3.6.1.2.1.2.2.1.1 - ifIndex\r\n    1.3.6.1.2.1.2.2.1.2 - ifDescr\r\n    1.3.6.1.2.1.2.2.1.3 - ifType\r\n    1.3.6.1.2.1.2.2.1.4 - ifMtu\r\n    1.3.6.1.2.1.2.2.1.5 - ifSpeed\r\n    1.3.6.1.2.1.2.2.1.6 - ifPhysAddress\r\n    1.3.6.1.2.1.2.2.1.7 - ifAdminStatus\r\n    1.3.6.1.2.1.2.2.1.8 - ifOperStatus\r\n    1.3.6.1.2.1.2.2.1.9 - ifLastChange\r\n    1.3.6.1.2.1.2.2.1.10 - ifInOctets\r\n    1.3.6.1.2.1.2.2.1.11 - ifInUcastPkts\r\n    1.3.6.1.2.1.2.2.1.12 - ifInNUcastPkts\r\n    1.3.6.1.2.1.2.2.1.13 - ifInDiscards\r\n    1.3.6.1.2.1.2.2.1.14 - ifInErrors\r\n    1.3.6.1.2.1.2.2.1.15 - ifInUnknownProtos\r\n    1.3.6.1.2.1.2.2.1.16 - ifOutOctets\r\n    1.3.6.1.2.1.2.2.1.17 - ifOutUcastPkts\r\n    1.3.6.1.2.1.2.2.1.18 - ifOutNUcastPkts\r\n    1.3.6.1.2.1.2.2.1.19 - ifOutDiscards\r\n    1.3.6.1.2.1.2.2.1.20 - ifOutErrors\r\n    1.3.6.1.2.1.2.2.1.21 - ifOutQLen\r\n    1.3.6.1.2.1.2.2.1.22 - ifSpecific ',1,1),(27,'Faire une partie de Stellaris','Faire une partie de Stellaris en commandeur, Ã  dans 70 Heures.\r\n:D',1,1),(37,'ajouter la menthe ','ajouter la menthe dans le thÃ©',1,5);
/*!40000 ALTER TABLE `todo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'ESPIEU','Colyn','colyn@espieu.com','$2y$10$wIcpU0rW8uokHvz8DS7ObuEagMaUSzzjOFiHamR.WGi64UsK/d182',1),(5,'bob','bob','bob@bob.com','$2y$10$zVwb1Fn2cAVs9TetpUjzsukjNDy3nosiGZiL.ONpqT1R8Q6Hzqp1C',0);
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

-- Dump completed on 2019-12-29 23:06:37
