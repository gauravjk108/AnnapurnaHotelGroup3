-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: school
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `Date` date DEFAULT NULL,
  `Student_ID` int(11) NOT NULL,
  `Present` varchar(20) DEFAULT NULL,
  KEY `Student_ID` (`Student_ID`),
  CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
INSERT INTO `attendance` VALUES ('2020-06-12',110,'True'),('2020-08-13',111,'True'),('2020-11-20',112,'False'),('2020-10-13',113,'True'),('2020-03-24',114,'False'),('2020-12-15',115,'True'),('2020-02-26',116,'False'),('2020-03-25',117,'True'),('2020-05-23',118,'False'),('2020-02-22',119,'True'),('2020-07-13',120,'True'),('2020-03-13',121,'False'),('2020-08-13',122,'False'),('2020-06-13',124,'True'),('2020-01-10',125,'True'),('2020-12-11',126,'True'),('2020-06-13',127,'False'),('2020-04-23',128,'True'),('2020-10-11',129,'False'),('2020-08-19',130,'True'),('2020-05-27',131,'True'),('2020-05-28',132,'False'),('2020-06-27',130,'True');
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `Staff_ID` int(11) NOT NULL,
  `Staff_Name` varchar(50) DEFAULT NULL,
  `Department` varchar(30) DEFAULT NULL,
  `Work` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Staff_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (420,'Ram Ghaire','Finance','Accountant'),(421,'Shyam Dahal','IT','Mechanic'),(422,'Hari Adhikari','Security','Security Guard'),(423,'Satish Sharma','Sports','TT Coach'),(424,'Ashim Awale','Sports','Basketball Coach'),(425,'Sisan Baniya','Music','Guitar teacher'),(426,'Ananda Khadka','Music','Pianist'),(427,'Ramu Dahal','Security','Security Guard'),(428,'Bishal Baniya','Transportation','Driver'),(429,'Puran Giri','Transportation','Conductor'),(430,'Narayan Gopal','Transportation','Driver'),(431,'Niskarsha Thapa','Transportation','Conductor'),(432,'Aazad Khadka','Student Services','Counsellor'),(433,'Manpreet Shrestha','Finance','Managing Director'),(434,'Sujata Khadka','Student Services','Counsellor'),(435,'Reshma Ghimire','IT','IT Head'),(436,'Ritik Lama','Student Services','DI'),(437,'LuffyPirate','Transportation','Driver'),(438,'Tony Chopper','Transportation','Conductor'),(439,'Nico Robin','Library','Book keeper');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exam` (
  `Grade` int(11) NOT NULL,
  `Subject` varchar(20) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Start_time` time DEFAULT NULL,
  `End_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam`
--

