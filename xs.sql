-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: xscj
-- ------------------------------------------------------
-- Server version	5.5.53

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
-- Table structure for table `xs`
--

DROP TABLE IF EXISTS `xs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xs` (
  `学号` char(6) NOT NULL,
  `姓名` char(8) NOT NULL,
  `专业名` char(10) DEFAULT NULL,
  `性别` tinyint(1) NOT NULL DEFAULT '1',
  `出生日期` date NOT NULL,
  `总学分` tinyint(1) DEFAULT NULL,
  `照片` blob,
  `备注` text,
  PRIMARY KEY (`学号`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xs`
--

LOCK TABLES `xs` WRITE;
/*!40000 ALTER TABLE `xs` DISABLE KEYS */;
INSERT INTO `xs` VALUES ('081101','王休','计算机',1,'1994-02-10',50,NULL,NULL),('081102','程明','计算机',1,'1995-02-01',50,NULL,NULL),('081103','王燕','计算机',0,'1993-10-06',50,NULL,NULL),('081104','韦严平','计算机',1,'1994-08-26',50,NULL,NULL),('081106','李方方','计算机',1,'1994-11-20',50,NULL,NULL),('081107','李明','计算机',1,'1994-05-01',54,NULL,'提前修完\"数据结构\",并获得学分'),('081108','林一帆','计算机',1,'1993-08-05',52,NULL,'已提前修完一门课'),('081109','张强民','计算机',1,'1993-08-11',50,NULL,NULL),('081110','张蔚','计算机',0,'1995-07-22',50,'?','三好生'),('081111','赵琳','计算机',0,'1994-03-18',50,NULL,NULL),('081113','严红','计算机',0,'1993-08-11',48,NULL,'有一门课不及格，待补考'),('081201','王敏','通信工程',1,'1993-06-10',42,NULL,NULL),('081202','王林','通信工程',1,'1993-01-29',40,NULL,'有一门课不及格，待补考'),('081204','马琳琳','通信工程',0,'1993-02-10',40,NULL,NULL),('081206','李计','通信工程',1,'1993-09-20',42,NULL,NULL),('081210','李红庆','通信工程',1,'1993-05-01',42,NULL,'已提前修完一门课，并获得学分'),('081216','孙祥欣','通信工程',1,'1993-03-09',44,NULL,NULL),('081218','孙研','通信工程',1,'1994-10-09',42,NULL,NULL),('081220','吴薇华','通信工程',0,'1994-03-18',42,NULL,NULL),('081221','刘燕敏','通信工程',0,'1993-11-12',42,NULL,NULL),('081241','罗林琳','通信工程',0,'1994-01-30',50,NULL,'转专业学习');
/*!40000 ALTER TABLE `xs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-08 20:43:36
