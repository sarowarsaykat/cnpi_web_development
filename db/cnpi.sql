/*
SQLyog Ultimate v12.09 (32 bit)
MySQL - 8.0.30 : Database - cnpi_project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cnpi_project` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `cnpi_project`;

/*Table structure for table `academic_calendars` */

DROP TABLE IF EXISTS `academic_calendars`;

CREATE TABLE `academic_calendars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_names` text,
  `pdf` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `academic_calendars` */

insert  into `academic_calendars`(`id`,`file_names`,`pdf`,`created_at`) values (3,'Academic Calender 2022-23','cal.pdf','2023-12-27 22:01:33'),(4,'Academic Calender 2023-24','cal_2.pdf','2023-12-27 22:01:54');

/*Table structure for table `all_students_info` */

DROP TABLE IF EXISTS `all_students_info`;

CREATE TABLE `all_students_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_name` text,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `session` varchar(50) DEFAULT NULL,
  `shift` varchar(50) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `registration` varchar(50) DEFAULT NULL,
  `details` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_approved` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `all_students_info` */

insert  into `all_students_info`(`id`,`student_name`,`email`,`phone`,`gender`,`department`,`session`,`shift`,`roll`,`registration`,`details`,`created_at`,`is_approved`) values (5,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(6,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(7,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(8,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(9,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(10,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(11,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(12,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(13,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(14,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(15,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(16,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(17,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(18,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(19,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(20,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(21,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(22,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(23,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(24,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(25,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(26,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(27,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(28,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(29,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(30,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(31,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(32,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(33,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(34,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(35,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(36,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(37,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(38,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(39,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(40,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(41,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(42,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(43,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(44,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(45,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(46,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(47,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(48,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(49,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(50,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(51,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(52,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(53,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(54,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(55,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(56,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(57,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(58,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(59,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(60,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(61,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(62,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(63,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(64,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(65,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(66,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(67,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(68,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(69,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(70,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(71,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(72,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(73,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(74,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1),(75,'Sarowar Saykat','sarowarsaykat@gmail.com','01908032671','Male','Computer','2019-2020','First Shift','416850','1502045728','The time that is spent in schools and colleges for education is called student life. It is the time to sow seeds of future life. The main duty of students is the acquired knowledge. Because has is the future wish and hope of the nation. So he should prepare himself so that he can serve the people when he is grown up. Student life is not the proper time to do things. It is the time to ‘prepare’ for things to be done in future. Students life Is the proper time to build one’s character. A good man is loved and respected by all. A student should try to become a good man in his future life. In this period students should acquire the qualities of being truthful, honest and active. A student should avoid nasty politics. The success of future life depends on student life. So student life is important for life. Every student should use this important time properly.','2023-12-24 15:29:02',1),(76,'Goljar Hasan','goljarhasan@gmail.com','01735537637','Male','Mecatronics','2017-2018','Secound Shift','542464','1503235235','Student life is one of the most memorable phases of a person’s life. The phase of student life builds the foundation of our life. In student life, we do not just learn from books. We learn to grow emotionally, physically, philosophically as well as socially. Thus, in this student life essay, we will learn its essence and importance.','2023-12-24 16:23:29',1),(77,'Kaosar ali','almadhasan@gmail.com','092502579852','Male','CVL','2015-2016','First Shift','416850','1503235235','srhemjdtu,tduj','2023-12-25 01:06:30',1),(78,'Asik','abirhasan@gmail.com','378645844','Male','Computer','2016-2017','First Shift','473535','1503235235','xndfns','2023-12-25 01:44:53',1),(79,'asikur ','asikufr@gmail.com','874663743','Female','Electronics','2014-2015','First Shift','6435','','dfgkf;lb','2023-12-31 00:30:41',1),(80,'kabil hasan','kabil@gmail.com','3264736','Male','RAC','2022-2023','Secound Shift','416090','2734784822','fdhdrjfdnjdf','2023-12-31 00:31:37',1),(81,'monayem','monayem@gmail.com','04298752552','Male','Food','2012-2013','Secound Shift','414270','365746454','hdhdfnjdrf','2023-12-31 00:32:34',1);

/*Table structure for table `banners` */

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `banners` */

insert  into `banners`(`id`,`photo`,`created_at`) values (13,'1.jpg','2024-01-04 16:04:46'),(14,'LMC_20230615_122032_?SamsungGalaxyS22UltraBy❗ Ezazul .jpg','2024-01-04 16:05:21'),(15,'332726422_167428526152564_4966141801485330505_n.jpg','2024-01-04 16:05:50');

/*Table structure for table `class_routines` */

DROP TABLE IF EXISTS `class_routines`;

CREATE TABLE `class_routines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_names` text,
  `pdf` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `class_routines` */

insert  into `class_routines`(`id`,`file_names`,`pdf`,`created_at`) values (1,'1st Semister Class routine','class_1.pdf','2023-12-28 00:44:08'),(2,'2nd Semister Class routine','class_2.pdf','2023-12-28 00:50:26');

/*Table structure for table `contact_us` */

DROP TABLE IF EXISTS `contact_us`;

CREATE TABLE `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `contact_us` */

