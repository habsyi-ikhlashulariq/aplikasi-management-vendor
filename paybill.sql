/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.24 : Database - paybill
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`paybill` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `paybill`;

/*Table structure for table `dokumen` */

DROP TABLE IF EXISTS `dokumen`;

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kontrak` varchar(200) DEFAULT NULL,
  `nomor_surat_permohonan_pembayaran` varchar(100) DEFAULT NULL,
  `nama_dokumen` text,
  `tgl_upload` date DEFAULT NULL,
  `tgl_berakhir` date DEFAULT NULL,
  `jenis_dokumen` varchar(100) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_kontrak` int(11) DEFAULT NULL,
  `isi_komentar_direksi_pekerjaan` varchar(100) DEFAULT NULL,
  `tgl_komentar_direksi_pekerjaan` date DEFAULT NULL,
  `tgl_komentar_msb_keuangan` date DEFAULT NULL,
  `tgl_komentar_asman_keuangan` date DEFAULT NULL,
  `tgl_komentar_staff_keuangan` date DEFAULT NULL,
  `tgl_komentar_msb_bat` date DEFAULT NULL,
  `tgl_komentar_asman_bat` date DEFAULT NULL,
  `tgl_komentar_staff_bat` date DEFAULT NULL,
  `isi_komentar_msb_keuangan` varchar(500) DEFAULT NULL,
  `isi_komentar_asman_keuangan` varchar(500) DEFAULT NULL,
  `isi_komentar_staff_keuangan` varchar(500) DEFAULT NULL,
  `isi_komentar_asman_bat` varchar(500) DEFAULT NULL,
  `isi_komentar_msb_bat` varchar(500) DEFAULT NULL,
  `isi_komentar_staff_bat` varchar(1000) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `upload_nodin` text,
  `alasan_keterlambatan_direksi_pekerjaan` varchar(500) DEFAULT NULL,
  `alasan_keterlambatan_msb_bat` varchar(500) DEFAULT NULL,
  `alasan_keterlambatan_msb_keuangan` varchar(500) DEFAULT NULL,
  KEY `id_komentar` (`id_dokumen`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `dokumen` */

insert  into `dokumen`(`id_dokumen`,`nomor_kontrak`,`nomor_surat_permohonan_pembayaran`,`nama_dokumen`,`tgl_upload`,`tgl_berakhir`,`jenis_dokumen`,`id_users`,`id_kontrak`,`isi_komentar_direksi_pekerjaan`,`tgl_komentar_direksi_pekerjaan`,`tgl_komentar_msb_keuangan`,`tgl_komentar_asman_keuangan`,`tgl_komentar_staff_keuangan`,`tgl_komentar_msb_bat`,`tgl_komentar_asman_bat`,`tgl_komentar_staff_bat`,`isi_komentar_msb_keuangan`,`isi_komentar_asman_keuangan`,`isi_komentar_staff_keuangan`,`isi_komentar_asman_bat`,`isi_komentar_msb_bat`,`isi_komentar_staff_bat`,`id_role`,`email`,`upload_nodin`,`alasan_keterlambatan_direksi_pekerjaan`,`alasan_keterlambatan_msb_bat`,`alasan_keterlambatan_msb_keuangan`) values 
(2,'4536786897',NULL,'Dasar-Dasar_Pemrograman_PHP.pdf','2020-07-13','2020-07-27','Laporan Kemajuan Pekerjaan',9,3,NULL,NULL,NULL,NULL,NULL,NULL,'2020-07-21','2020-07-21',NULL,NULL,NULL,'terima kasih',NULL,'Silahkan di lanjut',6,'ikhsanhmr@gmail.com',NULL,'maaf',NULL,NULL),
(6,'4536786897',NULL,'Scan6.pdf','2020-07-21','2020-07-27','Faktur Pajak',9,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Silahkan di lanjutkan lagi',NULL,'Silahkan di lanjut bos',5,'ikhsanhmr@gmail.com',NULL,NULL,NULL,NULL),
(7,'2453465768',NULL,'Scan3.pdf','2020-07-21','2020-07-27','Berita Acara Pemeriksaan Pekerjaan',16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'ikhsanhmr@gmail.com','',NULL,NULL,NULL),
(10,'pip9',NULL,'E-Ticket_PRW-3H06L-8N8T.pdf','2020-07-21','2020-07-28','Berita Acara Serah Terima Pekerjaan',16,1,NULL,NULL,NULL,NULL,NULL,'2020-07-22','2020-07-22','2020-07-22',NULL,NULL,NULL,'silahkan di lanjut','oke lanjut','oke lanjutkan wak',3,'ikhsanhmr@gmail.com','','maaf',NULL,NULL),
(11,'868687686576',NULL,'SPPD_.pdf','2020-07-21','2020-07-27','Surat Permohonan Pembayaran',16,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-07-21',NULL,NULL,NULL,NULL,NULL,'Dokumen nya sudah lengkap ketua, silahkan di cek lagi.. ',5,'ikhsanhmr@gmail.com','',NULL,NULL,NULL),
(12,'tyi 68i78',NULL,'invoice.pdf','2020-07-21','2020-07-27','Invoice',16,3,NULL,NULL,'2020-07-22','2020-07-22','2020-07-22','2020-07-21','2020-07-21','2020-07-21','sip','siap bosq','berangkaaaaaattatattata','perlu di tinjau ulang','selelu begitu','kurang menarik',9,'ikhsanhmr@gmail.com','',NULL,NULL,NULL),
(13,'trh6h5',NULL,'14316_STI_02_01.pdf','2020-07-22','2020-07-31','Faktur Pajak',16,1,'oke sih kalo saya mah s','2020-07-30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'ikhsanblog@yahoo.co.id','','maaf',NULL,NULL),
(14,'tj6ij6',NULL,'14316_STI_02_01.pdf','2020-07-22','2020-07-27','Berita Acara Serah Terima Pekerjaan',16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'sip',NULL,'oke',5,'ikhsanblog@yahoo.co.id','','maaf',NULL,NULL),
(15,'4e5rf6tg7yhu',NULL,'hotel_antariksa.pdf','2020-07-30','2020-08-06','Kontrak / SPK Asli',9,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9,'ikhsanhmr@gmail.com',NULL,NULL,NULL,NULL),
(16,'4536786897',NULL,'hotel_antariksa.pdf','2020-08-06','2020-08-07','Kontrak / SPK Asli',16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL),
(17,NULL,NULL,NULL,NULL,NULL,'Invoice',16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL),
(18,NULL,NULL,NULL,NULL,NULL,'xxxxxx',16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL),
(19,NULL,NULL,NULL,NULL,NULL,'xxxxxxx',16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL),
(20,NULL,NULL,NULL,NULL,NULL,'xxxxxx',16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL),
(21,NULL,NULL,NULL,NULL,NULL,'xxxxxx',16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL);

/*Table structure for table `form` */

DROP TABLE IF EXISTS `form`;

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL AUTO_INCREMENT,
  `judul_form` varchar(100) DEFAULT NULL,
  `nama_file` text,
  KEY `id_form` (`id_form`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `form` */

insert  into `form`(`id_form`,`judul_form`,`nama_file`) values 
(3,'FR Berita Acara Serah Terima Pekerjaan Selesai','03_KITSUM_FR_OKR-2_03_01_01_FR_Berita_Acara_Serah_Terima_Pekerjaan_Selesai.docx'),
(4,'FR Surat Penyampaian Dokumen Invoice','06_KITSUM_FR_OKR-2_02_01_04_FR_Surat_Penyampaian_Dokumen_Invoice.docx');

/*Table structure for table `kontrak` */

DROP TABLE IF EXISTS `kontrak`;

CREATE TABLE `kontrak` (
  `id_kontrak` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kontrak` varchar(100) DEFAULT NULL,
  KEY `id_kontrak` (`id_kontrak`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kontrak` */

insert  into `kontrak`(`id_kontrak`,`jenis_kontrak`) values 
(1,'Pengadaan Jasa Konsultan'),
(2,'Pengadaan Jasa Konstruksi'),
(3,'Pengadaan Barang');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(60) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  KEY `id_menu` (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`id_menu`,`nama_menu`,`link`,`icon`,`is_main_menu`) values 
(2,'Setting','#','fa fa-wrench',0),
(5,'Manage Users','users_view','fa fa-user-plus text-aqua',2),
(6,'Manage Menu','menu_view','fa fa-gears text-aqua',2),
(11,'submenu3','submenu3','fa fa-money',9),
(12,'Tagihan','#','fa fa-money',0),
(13,'Upload Dokumen','tagihan_view','fa fa-pencil-square-o',12),
(14,'Verifikasi Dokumen','#','fa fa-sticky-note',0),
(15,'Update Data','warranty_notice_view','fa fa-pencil-square-o ',14),
(17,'Manage Vendor','vendor_view','fa fa-assistive-listening-systems',2),
(18,'Verifikasi_Akhir','verifikasi_akhir_view','fa fa-sticky-note',0);

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(100) NOT NULL,
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`id_role`,`nama_role`) values 
(1,'Admin'),
(2,'Verifikator Staff Administrasi Teknik'),
(3,'Verifikator Staff Keuangan'),
(4,'Vendor'),
(5,'Verifikator Assistant Manager Administrasi Teknik'),
(6,'Verifikator Manager Sub Bidang Administrasi Teknik'),
(7,'Verifikator Assistant Manager Keuangan'),
(8,'Verifikator Manager Sub Bidang Keuangan'),
(9,'Direksi Pekerjaan');

/*Table structure for table `tagihan` */

DROP TABLE IF EXISTS `tagihan`;

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kontrak` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `jenis_kontrak` varchar(100) DEFAULT NULL,
  KEY `id_tagihan` (`id_tagihan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tagihan` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `id_role` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` enum('aktif','nonaktif') DEFAULT NULL,
  PRIMARY KEY (`id_users`),
  KEY `ID_ROLE` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_users`,`nama`,`username`,`password`,`id_role`,`email`,`status`) values 
(8,'Andi Ade Putra Siregar','admin','UnlpVmRpOFQ3K2ZLZjQyRkhYblJzUT09',1,'ikhsanhmr@gmail.com','aktif'),
(9,'PT ICON+','vendor_icon','UlZsSVorN0ZiZDE2UWZ0UUE5aVdsUT09',4,'ikhsanhmr@gmail.com','aktif'),
(10,'Indra Gunawan','indra','UlZsSVorN0ZiZDE2UWZ0UUE5aVdsUT09',2,'ikhsanhmr@gmail.com','aktif'),
(11,'Wawan Setiadi','wawan','UlZsSVorN0ZiZDE2UWZ0UUE5aVdsUT09',3,'ikhsanhmr@gmail.com','aktif'),
(12,'Joshua Sihombing','wawan2','UlZsSVorN0ZiZDE2UWZ0UUE5aVdsUT09',7,'ikhsanhmr@gmail.com','aktif'),
(13,'Indra asman','indra2','UlZsSVorN0ZiZDE2UWZ0UUE5aVdsUT09',5,'ikhsanhmr@gmail.com','aktif'),
(14,'Indra MSB','indra3','UlZsSVorN0ZiZDE2UWZ0UUE5aVdsUT09',6,'ikhsanhmr@gmail.com','aktif'),
(15,'Wawan mbs','wawan3','UlZsSVorN0ZiZDE2UWZ0UUE5aVdsUT09',8,'ikhsanhmr@gmail.com','aktif'),
(16,'PT Sumber Dana','sumber','b3VHWjRFYlJ4alhFQjY0Qmg4Wm9rZz09',4,'ikhsanblog@yahoo.co.id','aktif'),
(17,'ikhsan','ikhsan','UlZsSVorN0ZiZDE2UWZ0UUE5aVdsUT09',9,'ikhsanhmr@gmail.com','aktif');

/*Table structure for table `vendor` */

DROP TABLE IF EXISTS `vendor`;

CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_vendor` varchar(100) DEFAULT NULL,
  `email_vendor` varchar(100) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  KEY `id_vendor` (`id_vendor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `vendor` */

insert  into `vendor`(`id_vendor`,`nama_vendor`,`email_vendor`,`telepon`) values 
(1,'ICON+','ikhsanhmr@gmail.com','08572346522'),
(3,'Astra Graphia','astra@gmail.com','098765468575'),
(4,'TRICOM','tricom@gmail.com','09784737834');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
