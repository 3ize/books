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
) ENGINE=MyISAM AUTO_INCREMENT=183 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (173,'9784797380897','やさしいPHP 第3版 (「やさしい」シリーズ)','高橋 麻奈','SBクリエイティブ','2014-09-26','http://ecx.images-amazon.com/images/I/51JYX85-uZL._SL160_.jpg','http://www.amazon.co.jp/dp/4797380896',5,0,0,'2016-06-09 11:06:17','2016-06-09 11:06:17'),(174,'9784798112640','PHPの絵本','株式会社アンク','翔泳社','2007-02-27','http://ecx.images-amazon.com/images/I/513wy9%2BSMEL._SL160_.jpg','http://www.amazon.co.jp/dp/B00NHCSFKA',2,0,0,'2016-06-09 11:06:35','2016-06-09 11:06:35'),(175,'4839933146','よくわかるPHPの教科書','たにぐち まこと','毎日コミュニケーションズ','2010-09-14','http://ecx.images-amazon.com/images/I/51nJU4s84tL._SL160_.jpg','http://www.amazon.co.jp/dp/4839933146',1,0,0,'2016-06-09 12:32:51','2016-06-09 12:32:51'),(176,'479736758X','本格ビジネスサイトを作りながら学ぶ WordPressの教科書','プライム・ストラテジー株式会社','ソフトバンククリエイティブ','2012-03-30','http://ecx.images-amazon.com/images/I/51p-xY4K5hL._SL160_.jpg','http://www.amazon.co.jp/dp/479736758X',1,0,0,'2016-06-09 12:33:47','2016-06-09 12:33:47'),(177,'4839947597','PHP+MySQLマスターブック','永田 順伸','マイナビ','2014-01-24','http://ecx.images-amazon.com/images/I/51iISPyXQ8L._SL160_.jpg','http://www.amazon.co.jp/dp/4839947597',1,0,0,'2016-06-09 12:34:56','2016-06-09 12:34:56'),(178,'4897979269','気づけばプロ並みPHP~ショッピングカート作りにチャレンジ!','谷藤賢一','リックテレコム','2013-10-15','http://ecx.images-amazon.com/images/I/51jnKwcwR-L._SL160_.jpg','http://www.amazon.co.jp/dp/4897979269',1,0,0,'2016-06-09 12:35:35','2016-06-09 12:35:35'),(179,'4798119873','PHP逆引きレシピ 第2版 (PROGRAMMER’S RECiPE)','鈴木 憲治,山田 直明,山本 義之,浅野 仁,櫻井 雄大,安藤 建一','翔泳社','2013-10-22','http://ecx.images-amazon.com/images/I/51bOwVu7n%2BL._SL160_.jpg','http://www.amazon.co.jp/dp/4798119873',1,0,0,'2016-06-09 12:36:20','2016-06-09 12:36:20'),(180,'B00IP549C2','作りながら学ぶ HTML/CSSデザインの教科書','高橋 朋代,森 智佳子','SBクリエイティブ','2013-12-13','http://ecx.images-amazon.com/images/I/41O5tqO%2BSiL._SL160_.jpg','http://www.amazon.co.jp/dp/B00IP549C2',1,0,0,'2016-06-09 12:37:30','2016-06-09 12:37:30'),(181,'4883378403','SQL Server 2012の教科書 開発編','松本 美穂,松本 崇博','ソシム','2012-09-18','http://ecx.images-amazon.com/images/I/51nHhG2Y0pL._SL160_.jpg','http://www.amazon.co.jp/dp/4883378403',1,0,0,'2016-06-09 12:40:01','2016-06-09 12:40:01'),(182,'9784844333937','スッキリわかるSQL入門 ドリル215問付き! スッキリわかるシリーズ','中山 清喬,飯田 理恵子','インプレス','2013-04-19','http://ecx.images-amazon.com/images/I/51LNHnU2wyL._SL160_.jpg','http://www.amazon.co.jp/dp/B00IRRTFNG',1,0,0,'2016-06-09 16:17:56','2016-06-09 16:17:56');
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

-- Dump completed on 2016-06-09 16:49:40
