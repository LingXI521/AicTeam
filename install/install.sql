-- MySQL dump 10.13  Distrib 5.6.44, for Win64 (x86_64)
--
-- Host: localhost    Database: aic
-- ------------------------------------------------------
-- Server version	5.6.44-log

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
-- Table structure for table `autive_comments`
--

DROP TABLE IF EXISTS `autive_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autive_comments` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `QQ` varchar(11) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autive_comments`
--

LOCK TABLES `autive_comments` WRITE;
/*!40000 ALTER TABLE `autive_comments` DISABLE KEYS */;
INSERT INTO `autive_comments` VALUES (1,'LingXI','3364689142','测试');
/*!40000 ALTER TABLE `autive_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autive_info`
--

DROP TABLE IF EXISTS `autive_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autive_info` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autive_info`
--

LOCK TABLES `autive_info` WRITE;
/*!40000 ALTER TABLE `autive_info` DISABLE KEYS */;
INSERT INTO `autive_info` VALUES (1,'测试','2020-09-05');
/*!40000 ALTER TABLE `autive_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autive_links`
--

DROP TABLE IF EXISTS `autive_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autive_links` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(40) NOT NULL,
  `passage` longtext NOT NULL,
  `url` longtext NOT NULL,
  `active` varchar(40) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autive_links`
--

LOCK TABLES `autive_links` WRITE;
/*!40000 ALTER TABLE `autive_links` DISABLE KEYS */;
INSERT INTO `autive_links` VALUES (1,'LingXI - 灵汐网','灵汐又来更新了呀！','https://autive.cn','true');
/*!40000 ALTER TABLE `autive_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autive_member`
--

DROP TABLE IF EXISTS `autive_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autive_member` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `QQ` varchar(10) NOT NULL,
  `jieshao` varchar(150) NOT NULL,
  `active` varchar(40) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autive_member`
--

LOCK TABLES `autive_member` WRITE;
/*!40000 ALTER TABLE `autive_member` DISABLE KEYS */;
INSERT INTO `autive_member` VALUES (1,'LingXI','3364689142','易语言进阶工程师 <br>\r\nAutive网络创始人','true'),(2,'茶栀','2232142736','茶栀网络创始人<br>易语言进阶工程师 网页SEO技术师','true'),(3,'白陌','3448113599','茶栀网络团队成员\r\n易语言程序UI美化师 Web前端工程师','true');
/*!40000 ALTER TABLE `autive_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autive_page`
--

DROP TABLE IF EXISTS `autive_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autive_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `Page` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autive_page`
--

LOCK TABLES `autive_page` WRITE;
/*!40000 ALTER TABLE `autive_page` DISABLE KEYS */;
INSERT INTO `autive_page` VALUES (1,'Title','AicTeam'),(2,'Title2','演示站'),(3,'Keywords','AicTeam,前端演示站,团队网站程序'),(4,'Description','AicTeam前端演示站,AicTeam专为团队建站而生！'),(12,'ico','https://autive.cn/logo.png'),(5,'about','关于我们'),(6,'foot','Copyright 2020 © Autive网络'),(7,'icp','粤ICP备20071552号'),(8,'logo','https://autive.cn/LingXIlogo.png'),(9,'gonggao','无公告'),(10,'script',' '),(11,'music',''),(15,'bgurl','https://api.ixiaowai.cn/api/api.php'),(13,'demand','无需求'),(14,'url','http://test.lingxiya.cn'),(16,'comment','无'),(17,'header','');
/*!40000 ALTER TABLE `autive_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autive_services`
--

DROP TABLE IF EXISTS `autive_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autive_services` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Page` varchar(150) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autive_services`
--

LOCK TABLES `autive_services` WRITE;
/*!40000 ALTER TABLE `autive_services` DISABLE KEYS */;
INSERT INTO `autive_services` VALUES (1,'自行修改','自行修改'),(2,'自行修改','自行修改'),(3,'自行修改','自行修改');
/*!40000 ALTER TABLE `autive_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autive_site`
--

DROP TABLE IF EXISTS `autive_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autive_site` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `jieshao` varchar(255) DEFAULT NULL,
  `imgurl` varchar(255) DEFAULT NULL,
  `active` varchar(40) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autive_site`
--

LOCK TABLES `autive_site` WRITE;
/*!40000 ALTER TABLE `autive_site` DISABLE KEYS */;
INSERT INTO `autive_site` VALUES (1,'LingXI - 灵汐网','https://autive.cn/','HI，灵汐网欢迎您的光临!不定期更新文章的啦','https://autive.cn/usr/uploads/2020/youlian/lingxi.png','true');
/*!40000 ALTER TABLE `autive_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autive_user`
--

DROP TABLE IF EXISTS `autive_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autive_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `name` varchar(40) NOT NULL,
  `qq` varchar(150) DEFAULT NULL,
  `qx` int(1) DEFAULT '1',
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autive_user`
--

LOCK TABLES `autive_user` WRITE;
/*!40000 ALTER TABLE `autive_user` DISABLE KEYS */;
INSERT INTO `autive_user` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','是灵汐呀mua~','2013368396',1,1);
/*!40000 ALTER TABLE `autive_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'aic'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-26 14:03:28
