-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: utsoebd
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.12.04.1

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
-- Temporary table structure for view `activealums`
--

DROP TABLE IF EXISTS `activealums`;
/*!50001 DROP VIEW IF EXISTS `activealums`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `activealums` (
  `nombre` tinyint NOT NULL,
  `apellidos` tinyint NOT NULL,
  `carrera` tinyint NOT NULL,
  `grado` tinyint NOT NULL,
  `grupo` tinyint NOT NULL,
  `estado` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `almid` int(11) NOT NULL AUTO_INCREMENT,
  `almnombre` varchar(40) DEFAULT NULL,
  `almapellidos` varchar(40) DEFAULT NULL,
  `almdir` varchar(50) DEFAULT NULL,
  `almcorr` varchar(40) DEFAULT NULL,
  `almtel` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`almid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'Perla Coral','Coral Conejo',NULL,NULL,NULL),(26,'Jesus Adrian','Ramirez Lopez','Salamanca Gto','adrian_z_ero@hotmail.com','464-107-4694'),(27,'Denise','Ceja','jhkjhfhk','perla.c.c.c@hotmail.com','9898'),(28,'Valdo','Ceja','asdfghj','valdo@valdo.com','8912398');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carreras`
--

DROP TABLE IF EXISTS `carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carreras` (
  `crrsid` int(11) NOT NULL AUTO_INCREMENT,
  `crrsnombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`crrsid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carreras`
--

LOCK TABLES `carreras` WRITE;
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;
INSERT INTO `carreras` VALUES (1,'Tecnologias de la informacion y la comunicacion'),(2,'Desarrollo de Negocios'),(3,'Diseño de Modas'),(4,'Mecanica'),(5,'Mantenimiento Industrial'),(6,'Procesos Alimenticios'),(7,'Agricultura Sustentable y Protegida');
/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grados`
--

DROP TABLE IF EXISTS `grados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grados` (
  `grdid` int(11) NOT NULL AUTO_INCREMENT,
  `grdgrado` int(11) DEFAULT NULL,
  PRIMARY KEY (`grdid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grados`
--

LOCK TABLES `grados` WRITE;
/*!40000 ALTER TABLE `grados` DISABLE KEYS */;
INSERT INTO `grados` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7),(8,8),(9,9),(10,10);
/*!40000 ALTER TABLE `grados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gragrucar`
--

DROP TABLE IF EXISTS `gragrucar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gragrucar` (
  `ggcid` int(11) NOT NULL AUTO_INCREMENT,
  `ggccarrera` int(11) DEFAULT NULL,
  `ggcgrado` int(11) DEFAULT NULL,
  `ggcgrupo` int(11) DEFAULT NULL,
  `ggcalum` int(11) DEFAULT NULL,
  `ggcstatus` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ggcid`),
  KEY `foreigncarreras` (`ggccarrera`),
  KEY `foreigndgrado` (`ggcgrado`),
  KEY `foreingdgru` (`ggcgrupo`),
  KEY `foreingalm` (`ggcalum`),
  CONSTRAINT `foreingalm` FOREIGN KEY (`ggcalum`) REFERENCES `alumnos` (`almid`),
  CONSTRAINT `foreingdgru` FOREIGN KEY (`ggcgrupo`) REFERENCES `grupos` (`grpid`),
  CONSTRAINT `gragrucar_ibfk_1` FOREIGN KEY (`ggccarrera`) REFERENCES `carreras` (`crrsid`),
  CONSTRAINT `gragrucar_ibfk_2` FOREIGN KEY (`ggcgrado`) REFERENCES `grados` (`grdid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gragrucar`
--

LOCK TABLES `gragrucar` WRITE;
/*!40000 ALTER TABLE `gragrucar` DISABLE KEYS */;
INSERT INTO `gragrucar` VALUES (1,1,8,3,1,1),(3,1,8,3,26,1),(4,3,2,1,27,1),(5,4,1,1,28,1);
/*!40000 ALTER TABLE `gragrucar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos`
--

DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos` (
  `grpid` int(11) NOT NULL AUTO_INCREMENT,
  `grpnombre` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`grpid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos`
--

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` VALUES (1,'A'),(2,'B'),(3,'C'),(4,'D'),(5,'E'),(6,'F');
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `usrid` int(11) NOT NULL AUTO_INCREMENT,
  `usrname` varchar(40) DEFAULT NULL,
  `usrpsw` varchar(40) DEFAULT NULL,
  `usrrol` int(11) DEFAULT NULL,
  PRIMARY KEY (`usrid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'perla','26f2c0b48c6b479a99edd55ffd481e778741d81f',1),(2,'admin','d033e22ae348aeb5660fc2140aec35850c4da997',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `viewcar`
--

DROP TABLE IF EXISTS `viewcar`;
/*!50001 DROP VIEW IF EXISTS `viewcar`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `viewcar` (
  `crrsid` tinyint NOT NULL,
  `crrsnombre` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `viewgrad`
--

DROP TABLE IF EXISTS `viewgrad`;
/*!50001 DROP VIEW IF EXISTS `viewgrad`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `viewgrad` (
  `grdid` tinyint NOT NULL,
  `grdgrado` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `viewgrp`
--

DROP TABLE IF EXISTS `viewgrp`;
/*!50001 DROP VIEW IF EXISTS `viewgrp`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `viewgrp` (
  `grpid` tinyint NOT NULL,
  `grpnombre` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `activealums`
--

/*!50001 DROP TABLE IF EXISTS `activealums`*/;
/*!50001 DROP VIEW IF EXISTS `activealums`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `activealums` AS select `alumnos`.`almnombre` AS `nombre`,`alumnos`.`almapellidos` AS `apellidos`,`carreras`.`crrsnombre` AS `carrera`,`grados`.`grdgrado` AS `grado`,`grupos`.`grpnombre` AS `grupo`,`gragrucar`.`ggcstatus` AS `estado` from ((((`gragrucar` join `alumnos` on((`gragrucar`.`ggcalum` = `alumnos`.`almid`))) join `carreras` on((`gragrucar`.`ggccarrera` = `carreras`.`crrsid`))) join `grados` on((`gragrucar`.`ggcgrado` = `grados`.`grdid`))) join `grupos` on((`gragrucar`.`ggcgrupo` = `grupos`.`grpid`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `viewcar`
--

/*!50001 DROP TABLE IF EXISTS `viewcar`*/;
/*!50001 DROP VIEW IF EXISTS `viewcar`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viewcar` AS select `carreras`.`crrsid` AS `crrsid`,`carreras`.`crrsnombre` AS `crrsnombre` from `carreras` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `viewgrad`
--

/*!50001 DROP TABLE IF EXISTS `viewgrad`*/;
/*!50001 DROP VIEW IF EXISTS `viewgrad`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viewgrad` AS select `grados`.`grdid` AS `grdid`,`grados`.`grdgrado` AS `grdgrado` from `grados` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `viewgrp`
--

/*!50001 DROP TABLE IF EXISTS `viewgrp`*/;
/*!50001 DROP VIEW IF EXISTS `viewgrp`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viewgrp` AS select `grupos`.`grpid` AS `grpid`,`grupos`.`grpnombre` AS `grpnombre` from `grupos` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-30  1:42:52