LOCK TABLES `exam` WRITE;
/*!40000 ALTER TABLE `exam` DISABLE KEYS */;
INSERT INTO `exam` VALUES (1,'Social','2020-05-23','08:00:00','10:00:00'),(1,'Science','2020-05-24','09:00:00','11:00:00'),(2,'Maths','2020-05-23','08:00:00','10:00:00'),(2,'English','2020-05-24','09:00:00','11:00:00'),(3,'Nepali','2020-05-23','08:00:00','10:00:00'),(3,'English','2020-05-23','10:00:00','12:00:00'),(4,'Social','2020-05-23','09:00:00','11:00:00'),(4,'Science','2020-05-24','08:00:00','10:00:00'),(5,'Maths','2020-05-25','09:00:00','12:00:00'),(5,'English','2020-05-26','08:00:00','11:30:00'),(6,'Nepali','2020-05-25','08:00:00','11:00:00'),(6,'Social','2020-05-26','07:00:00','10:00:00'),(7,'Science','2020-05-28','09:00:00','12:00:00'),(7,'Maths','2020-05-29','09:00:00','12:00:00'),(8,'Nepali','2020-05-23','08:30:00','11:30:00'),(8,'English','2020-05-24','09:30:00','12:30:00'),(9,'Social','2020-05-28','08:00:00','10:00:00'),(9,'Science','2020-05-24','08:00:00','11:00:00'),(10,'Maths','2020-05-25','09:00:00','12:00:00'),(10,'Nepali','2020-05-29','10:00:00','12:00:00');
/*!40000 ALTER TABLE `exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees` (
  `Tuition_fees` int(11) DEFAULT NULL,
  `Student_ID` int(11) NOT NULL,
  `Amount_paid` int(11) DEFAULT NULL,
  KEY `Student_ID` (`Student_ID`),
  CONSTRAINT `fees_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees`
--

LOCK TABLES `fees` WRITE;
/*!40000 ALTER TABLE `fees` DISABLE KEYS */;
INSERT INTO `fees` VALUES (5000,110,3000),(5000,111,2000),(5000,112,3200),(5000,113,3600),(5000,114,2500),(5000,115,1000),(5000,116,4650),(5000,118,2000),(5000,119,1300),(5000,120,1500),(5000,121,4000),(5000,122,4500),(5000,123,4500),(5000,124,3000),(5000,125,3200),(5000,126,4600),(5000,127,4000),(5000,128,1000),(5000,129,4900),(5000,130,3000);
/*!40000 ALTER TABLE `fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `library`
--

DROP TABLE IF EXISTS `library`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `library` (
  `Book_code` int(11) NOT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Book_Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Book_code`),
  KEY `Student_ID` (`Student_ID`),
  CONSTRAINT `library_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `library`
--

LOCK TABLES `library` WRITE;
/*!40000 ALTER TABLE `library` DISABLE KEYS */;
INSERT INTO `library` VALUES (393,110,'2020-05-21','AI is Bad'),(394,111,'2020-04-22','Power of Now'),(395,112,'2020-04-29','Sense of an Ending'),(396,113,'2020-05-01','Infinite'),(398,115,'2020-05-13','Learn Vocabs'),(399,116,'2020-03-31','Computation'),(400,117,'2020-03-25','Life cycle of ant'),(401,118,'2020-02-11','Geography of Europe'),(402,119,'2020-06-01','Grammar quiz'),(403,120,'2020-06-11','Genghis Khan'),(404,121,'2020-04-25','Qbasic'),(405,122,'2020-03-10','Map of Nepal'),(406,123,'2020-05-25','Karatsuba'),(407,124,'2020-06-21','Mutation'),(408,125,'2020-04-19','Circle'),(409,126,'2020-05-11','Scaling Everest'),(410,127,'2020-02-20','War of Kalapani'),(411,128,'2020-05-27','Enlightenment'),(412,129,'2020-04-04','Greater Nepal'),(413,130,'2020-05-31','You can win'),(414,110,'2020-04-22','You can lose'),(415,111,'2020-02-23','You are hero');
/*!40000 ALTER TABLE `library` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `Student_ID` int(11) DEFAULT NULL,
  `Social_Marks` int(11) DEFAULT NULL,
  `Science_Marks` int(11) DEFAULT NULL,
  `Maths_Marks` int(11) DEFAULT NULL,
  `English_Marks` int(11) DEFAULT NULL,
  `Nepali_Marks` int(11) DEFAULT NULL,
  KEY `Student_ID` (`Student_ID`),
  CONSTRAINT `result_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
INSERT INTO `result` VALUES (110,87,98,100,92,82),(111,82,96,100,90,81),(112,83,75,86,89,65),(113,76,81,59,88,76),(114,66,72,55,94,82),(115,80,91,99,81,82),(116,50,50,60,77,69),(117,77,84,70,83,50),(118,76,88,99,83,61),(119,89,65,99,83,84),(120,59,50,59,61,80),(121,81,90,88,89,79),(122,60,66,80,88,79),(123,53,88,81,87,80),(124,97,100,100,48,49),(126,77,80,84,90,74),(127,66,90,99,89,75),(128,80,81,82,83,70),(129,64,89,99,82,77),(130,79,92,78,88,80);
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `TeacherNumber` int(11) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Bonus` int(11) DEFAULT NULL,
  KEY `TeacherNumber` (`TeacherNumber`),
  CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`TeacherNumber`) REFERENCES `teachers` (`TeacherNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES (1,30000,2000),(2,20000,5000),(3,50000,3000),(4,15000,1500),(5,25000,3000),(6,22000,3500),(7,11000,3000),(8,13000,1300),(9,55000,12000),(10,40000,4000),(11,60000,6000),(12,29000,2900),(13,15000,7000),(14,89000,7000),(15,34000,6000),(16,32000,5000),(17,45000,4000),(18,43000,1000),(19,19000,9000),(20,35000,6000),(22,51000,7300),(23,19000,3400);
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `Student_ID` int(11) NOT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Surname` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Phone_Number` int(10) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (110,'Aazad','Khadka','2000-02-07',4437829,'DC2'),(111,'Sakura','Shrestha','2000-08-27',4456903,'DC2'),(112,'Gaurav','Kunwar','2000-01-01',4423901,'DC3'),(113,'Jimmy','Shrestha','2000-04-21',4423855,'DC3'),(114,'Nandita','Kc','1999-03-30',4456321,'DC4'),(115,'Hrithik','Basnet','1996-09-26',4439876,'DC4'),(116,'Niraj','Adhikari','2001-04-22',4435698,'DC5'),(117,'Ram','Dahal','2000-05-29',4423983,'DC5'),(118,'Hari','Prasad','2000-06-29',4432156,'DC6'),(119,'Satish','Khatri','2000-06-02',4465890,'DC6'),(120,'Shankar','Khatri','2000-02-11',4456980,'DC7'),(121,'Sarita','Sharma','2000-10-13',4431587,'DC7'),(122,'Rama','Khatri','2000-06-02',4431567,'DC8'),(123,'Reshma','Thapa','2000-07-14',4459813,'DC8'),(124,'Sita','Adhikari','2000-09-15',4431765,'DC9'),(125,'Sunny','Deol','2000-12-31',4431245,'DC9'),(126,'Ananda','Kuikel','2000-01-27',4489312,'DC10'),(127,'Sanab','Gurung','2000-05-22',4429643,'DC10'),(128,'Sumi','Gurung','2000-01-17',4431456,'DC11'),(129,'Nishal','Chaudhary','2000-06-11',4512478,'DC11'),(130,'Sikhaa','Basnet','2000-03-22',4321984,'DC12'),(131,'Lalu','Singh','2004-04-04',4456009,'DC12'),(132,'Lila','Maya','2002-05-23',4426109,'DC12');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_evaluation`
--

DROP TABLE IF EXISTS `teacher_evaluation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_evaluation` (
  `TeacherNumber` int(11) NOT NULL AUTO_INCREMENT,
  `Rating` enum('1','2','3','4','5','6','7','8','9','10') DEFAULT NULL,
  `Student_ID` int(11) NOT NULL,
  KEY `TeacherNumber` (`TeacherNumber`),
  KEY `Student_ID` (`Student_ID`),
  CONSTRAINT `teacher_evaluation_ibfk_1` FOREIGN KEY (`TeacherNumber`) REFERENCES `teachers` (`TeacherNumber`),
  CONSTRAINT `teacher_evaluation_ibfk_2` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_evaluation`
--

LOCK TABLES `teacher_evaluation` WRITE;
/*!40000 ALTER TABLE `teacher_evaluation` DISABLE KEYS */;
INSERT INTO `teacher_evaluation` VALUES (1,'8',110),(2,'9',111),(3,'5',112),(4,'8',113),(5,'7',114),(6,'3',115),(5,'9',116),(1,'9',117),(2,'6',118),(3,'7',119),(4,'7',120),(5,'10',121),(6,'5',122),(7,'7',123),(7,'8',124),(8,'5',125),(8,'8',125),(9,'9',126),(9,'4',127),(11,'5',130),(11,'7',110),(12,'9',111),(12,'9',112),(13,'3',113),(13,'8',114),(14,'9',115),(14,'7',116),(15,'10',117),(16,'5',118),(16,'5',119),(17,'9',120),(17,'7',121),(18,'8',122),(18,'8',123),(19,'6',124),(19,'9',125),(20,'10',126),(20,'5',127);
/*!40000 ALTER TABLE `teacher_evaluation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `TeacherNumber` int(11) NOT NULL,
  `Teacher_Name` varchar(20) DEFAULT NULL,
  `Phone_Number` int(20) DEFAULT NULL,
  `Subject` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`TeacherNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'Rizzu Prasad',4236891,'Maths'),(2,'Dipson Shrestha',4476102,'Science'),(3,'Kritika Rai',4436291,'Social'),(4,'Sumanta Silwal',4410972,'English'),(5,'Prakash Rao',4408761,'Nepali'),(6,'Dhurba Thapa',4439701,'Maths'),(7,'Juna Thapa',4417602,'Science'),(8,'Dikila Sherpa',4470412,'Social'),(9,'Sarita Lama',4498103,'English'),(10,'Radha Gurung',4144679,'Nepali'),(11,'Ishwor Pokhrel',4230911,'Maths'),(12,'Kakashi Hatakae',4401340,'Science'),(13,'Sagar Siwa',4132098,'Social'),(14,'Ram Dahal',4450991,'English'),(15,'Sonu Gurung',4431765,'Nepali'),(16,'Purnima Rai',4344512,'Maths'),(17,'Suman Shrestha',4431225,'Science'),(18,'Shrilekh Pun',4411345,'Social'),(19,'Kumar Shah',4423112,'English'),(20,'Kopila Oli',4431556,'Nepali'),(22,'Aadi Ray',4326712,'Optional Maths'),(23,'James Rai',4344722,'Economics'),(24,'Iruka Sensei',4436732,'Account');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-31 11:22:40
