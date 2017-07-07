-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: vikingadventures
-- ------------------------------------------------------
-- Server version	5.6.31

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
-- Table structure for table `activity_reg`
--

DROP TABLE IF EXISTS `activity_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_reg`
--

LOCK TABLES `activity_reg` WRITE;
/*!40000 ALTER TABLE `activity_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `character`
--

DROP TABLE IF EXISTS `character`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `character` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `path_avatar` tinytext NOT NULL,
  `id_questions` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `class_UNIQUE` (`class`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `character`
--

LOCK TABLES `character` WRITE;
/*!40000 ALTER TABLE `character` DISABLE KEYS */;
/*!40000 ALTER TABLE `character` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_answers`
--

DROP TABLE IF EXISTS `questions_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_questions` int(11) NOT NULL,
  `id_answers` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_answers`
--

LOCK TABLES `questions_answers` WRITE;
/*!40000 ALTER TABLE `questions_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stage`
--

DROP TABLE IF EXISTS `stage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stage`
--

LOCK TABLES `stage` WRITE;
/*!40000 ALTER TABLE `stage` DISABLE KEYS */;
/*!40000 ALTER TABLE `stage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (133,'FRANCISCO','LOPEZ','flopez','FJLOOPEZ@GMAIL.COM','1990-12-26','','$2y$10$4b56o8asyRW8tpczavdVCeCp3UrNTKHZU/txmG51CaTG5bsim226u'),(134,'Ruy','Barriopedro','ruypo','ruypo00@gmail.com','2017-05-11','','$2y$10$6dnaEcFbNzR77uVGab/N5uO3nobxKT1/oqljKEcjESa8vHUUGrRx.'),(135,'jorgito','lopez','jorgito','jsadkn@sdlknf.com','2017-05-16','','$2y$10$O.oUtW9btuitDu7A052HwOSPZy7lOg.j6WYmuVLgli2VOy5gO2ELW'),(136,'haha','lala','hala','fjloopez@gmail.com','1990-02-04','','$2y$10$9f9YCfE3/YfFkn/J1omySOjkCuThYoL8XLd8lr5rmiCcOcJaxrpeW'),(137,'mostri','mostreli','mostri','mostri@mostri.com','2017-05-17','','$2y$10$9IGVaG8AfNjjIiZ7cqYDPePQZ2RId8cpCkNny0fOMgDdgI9/fKIcW'),(138,'jorgelin','damostri','121212121212','afafd@sdgs.com','2017-05-17','','$2y$10$g92TkwLZN5cldUJ0NGfo9uBOM8bUYP7wf9ifr6mQw/ejfjH7ie3M.'),(139,'Bart','Simpson','elbarto','bart@simpson.com','1980-12-12','','$2y$10$EzaQiyWVUZVWGGnfpBmONeYW00RRe6htvA4.GFVCtMseOHBRf1wvS'),(140,'asdf','asdf','asdf','a@a.com','1990-01-01','male','$2y$10$BCKwiCkdr2kyqWM7jeAu0u07FIzy.rKylLhrqBFJ2ZZnNtb8zMirW'),(141,'asdafd','afsfaf','asdfg','a@a.com','1990-12-12','female','$2y$10$Mk9VVdo9k0WSyCRAsWbaQuf7AQQyh7Tow03qhgXMcMBAJKBNvj2iC');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_character`
--

DROP TABLE IF EXISTS `user_character`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_character` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_character` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_character`
--

LOCK TABLES `user_character` WRITE;
/*!40000 ALTER TABLE `user_character` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_character` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_user`
--

DROP TABLE IF EXISTS `user_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_a` int(11) NOT NULL,
  `id_user_b` int(11) NOT NULL,
  `created` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_user`
--

LOCK TABLES `user_user` WRITE;
/*!40000 ALTER TABLE `user_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-07 10:05:28