insert  into `contact_us`(`id`,`name`,`email`,`number`,`message`,`created_at`) values (2,'Sarowar Saykat','almadhasan@gmail.com','01908032671','i am sarowar jaman saykat my problem is.......\r\n','2024-01-04 16:59:44'),(3,'kaosar','wwow5943@gmail.com','01836732718','shgmfgh','2024-01-04 17:02:00');

/*Table structure for table `department_names` */

DROP TABLE IF EXISTS `department_names`;

CREATE TABLE `department_names` (
  `id` int NOT NULL AUTO_INCREMENT,
  `department` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `department_names` */

insert  into `department_names`(`id`,`department`,`created_at`) values (3,'RAC','2023-12-23 17:56:21'),(4,'Electrical','2023-12-23 17:56:57'),(5,'Electronics','2023-12-23 17:57:10'),(6,'Food','2023-12-23 17:57:22'),(7,'Mecatronics','2023-12-23 17:57:34'),(8,'Computer','2023-12-23 21:51:06');

/*Table structure for table `general_notices` */

DROP TABLE IF EXISTS `general_notices`;

CREATE TABLE `general_notices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_names` text,
  `pdf` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `general_notices` */

insert  into `general_notices`(`id`,`file_names`,`pdf`,`created_at`) values (1,'General Notice 1','general_notice.pdf','2023-12-28 18:31:50');

/*Table structure for table `latest_news` */

DROP TABLE IF EXISTS `latest_news`;

CREATE TABLE `latest_news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `news` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `latest_news` */

insert  into `latest_news`(`id`,`news`,`created_at`) values (1,'বন্ধু রা তোমরা কেমন আছো কাজ কি হবে আজকেই।','2023-12-26 18:44:22'),(2,'আজ খেলা হবে ।','2023-12-26 19:00:18'),(3,'বন্ধু রা তোমরা কেমন আছো কাজ কি হবেই আজকেই।','2023-12-31 00:04:19');

/*Table structure for table `old_students_info` */

DROP TABLE IF EXISTS `old_students_info`;

CREATE TABLE `old_students_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_name` text,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `session` varchar(50) DEFAULT NULL,
  `shift` varchar(50) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `registration` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `is_approved` tinyint DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `old_students_info` */

insert  into `old_students_info`(`id`,`student_name`,`email`,`phone`,`gender`,`department`,`session`,`shift`,`roll`,`registration`,`designation`,`company_name`,`details`,`is_approved`,`created_at`) values (1,'Kaosar ali','kaosarali@gmail.com','018765436572','Male','Electronics','2010-2011','Secound Shift','473535','4356869707','Jr. Software Engineer	','Durbar Software','thsgjdyjt',NULL,'2023-12-25 00:31:03');

/*Table structure for table `photo_gallerys` */

DROP TABLE IF EXISTS `photo_gallerys`;

CREATE TABLE `photo_gallerys` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `photo_gallerys` */

insert  into `photo_gallerys`(`id`,`photo`,`created_at`) values (4,'image-3.jpg','2023-12-26 17:54:39'),(5,'image-5.jpg','2023-12-26 17:55:01'),(6,'image-6.jpg','2023-12-26 17:57:03'),(7,'image-4.jpg','2023-12-26 17:57:20'),(8,'download (1).jpg','2023-12-26 18:01:17'),(9,'download (2).jpg','2023-12-26 18:01:30'),(10,'images (1).jpg','2023-12-26 18:01:54'),(11,'download.jpg','2023-12-31 00:03:35');

/*Table structure for table `probidhans` */

DROP TABLE IF EXISTS `probidhans`;

CREATE TABLE `probidhans` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_names` text,
  `pdf` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `probidhans` */

insert  into `probidhans`(`id`,`file_names`,`pdf`,`created_at`) values (1,'Probidhan 2023','probidhan.pdf','2023-12-28 17:18:13'),(2,'Grading Point','probidhan_2.pdf','2023-12-28 17:18:51');

/*Table structure for table `results` */

DROP TABLE IF EXISTS `results`;

CREATE TABLE `results` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_names` text,
  `pdf` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `results` */

insert  into `results`(`id`,`file_names`,`pdf`,`created_at`) values (3,'1st Semister Result','result.pdf','2023-12-28 18:51:36');

/*Table structure for table `stipneds` */

DROP TABLE IF EXISTS `stipneds`;

CREATE TABLE `stipneds` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_names` text,
  `pdf` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `stipneds` */

insert  into `stipneds`(`id`,`file_names`,`pdf`,`created_at`) values (1,'STEP Stipend Notice 1','Stipend.pdf','2023-12-28 19:34:39');

/*Table structure for table `stuffs_info` */

DROP TABLE IF EXISTS `stuffs_info`;

CREATE TABLE `stuffs_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stuff_name` text,
  `designation` text,
  `phone_no` varchar(50) DEFAULT NULL,
  `details` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `stuffs_info` */

insert  into `stuffs_info`(`id`,`stuff_name`,`designation`,`phone_no`,`details`,`created_at`) values (1,'almad alom','designation','01761835001','hobe hobe khala hobe','2023-12-23 17:52:15'),(2,'Md. Sanaul Islam','designation','01761835001','amar sonar banla ami tomai valo bashi','2023-12-23 17:55:33');

/*Table structure for table `syllebus` */

DROP TABLE IF EXISTS `syllebus`;

CREATE TABLE `syllebus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_names` text,
  `pdf` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `syllebus` */

insert  into `syllebus`(`id`,`file_names`,`pdf`,`created_at`) values (1,'8th Semister Syllebus','Syllebus_2.pdf','2023-12-28 16:45:18');

/*Table structure for table `teachers_info` */

DROP TABLE IF EXISTS `teachers_info`;

CREATE TABLE `teachers_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `teacher_name` text,
  `department` text,
  `designation` text,
  `phone_no` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `details` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `teachers_info` */

insert  into `teachers_info`(`id`,`teacher_name`,`department`,`designation`,`phone_no`,`details`,`created_at`) values (2,'Sarowar Saykat','Department','designation','01355444785','hobe hobe hoye jabe','2023-12-23 22:59:50'),(3,'Goljar','Department','designation','01854627353','chapainawabgonj polytechnic institute','2023-12-23 23:01:49'),(4,'Abdul Mozid','Computer','Instractor','0190808735','euryjhrjeyketjrwjnsrymn','2023-12-25 01:01:44');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`created_at`) values (1,'Sarowar Saykat','sarowarsaykat@gmail.com','1234asdf','2023-12-22 22:41:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
