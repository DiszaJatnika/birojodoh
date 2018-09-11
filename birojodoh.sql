# Host: localhost  (Version: 5.5.5-10.1.21-MariaDB)
# Date: 2018-06-03 14:40:46
# Generator: MySQL-Front 5.3  (Build 4.128)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "akun"
#

CREATE TABLE `akun` (
  `idakun` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `namadepan` varchar(50) DEFAULT NULL,
  `namabelakang` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `tempatlahir` varchar(255) NOT NULL DEFAULT '',
  `tanggallahir` date NOT NULL DEFAULT '0000-00-00',
  `goldarah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `hobi` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `pendidikanterakhir` varchar(20) DEFAULT NULL,
  `bio` text,
  PRIMARY KEY (`idakun`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "akun"
#

INSERT INTO `akun` VALUES (1,'isni','Isni','Nurjanah','sukma.jpg','P','Tasikmalaya','2018-05-09','AB','Tasikmalaya','Tasikmalaya','Jawa Barat','Ngoding','Lajang','D3','Terimakasih Ya Allah '),(3,'i','Ikmal','Muhajir','ikmal.jpg','L','tasik','2018-05-16','o',NULL,NULL,'jawa barat',NULL,'Lajang',NULL,'Be your self'),(4,'latifah','Latifah','','adela.png','P','bandung','0000-00-00','o',NULL,NULL,'jawa barat',NULL,'Lajang',NULL,'Dia Gak Peka'),(6,'jatnika','Jatnika','','rahman.jpg','L','jakarta','0000-00-00','o',NULL,NULL,'jawa barat',NULL,'Lajang',NULL,'Kumaha Abi'),(7,'siti','Siti','Inka Mufsidah','siti.jpg','P','','0000-00-00','o',NULL,NULL,'jawa barat',NULL,'Lajang',NULL,'Be your self'),(8,'risma','Risma','Nurfatma','user.png','P','','0000-00-00','o',NULL,NULL,'jawa barat',NULL,'Lajang',NULL,'Be your self'),(9,'admin','Sukma ','Intan','admin.png','L','tasik','1997-10-14','B','jl drs moch hatta','Tasikmalaya ','tasik','','Menikah','S1/D4','Bener na ge te nyangka'),(10,'sahrul','Syahrul','Irfan','keutamaan solat duha.jpg','L','','0000-00-00',NULL,NULL,NULL,NULL,NULL,'Lajang',NULL,NULL);

#
# Structure for table "love"
#

CREATE TABLE `love` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `likers` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

#
# Data for table "love"
#

INSERT INTO `love` VALUES (1,'siti','0'),(3,'risma','0'),(4,'admin','0'),(5,'disza','0'),(6,'i','0'),(7,'latifah','0'),(8,'jatnika','0'),(32,'disza','i'),(33,'admin','disza'),(34,'risma','sahrul'),(35,'latifah','sahrul');

#
# Structure for table "pesan"
#

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `privacy` varchar(255) DEFAULT NULL,
  `idpengirim` varchar(11) NOT NULL DEFAULT '0',
  `idpenerima` varchar(11) NOT NULL DEFAULT '0',
  `isi` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

#
# Data for table "pesan"
#

INSERT INTO `pesan` VALUES (71,'i',NULL,'i','isni','hai'),(72,'isni',NULL,'isni','i','iya a');

#
# Structure for table "tiket"
#

CREATE TABLE `tiket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idpengirim` varchar(255) DEFAULT NULL,
  `jenis` int(11) DEFAULT '0',
  `judul` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `jawab` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "tiket"
#

INSERT INTO `tiket` VALUES (2,'isni',0,'Cara Logout','Bagaimana cara logout','Klik logout di sebelah kanan atas'),(3,'i',2,'Mengubah Nama Username','Izin ubah username saya menjadi ikmal','kami telah mengubah nama username anda,. :)');

#
# Structure for table "tmp_pesan"
#

CREATE TABLE `tmp_pesan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `pengirim` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `lihat` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tmp_pesan"
#

INSERT INTO `tmp_pesan` VALUES (7,'i','i','isni','tetew','1'),(8,'isni','i','isni','tetew','1'),(9,'isni','isni','i','tetew','1'),(10,'i','isni','i','tetew','1'),(11,'isni','isni','i','tetew','1'),(12,'i','isni','i','tetew','1'),(13,'isni','isni','i','tetew','1'),(14,'i','isni','i','tetew','1'),(15,'i','i','isni','uy uy uy','1'),(16,'isni','i','isni','uy uy uy','1'),(17,'i','i','isni','hai','1'),(18,'isni','i','isni','hai','1'),(19,'i','i','isni','hai','1'),(20,'isni','i','isni','hai','1'),(21,'isni','isni','i','iya a','1'),(22,'i','isni','i','iya a','1');

#
# Structure for table "user"
#

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `online` int(11) NOT NULL DEFAULT '1',
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (3,'i','i',1,NULL),(6,'latifah','latifah',0,NULL),(7,'jatnika','jatnika',1,NULL),(10,'siti','siti',1,NULL),(11,'risma','risma',0,NULL),(12,'isni','isni',1,NULL),(13,'admin','admin',0,'admin'),(14,'sahrul','sahrul',1,NULL);
