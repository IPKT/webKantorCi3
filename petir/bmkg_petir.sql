/*
SQLyog Ultimate v8.61 
MySQL - 5.5.5-10.1.19-MariaDB : Database - bmkg_petir
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bmkg_petir` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bmkg_petir`;

/*Table structure for table `tb_beritacuaca` */

DROP TABLE IF EXISTS `tb_beritacuaca`;

CREATE TABLE `tb_beritacuaca` (
  `IDBeritaCuaca` int(11) NOT NULL AUTO_INCREMENT,
  `NoBeritaCuaca` varchar(25) DEFAULT NULL,
  `JumlahCurah` varchar(25) DEFAULT NULL,
  `TmpMax` varchar(25) DEFAULT NULL,
  `TmpMin` varchar(25) DEFAULT NULL,
  `UdaraMax` varchar(25) DEFAULT NULL,
  `UdaraMin` varchar(25) DEFAULT NULL,
  `RHMax` varchar(25) DEFAULT NULL,
  `RHMin` varchar(25) DEFAULT NULL,
  `IDPemohon` int(11) DEFAULT NULL,
  `NIP` char(20) DEFAULT NULL,
  PRIMARY KEY (`IDBeritaCuaca`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_beritacuaca` */

insert  into `tb_beritacuaca`(`IDBeritaCuaca`,`NoBeritaCuaca`,`JumlahCurah`,`TmpMax`,`TmpMin`,`UdaraMax`,`UdaraMin`,`RHMax`,`RHMin`,`IDPemohon`,`NIP`) values (1,'CU/008/IX/DNP-2016','1,1','1,1','1,1','1,1','1,1','1,1','1,1',1,'198903242009111001'),(2,'CU/008/IX/DNP-2017','1','1,1','2','3','4','5','6',2,'198903242009111001');

/*Table structure for table `tb_latlong` */

DROP TABLE IF EXISTS `tb_latlong`;

CREATE TABLE `tb_latlong` (
  `IDLatLong` int(11) NOT NULL AUTO_INCREMENT,
  `DaerahLatLong` varchar(100) DEFAULT NULL,
  `Latitude` varchar(50) DEFAULT NULL,
  `Longitude` varchar(50) DEFAULT NULL,
  `NIP` char(20) DEFAULT NULL,
  PRIMARY KEY (`IDLatLong`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

/*Data for the table `tb_latlong` */

insert  into `tb_latlong`(`IDLatLong`,`DaerahLatLong`,`Latitude`,`Longitude`,`NIP`) values (1,'Bangli','-8.404174','115.363616','198903242009111001'),(2,'Kintamani, Bangli','-8.237748','115.333304','198903242009111001'),(3,'Susut, Bangli','-8.441596','115.338993','198903242009111001'),(4,'Tembuku, Bangli','-8.417091','115.391601','198903242009111001'),(5,'Abiansemal, Badung','-8.528297','115.217206','198903242009111001'),(6,'Kuta, Badung','-8.725267','115.173817','198903242009111001'),(7,'Kuta Selatan, Badung','-8.811659','115.164807','198903242009111001'),(8,'Kuta Utara, Badung','-8.644599','115.159938','198903242009111001'),(9,'Mengwi, Badung','-8.562051','115.177037','198903242009111001'),(10,'Petang, Badung','-8.339070','115.223412','198903242009111001'),(11,'Banjar, Buleleng','-8.235780','115.032715','198903242009111001'),(12,'Buleleng','-8.117298','115.088504','198903242009111001'),(13,'Busungbiu, Buleleng','-8.305062','114.946223','198903242009111001'),(14,'Gerokgak, Buleleng','-8.166601','114.639756','198903242009111001'),(15,'Kubutambahan, Buleleng','-8.154021','115.228657','198903242009111001'),(16,'Sawan, Buleleng','-8.145901','115.170233','198903242009111001'),(17,'Seririt, Buleleng','-8.249782','114.910106','198903242009111001'),(18,'Sukasada, Buleleng','-8.198290','115.117386','198903242009111001'),(19,'Tejakula, Buleleng','-8.133690','115.341043','198903242009111001'),(20,'Denpasar Barat, Denpasar','-8.666777','115.195566','198903242009111001'),(21,'Denpasar Timur, Denpasar','-8.642107','115.246155','198903242009111001'),(22,'Denpasar Selatan, Denpasar','-8.704117','115.225499','198903242009111001'),(23,'Denpasar Utara, Denpasar','-8.626847','115.210085','198903242009111001'),(24,'Blahbatuh, Gianyar','-8.571419','115.308875','198903242009111001'),(25,'Gianyar','-8.531814','115.330666','198903242009111001'),(26,'Payangan, Gianyar','-8.390918','115.249094','198903242009111001'),(27,'Sukawati, Gianyar','-8.600514','115.269362','198903242009111001'),(28,'Tampaksiring, Gianyar','-8.447959','115.305941','198903242009111001'),(29,'Tegallalang, Gianyar','-8.405548','115.286236','198903242009111001'),(30,'Ubud, Gianyar','-8.498766','115.261489','198903242009111001'),(31,'Jembrana','-8.362273','114.636396','198903242009111001'),(32,'Melaya, Jembrana','-8.248319','114.532433','198903242009111001'),(33,'Mendoyo, Jembrana','-8.320908','114.742568','198903242009111001'),(34,'Negara, Jembrana','-8.357377','114.617918','198903242009111001'),(35,'Pekutatan, Jembrana','-8.397054','114.864898','198903242009111001'),(36,'Abang, Karangasem','-8.368083','115.619026','198903242009111001'),(37,'Bebandem, Karangasem','-8.408591','115.540789','198903242009111001'),(38,'Karangasem','-8.448930','115.614549','198903242009111001'),(39,'Kubu, Karangasem','-8.267033','115.512507','198903242009111001'),(40,'Manggis, Karangasem','-8.492180','115.525191','198903242009111001'),(41,'Rendang, Karangasem','-8.378192','115.435632','198903242009111001'),(42,'Selat, Karangasem','-8.416490','115.479104','198903242009111001'),(43,'Sidemen, Karangasem','-8.485418','115.438360','198903242009111001'),(44,'Banjarangkan, Klungkung','-8.518317','115.372126','198903242009111001'),(45,'Dawan, Klungkung','-8.538927','115.445217','198903242009111001'),(46,'Klungkung','-8.541726','115.402659','198903242009111001'),(47,'Nusa Penida, Klungkung','-8.734689','115.536937','198903242009111001'),(48,'Baturiti, Tabanan','-8.339651','115.177223','198903242009111001'),(49,'Kediri, Tabanan','-8.582983','115.124215','198903242009111001'),(50,'Kerambitan, Tabanan','-8.533254','115.085793','198903242009111001'),(51,'Marga, Tabanan','-8.461743','115.168604','198903242009111001'),(52,'Penebel, Tabanan','-8.394696','115.121191','198903242009111001'),(53,'Pupuan, Tabanan','-8.359942','115.005739','198903242009111001'),(54,'Selemadeg, Tabanan','-8.448241','115.041994','198903242009111001'),(55,'Selemadeg Timur, Tabanan','-8.482754','115.063215','198903242009111001'),(56,'Selemadeg Barat, Tabanan','-8.455981','114.972169','198903242009111001'),(57,'Tabanan','-8.542039','115.121262','198903242009111001');

/*Table structure for table `tb_pemohon` */

DROP TABLE IF EXISTS `tb_pemohon`;

CREATE TABLE `tb_pemohon` (
  `IDPemohon` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPemohon` varchar(50) DEFAULT NULL,
  `PekerjaanPemohon` varchar(15) DEFAULT NULL,
  `PerBidPemohon` varchar(50) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `KodePosPemohon` char(10) DEFAULT NULL,
  `KartuIdentitas` char(3) DEFAULT NULL,
  `NoKartu` char(25) DEFAULT NULL,
  `TeleponPemohon` char(15) DEFAULT NULL,
  `JenisData` varchar(50) DEFAULT NULL,
  `DiperUtkPemohon` varchar(100) DEFAULT NULL,
  `TGLPemohon` char(2) DEFAULT NULL,
  `BLNPemohon` char(2) DEFAULT NULL,
  `THNPemohon` char(4) DEFAULT NULL,
  `JAMPemohon` char(2) DEFAULT NULL,
  `MNTPemohon` char(2) DEFAULT NULL,
  `IDLatLong` int(11) DEFAULT NULL,
  `NIP` char(20) DEFAULT NULL,
  `NoSurat` varchar(50) DEFAULT NULL,
  `NoBeritaPetir` varchar(50) DEFAULT NULL,
  `NoKwitansi1` varchar(50) DEFAULT NULL,
  `JumlahKWa` varchar(15) DEFAULT NULL,
  `TerbilangKWa` varchar(100) DEFAULT NULL,
  `NoKwitansi2` varchar(50) DEFAULT NULL,
  `JumlahKWb` varchar(15) DEFAULT NULL,
  `TerbilangKWb` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDPemohon`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pemohon` */

insert  into `tb_pemohon`(`IDPemohon`,`NamaPemohon`,`PekerjaanPemohon`,`PerBidPemohon`,`Alamat`,`KodePosPemohon`,`KartuIdentitas`,`NoKartu`,`TeleponPemohon`,`JenisData`,`DiperUtkPemohon`,`TGLPemohon`,`BLNPemohon`,`THNPemohon`,`JAMPemohon`,`MNTPemohon`,`IDLatLong`,`NIP`,`NoSurat`,`NoBeritaPetir`,`NoKwitansi1`,`JumlahKWa`,`TerbilangKWa`,`NoKwitansi2`,`JumlahKWb`,`TerbilangKWb`) values (1,'tes','Pegawai Swasta','tes','tes','123456','KTP','1234567890','1234567890','tes','tes','01','01','2016','01','01',1,'198903242009111001','GF.301/064/OPS/DNP/IX/2016','CU/008/IX/DNP-2016','GF. 301/36a/OPS /DNP/IX/2016','100.000','Seratus Ribu Rupiah','GF. 301 /36a/OPS /DNP/IX/2016','200.000','Dua Ratus Ribu Rupiah'),(2,'tes2','Pegawai Negeri','tes2','tes2','123457','SIM','1234567891','1234567891','tes2','tes2','15','11','2016','02','02',2,'198903242009111001','GF.301/064/OPS/DNP/IX/2017','PE/027/IX/DNP-2017','GF. 301/36a/OPS /DNP/IX/2017','100.000','Seratus Ribu Rupiah','GF. 301 /36a/OPS /DNP/IX/2017','200.000','Dua Ratus Ribu Rupiah');

/*Table structure for table `tb_pengguna` */

DROP TABLE IF EXISTS `tb_pengguna`;

CREATE TABLE `tb_pengguna` (
  `NIP` char(20) NOT NULL,
  `User` varchar(25) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `KataSandi` varchar(25) DEFAULT NULL,
  `Statuspengguna` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengguna` */

insert  into `tb_pengguna`(`NIP`,`User`,`Nama`,`KataSandi`,`Statuspengguna`) values ('','','','','Admin'),('1234','admin','Admin','admin','Admin'),('195909231982031001','anik','I GST NGR. ANIK ARYANTO','1234','Admin'),('195912311980032001','wayan','NI WYN PUTU DARMIYANI','1234','Admin'),('196001021981031000','asrori','Asrori','1234','Admin'),('196105301984032001','winarti','SRI WINARTI, SP','1234','Admin'),('196212311982031008','nurasin','I NYOMAN NURASIN','1234','Admin'),('196506251990031001','artana','I MADE ARTANA','1234','Admin'),('196511251987111001','artajaya','I GD MADE  ARTAJAYA','1234','Admin'),('196605121989031001','astika','I MADE ASTIKA, SP','1234','Admin'),('196807201990031003','ketut','I KETUT SUDIARTA','1234','Admin'),('197212301996031001','asnawa','I WYN SUKA ASNAWA, SP','1234','Admin'),('197312032008122001','switriasih','NI NYM SWITRIASIH, SE','1234','Admin'),('198205202003121002','sodikin','SODIKIN','1234','Admin'),('198408182009112001','diah','NI PT. DIAH AGUSTIN P, ST','1234','Admin'),('198612012008121001','dwi','DWI KARYADI PRIYANTO, S.SI','1234','Admin'),('198706082008122001','juniasih','NI KADE JUNIASIH, SE','1234','Admin'),('198812252009111001','kris','I MD KRIS ADI ASTRA,S.Si','1234','Admin'),('198903242009111001','melky','MELKY ADI KURNIAWAN, S. SI','1234','Admin'),('198912292009111001','dedy','I PT. DEDY PRATAMA, S.ST','1234','Admin'),('199002242012101002','franky','FRANKY FERARY, S.Tr','1234','Admin'),('199112202012102001','desi','NI LUH DESI PURNAMI, S.ST','1234','Admin'),('199210022013121000','arta','PANDE KM GD ARTA NEGARA','1234','Admin'),('199405062013121001','yusuf','YUSUF NUR PERKASA','1234','Admin'),('199411282013122001','ganis','GANIS RIANDHITA','1234','Admin'),('199505022014112001','ika','IKA SULFIANA PUTRI','1234','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
