-- MySQL dump 10.13  Distrib 5.6.29, for Linux (x86_64)
--
-- Host: localhost    Database: LAA0696374-trilibrary1
-- ------------------------------------------------------
-- Server version	5.6.29

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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `publication_date` date NOT NULL DEFAULT '2016-01-01',
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_page_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock_num` int(11) NOT NULL,
  `lend_num` int(11) NOT NULL,
  `other_num` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(2,'9789998','書籍名2','著者名2','出版社2','2012-02-03','image2.jpg','test2.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(3,'9789993','書籍名3','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(52,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(51,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(50,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(7,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(8,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(9,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(46,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(47,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(48,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(49,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(53,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(54,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(55,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(56,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(57,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(58,'9789999','æ›¸ç±å','è‘—è€…å','å‡ºç‰ˆç¤¾','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(59,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(60,'9789999','よくわかるPHPの教科書','たにぐち まこと','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(61,'9789999','よくわかるPHPの教科書','たにぐち まこと','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(62,'9789999','よくわかるPHPの教科書','たにぐち まこと','出版社','2012-02-02','image.jpg','test.html',1,0,0,'2016-02-02 05:16:24','2016-02-02 05:16:24'),(63,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(64,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(65,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(66,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(67,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(68,'0','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(69,'0','title150719','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(70,'9789999','書籍名','著者名','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(98,'9784785306021','OD版 電気伝導の基礎と材料 (先端材料シリーズ)','日本材料科学会','裳華房','1991-07-30','http://ecx.images-amazon.com/images/I/311SJ5NDSCL._SL160_.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(73,'9789999','OD版 微分積分学','矢野 健太郎','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(74,'2147483647','OD版 微分積分学','矢野 健太郎','出版社','2012-02-02','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(122,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-29 10:36:26','2016-05-29 10:36:26'),(76,'2147483647','生活と自然科学','吉田 幸弘','裳華房','0000-00-00','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(77,'2147483647','東国科学散歩','西條 敏美','裳華房','0000-00-00','image.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(107,'9784062116077','はじめてわかる国語','清水 義範','講談社','0000-00-00','http://ecx.images-amazon.com/images/I/51E9Q6QEX5L._SL160_.jpg','http://www.amazon.co.jp/dp/4062116073',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(112,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(113,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(109,'9784062116077','はじめてわかる国語','清水 義範','講談社','0000-00-00','http://ecx.images-amazon.com/images/I/51E9Q6QEX5L._SL160_.jpg','http://www.amazon.co.jp/dp/4062116073',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(110,'9784785306014','OD版 微分積分学','矢野 健太郎','裳華房','1977-02-25','http://ecx.images-amazon.com/images/I/31V0YP63KKL._SL160_.jpg','http://www.amazon.co.jp/dp/4785306017',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(111,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(114,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-04-24 09:55:40','2016-04-24 09:55:40'),(115,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-07 12:00:22','2016-05-07 12:00:22'),(116,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-07 12:12:35','2016-05-07 12:12:35'),(123,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 10:13:29','2016-05-31 10:13:29'),(119,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-29 00:20:26','2016-05-29 00:20:26'),(120,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-29 09:22:17','2016-05-29 09:22:17'),(121,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-29 10:33:51','2016-05-29 10:33:51'),(102,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(101,'9784062116077','はじめてわかる国語','清水 義範','講談社','0000-00-00','http://ecx.images-amazon.com/images/I/51E9Q6QEX5L._SL160_.jpg','',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(99,'9784785300067','生活と自然科学','吉田 幸弘','裳華房','0000-00-00','http://ecx.images-amazon.com/images/I/416UBsXPqYL._SL160_.jpg','test.html',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(100,'9784062116077','はじめてわかる国語','清水 義範','講談社','0000-00-00','http://ecx.images-amazon.com/images/I/51E9Q6QEX5L._SL160_.jpg','',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(97,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','test.html',12,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(124,'','','','','0000-00-00','','',1,0,0,'2016-05-31 10:37:20','2016-05-31 10:37:20'),(125,'','','','','0000-00-00','','',1,0,0,'2016-05-31 11:10:53','2016-05-31 11:10:53'),(126,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 13:57:12','2016-05-31 13:57:12'),(127,'','','','','0000-00-00','','',1,0,0,'2016-05-31 14:49:48','2016-05-31 14:49:48'),(128,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 16:28:55','2016-05-31 16:28:55'),(129,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 17:01:03','2016-05-31 17:01:03'),(130,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 17:01:29','2016-05-31 17:01:29'),(131,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 17:06:49','2016-05-31 17:06:49'),(132,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 17:07:11','2016-05-31 17:07:11'),(133,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 17:13:35','2016-05-31 17:13:35'),(134,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 17:14:17','2016-05-31 17:14:17'),(135,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 18:30:37','2016-05-31 18:30:37'),(136,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 18:38:21','2016-05-31 18:38:21'),(137,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 18:46:58','2016-05-31 18:46:58'),(138,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 18:48:42','2016-05-31 18:48:42'),(139,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 18:52:35','2016-05-31 18:52:35'),(140,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 18:57:02','2016-05-31 18:57:02'),(141,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 19:27:20','2016-05-31 19:27:20'),(142,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 19:52:36','2016-05-31 19:52:36'),(143,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 19:54:22','2016-05-31 19:54:22'),(144,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 22:15:57','2016-05-31 22:15:57'),(145,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 22:31:18','2016-05-31 22:31:18'),(146,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 22:31:34','2016-05-31 22:31:34'),(147,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 22:34:01','2016-05-31 22:34:01'),(148,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 22:34:31','2016-05-31 22:34:31'),(149,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 22:46:45','2016-05-31 22:46:45'),(150,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 23:05:21','2016-05-31 23:05:21'),(151,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-05-31 23:12:45','2016-05-31 23:12:45'),(152,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-06-01 17:17:56','2016-06-01 17:17:56'),(153,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-06-01 17:20:40','2016-06-01 17:20:40'),(154,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-06-01 17:22:49','2016-06-01 17:22:49'),(155,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-06-01 17:23:51','2016-06-01 17:23:51'),(156,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-06-01 17:27:30','2016-06-01 17:27:30'),(157,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-06-01 17:28:28','2016-06-01 17:28:28'),(158,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-06-01 17:30:37','2016-06-01 17:30:37'),(159,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-06-01 17:36:36','2016-06-01 17:36:36'),(160,'9784839933142','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',12,0,0,'2016-06-01 17:38:44','2016-06-01 17:38:44'),(161,'455556','','','','0000-00-00','','',3,0,0,'2016-06-01 18:37:33','2016-06-01 18:37:33'),(162,'555','','','','2016-06-01','','',1,0,0,'2016-06-01 22:10:39','2016-06-01 00:00:00'),(163,'4444','','','','0000-00-00','','',1,0,0,'2016-06-01 22:14:54','2016-06-01 22:14:54'),(164,'9999999999999','','','','2016-01-01','','',1,0,0,'2016-06-01 22:19:43','2016-06-01 22:19:43'),(165,'9784822277376','Amazon Web Servicesクラウドデザインパターン設計ガイド 改訂版(日経BP Next ICT選書)','玉川 憲,片山 暁雄,鈴木 宏康,野上 忍,瀬戸島 敏宏,坂西 隆之','日経BP社','2015-05-28','http://ecx.images-amazon.com/images/I/612yC2-qbEL._SL160_.jpg','http://www.amazon.co.jp/dp/B0126HZGP8',1,0,0,'2016-06-01 22:20:59','2016-06-01 22:20:59'),(166,'9784774179933','サーバ/インフラエンジニア養成読本 DevOps編 [Infrastructure as Code を実践するノウハウが満載!]','吉羽龍太郎,新原雅司,前田章,馬場俊彰','技術評論社','2016-02-26','http://ecx.images-amazon.com/images/I/61mqLCfF3eL._SL160_.jpg','http://www.amazon.co.jp/dp/B01C6RPY82',1,0,0,'2016-06-01 22:21:54','2016-06-01 22:21:54'),(167,'888888','','','','2016-01-01','','',1,0,0,'2016-06-01 22:23:14','2016-06-01 22:23:14'),(168,'4444','','','','2016-01-01','','',1,0,0,'2016-06-01 22:14:54','2016-06-01 22:14:54'),(169,'4444','','','','2016-01-01','','',1,0,0,'2016-06-01 22:14:54','2016-06-01 22:14:54'),(170,'9784484433937','','','','2016-01-01','','',1,0,0,'2016-06-01 22:36:20','2016-06-01 22:36:20'),(171,'9784797380897','やさしいPHP 第3版 (「やさしい」シリーズ)','高橋 麻奈','SBクリエイティブ','2014-09-26','http://ecx.images-amazon.com/images/I/51JYX85-uZL._SL160_.jpg','http://www.amazon.co.jp/dp/4797380896',10,0,0,'2016-06-01 22:38:48','2016-06-01 22:38:48'),(172,'4774123609','Linux コマンド (ポケットリファレンス)','沓名 亮典,平山 智恵','技術評論社','2005-05-10','http://ecx.images-amazon.com/images/I/5167CKFPSNL._SL160_.jpg','http://www.amazon.co.jp/dp/4774123609',3,0,0,'2016-06-02 20:38:27','2016-06-02 20:38:27'),(173,'9784798112640','','','','2016-01-01','','',2,0,0,'2016-06-08 10:07:18','2016-06-08 10:07:18');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lends`
