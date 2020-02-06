-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: ebook
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `book_id` int(255) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) NOT NULL,
  `book_author_name` varchar(255) NOT NULL,
  `book_description` text,
  `book_publisher_id` int(255) NOT NULL,
  `book_cat_id` int(255) NOT NULL,
  `book_branch_id` int(255) NOT NULL,
  `book_release_date` date NOT NULL,
  `book_publish_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `book_avatar` varchar(255) DEFAULT NULL,
  `book` varchar(255) DEFAULT NULL,
  `book_size` decimal(5,2) NOT NULL,
  `book_price` decimal(5,2) NOT NULL,
  `book_status` varchar(255) DEFAULT 'published',
  `book_downloaded_number` int(255) DEFAULT '0',
  `book_like_number` int(255) DEFAULT '0',
  `book_dislike_number` int(255) DEFAULT '0',
  `book_comment_number` int(255) DEFAULT '0',
  `book_rate` decimal(3,2) DEFAULT '0.00',
  `book_rate_counter` int(255) DEFAULT '0',
  PRIMARY KEY (`book_id`),
  UNIQUE KEY `book_avatar` (`book_avatar`),
  UNIQUE KEY `book` (`book`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (140,'php','tomas','web basics',1,1,6,'2019-12-06','2019-12-15 16:09:47','../img/uploaded/books/book5df63eab81c47.png','../uploadedbooks/pdf5df63eab81d55.pdf',1.44,0.00,'published',1,NULL,NULL,NULL,0.00,0),(141,'c++','hatem','basic desktop',1,1,6,'2019-12-04','2019-12-15 16:12:18','../img/uploaded/books/book5df63f42d582d.png','../uploadedbooks/pdf5df63f42d59a5.pdf',1.44,10.00,'published',0,NULL,NULL,NULL,0.00,0),(142,'java','mostafa','java db and gui',1,1,7,'2019-12-19','2019-12-15 18:11:20','../img/uploaded/books/book5df65b28865e7.png','../uploadedbooks/pdf5df65b2886746.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(143,'python','dssd','sdsd',1,2,21,'2019-12-05','2019-12-15 18:14:42','../img/uploaded/books/book5df65bf27ffa4.jpg','../uploadedbooks/pdf5df65bf28081e.pdf',1.44,0.00,'published',5,NULL,NULL,NULL,0.00,0),(144,'fdsfdfdsf','dsfdsfd','sfsdfdsfdsf',1,1,6,'2019-12-05','2019-12-15 20:10:56','../img/uploaded/books/book5df67730c57d4.png','../uploadedbooks/pdf5df67730c5916.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(145,'fdsfsdf','fsdfds','fsdfdsfds',1,1,1,'2019-12-05','2019-12-15 20:11:15','../img/uploaded/books/book5df677431bb2c.png','../uploadedbooks/pdf5df677431bc54.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(146,'dasdsad','dsd','adasdasasdas',1,1,1,'2029-12-13','2019-12-15 20:11:37','../img/uploaded/books/book5df67759378b7.png','../uploadedbooks/pdf5df6775937a0d.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(147,'adasdggggggggggggggggggg','asdas','asdasd',1,1,14,'2019-12-05','2019-12-15 20:13:30','../img/uploaded/books/book5df677caddec9.jpg','../uploadedbooks/pdf5df677cade37f.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(148,'aaaaa','aaaaaaaaaaaaaaaaaaaa','aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',1,1,11,'2019-12-02','2019-12-15 20:18:48','../img/uploaded/books/book5df67908014e2.png','../uploadedbooks/pdf5df679080165d.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(149,'ssssss','ssssssss','sssssssssssssssssssssssssss',1,1,18,'2019-12-07','2019-12-15 20:29:10','../img/uploaded/books/book5df67b76f13e3.png','../uploadedbooks/pdf5df67b76f1486.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(150,'AA','aAAaAas','sdsdadasdsdds',1,1,3,'2019-12-06','2019-12-15 20:51:34','../img/uploaded/books/book5df680b681f8a.jpg','../uploadedbooks/pdf5df680b6829eb.pdf',0.08,0.00,'published',0,NULL,NULL,NULL,0.00,0),(151,'dsfsd','fdsf','dsfsdfds',1,1,4,'2019-12-07','2019-12-15 20:52:16','../img/uploaded/books/book5df680e06137a.jpg','../uploadedbooks/pdf5df680e061412.pdf',0.08,0.00,'published',0,NULL,NULL,NULL,0.00,0),(152,'12122','323232','33333333333',1,1,1,'2019-12-06','2019-12-15 21:49:30','../img/uploaded/books/book5df68e4ab2b2b.png','../uploadedbooks/pdf5df68e4ab2ca5.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(153,'........mkkkkkkkkkkkkkkk','fdsssssssss','dsfdsfsdfsd',1,1,1,'2019-12-19','2019-12-15 21:50:00','../img/uploaded/books/book5df68e68e4a92.jpeg','../uploadedbooks/pdf5df68e68e4bbc.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(154,'dsfdsf','dsfdsfds','sdfdsfds',1,1,1,'2019-12-04','2019-12-15 21:50:18','../img/uploaded/books/book5df68e7a9a4b5.jpg','../uploadedbooks/pdf5df68e7a9aa10.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(155,'sdfdsfds','dsfsdf','dsfsdf',1,1,1,'2019-12-05','2019-12-15 21:51:39','../img/uploaded/books/book5df68ecb9b66e.jpg','../uploadedbooks/pdf5df68ecb9b755.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(156,'gvcb','bcvb','cvbcvb',1,1,1,'2019-12-06','2019-12-15 21:52:11','../img/uploaded/books/book5df68eeb31e6f.jpg','../uploadedbooks/pdf5df68eeb32089.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0),(157,'ggggggg','gggg','ggggggggg',1,3,25,'2019-12-06','2019-12-15 22:31:24','../img/uploaded/books/book5df6981bf3a98.png','../uploadedbooks/pdf5df6981bf3c08.pdf',1.44,0.00,'published',0,NULL,NULL,NULL,0.00,0);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branch` (
  `branch_id` int(255) NOT NULL AUTO_INCREMENT,
  `branch_cat_id` int(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  PRIMARY KEY (`branch_id`),
  UNIQUE KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (1,1,'NonFiction'),(2,1,'Fiction'),(3,1,'History'),(4,1,'Math'),(5,1,'Kids'),(6,1,'Programing'),(7,1,'Science'),(8,1,'Travel'),(9,1,'Cook'),(10,1,'Dictionaries'),(11,1,'Fantasy'),(12,1,'Auto Biographics'),(13,1,'Action And Adventure'),(14,1,'Self Help'),(15,1,'ScienceFiction'),(16,1,'Drama'),(17,1,'Biographies'),(18,1,'Religious'),(19,2,'Historical'),(20,2,'Detective'),(21,2,'Romances'),(22,2,'Political'),(23,2,'Fiction'),(24,2,'Non Fiction'),(25,3,'Historical'),(26,3,'Detective'),(27,3,'Romances'),(28,3,'Political'),(29,3,'Fiction'),(30,3,'Non Fiction');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'book'),(2,'novel'),(3,'short story');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `comment_id` int(255) NOT NULL AUTO_INCREMENT,
  `comment_book_id` int(255) NOT NULL,
  `comment_user_id` int(255) NOT NULL,
  `comment_title` varchar(255) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_status` varchar(255) DEFAULT 'published',
  `comment_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  UNIQUE KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `download`
--

DROP TABLE IF EXISTS `download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `download` (
  `download_id` int(255) NOT NULL AUTO_INCREMENT,
  `book_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT '0',
  `download_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`download_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `download`
--

LOCK TABLES `download` WRITE;
/*!40000 ALTER TABLE `download` DISABLE KEYS */;
INSERT INTO `download` VALUES (1,143,1,'2019-12-16 18:04:46'),(2,143,1,'2019-12-16 18:06:06'),(3,143,1,'2019-12-16 18:06:19');
/*!40000 ALTER TABLE `download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likes` (
  `like_id` int(255) NOT NULL AUTO_INCREMENT,
  `like_user_id` int(255) NOT NULL,
  `like_book_id` int(255) NOT NULL,
  `like_action` int(2) NOT NULL DEFAULT '0',
  `dislike_action` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`like_id`),
  UNIQUE KEY `like_id` (`like_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_regeister_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_birth_date` date NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_book_uploaded` int(255) DEFAULT '0',
  `user_book_downloaded` int(255) DEFAULT '0',
  `user_avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'ebook','adminm','01023118400','2019-12-09 02:41:04','1999-04-28','egypt','admin@admin.com','Pa$$w0rd','admin','active',5,0,'img/uploaded/user/user5df0e5a643966png'),(2,'hany mohamed','Elhussein','01099402257','2019-12-09 11:49:45','1999-05-01','wade elnatron','hany@yahoo.com','Pa$$w0rd','admin','active',4,0,'img/uploaded/user/user5deec1c3816acjpg'),(3,'Mohamed','Elsheref','01023118400','2019-12-09 19:17:37','2019-12-19','Tanta, Egypt','mohamedelsheref65@gmail.com','Pa$$w0rd','user','active',4,0,'img/uploaded/user/default.png'),(5,'Randa','Mohamed','01099402257','2019-12-09 19:31:17','2019-12-20','Cairo','randamohamed@gmail.com','Pa$$w0rd','user','active',4,0,'img/uploaded/user/user5dee84e53adc4jpeg'),(6,'Abdelmoneim','Abdelrahman','01027405234','2019-12-11 12:09:07','1999-10-01','Egypt','abdelmoneim@gmail.com','Pa$$w0rd','user','active',4,0,'img/uploaded/user/default.png');
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

-- Dump completed on 2019-12-16 18:16:26
