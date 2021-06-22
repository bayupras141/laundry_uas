/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ uas_laundry /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE uas_laundry;

DROP TABLE IF EXISTS detail_transaksi;
CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `transaksi_id` int(11) DEFAULT NULL,
  `paket_id` int(11) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `transaksi_id` (`transaksi_id`),
  KEY `paket_id` (`paket_id`),
  CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id_transaksi`),
  CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS member;
CREATE TABLE `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(100) DEFAULT NULL,
  `alamat_member` text DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `telp_member` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS paket;
CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_paket` enum('kiloan','selimut','bedcover','kaos','lain') DEFAULT NULL,
  `nama_paket` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS transaksi;
CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `kode_invoice` varchar(100) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `batas_waktu` datetime DEFAULT NULL,
  `tgl_pembayaran` datetime DEFAULT NULL,
  `status` enum('baru','proses','selesai','diambil') DEFAULT NULL,
  `status_bayar` enum('dibayar','belum') DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `member_id` (`member_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`id_member`),
  CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS user;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4;

INSERT INTO detail_transaksi(id_detail,transaksi_id,paket_id,qty,total_harga,keterangan,total_bayar) VALUES(10,34,4,9,135000,NULL,150000),(11,38,4,9,81000,NULL,100000);

INSERT INTO member(id_member,nama_member,alamat_member,jenis_kelamin,telp_member) VALUES(11,'Auliya',X'57616c6b696e6720746f20746865206d6f6f6e','L','0876512431'),(12,'Budi',X'506c75746f','P','08976152412');

INSERT INTO paket(id_paket,jenis_paket,nama_paket,harga) VALUES(4,'kiloan','Paket Kering Wangi',9000),(5,'selimut','SLMT',6500);

INSERT INTO transaksi(id_transaksi,kode_invoice,member_id,tgl,batas_waktu,tgl_pembayaran,status,status_bayar,user_id) VALUES(34,'DRY202106215102',11,'2021-06-21 06:02:59','2021-06-28 12:00:00','2021-06-21 08:18:22','baru','dibayar',123),(38,'DRY202106214524',12,'2021-06-21 08:24:51','2021-06-28 12:00:00','2021-06-21 08:35:51','baru','dibayar',123);
INSERT INTO user(id_user,nama_user,username,password) VALUES(1,'Tigor Imam Hamdani','tigor123','25d55ad283aa400af464c76d713c07ad'),(123,'Bayu Prasetyo','bayupras141','25f9e794323b453885f5181f1b624d0b');