--

DROP TABLE IF EXISTS `lends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `lend_period` date NOT NULL,
  `return_flag` tinyint(1) NOT NULL,
  `return_date` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lends`
--

LOCK TABLES `lends` WRITE;
/*!40000 ALTER TABLE `lends` DISABLE KEYS */;
INSERT INTO `lends` VALUES (1,1,1,'2016-04-01',0,'0000-00-00 00:00:00','2016-03-27 00:00:00','2016-03-27 00:00:00'),(2,2,2,'2016-05-01',0,'0000-00-00 00:00:00','2016-03-28 00:00:00','2016-03-28 00:00:00'),(3,3,3,'2016-05-11',0,'0000-00-00 00:00:00','2016-03-29 00:00:00','2016-03-29 00:00:00');
/*!40000 ALTER TABLE `lends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schema_migrations`
--

DROP TABLE IF EXISTS `schema_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schema_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schema_migrations`
--

LOCK TABLES `schema_migrations` WRITE;
/*!40000 ALTER TABLE `schema_migrations` DISABLE KEYS */;
INSERT INTO `schema_migrations` VALUES (1,'InitMigrations','Migrations','2016-04-03 22:37:39'),(2,'ConvertVersionToClassNames','Migrations','2016-04-03 22:37:39'),(3,'IncreaseClassNameLength','Migrations','2016-04-03 22:37:39'),(4,'Test1','app','2016-04-03 22:49:03');
/*!40000 ALTER TABLE `schema_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'userid1','名前1','xxx@aaa.com','1',1,'2016-03-27 00:00:00','2016-03-27 00:00:00'),(2,'userid2','名前2','xxx2@aaa.com','acccesstoken2',2,'2016-03-28 00:00:00','2016-03-28 00:00:00'),(3,'userid3','名前3','xxx3@aaa.com','acccesstoken3',3,'2016-03-29 00:00:00','2016-03-29 00:00:00');
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

-- Dump completed on 2016-06-09 10:16:00
