/*
Navicat MySQL Data Transfer

Source Server         : server local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : dbpenjualan

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2014-03-14 22:13:31
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO migrations VALUES ('2014_03_10_120919_create_master_barang', '1');
INSERT INTO migrations VALUES ('2014_03_10_120955_create_jns_barang', '1');
INSERT INTO migrations VALUES ('2014_03_10_121016_create_master_pegawai', '1');
INSERT INTO migrations VALUES ('2014_03_10_121048_create_header_transaksi', '1');
INSERT INTO migrations VALUES ('2014_03_10_121108_create_detail_transaksi', '1');

-- ----------------------------
-- Table structure for `tmbarang`
-- ----------------------------
DROP TABLE IF EXISTS `tmbarang`;
CREATE TABLE `tmbarang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_jenis_barang` smallint(6) NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `stok` smallint(6) NOT NULL,
  `ket` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tmbarang
-- ----------------------------
INSERT INTO tmbarang VALUES ('1', '1', 'JAS HUJAN JC ASV II KARET', '189000', '3', '');
INSERT INTO tmbarang VALUES ('2', '1', 'SEPATU BOOT MOTO AP UK.40 HITAM', '89000', '2', '');
INSERT INTO tmbarang VALUES ('3', '1', 'CELANA MOTOR CROSS PANJANG MOTIF FOX UK.32', '250000', '2', '');
INSERT INTO tmbarang VALUES ('4', '1', 'CELANA MOTOR CROSS PANJANG MOTIF FOX UK.35', '25000', '3', '');
INSERT INTO tmbarang VALUES ('5', '1', 'CELANA MOTOR CROSS PANJANG ANAK MOTIF UK.26', '230000', '4', '');
INSERT INTO tmbarang VALUES ('6', '2', 'BAUT BO JP - 6X30 4PC', '4000', '70', '');
INSERT INTO tmbarang VALUES ('7', '2', 'BAUT BMK 10X70 KUNING 2ST', '9000', '20', '');
INSERT INTO tmbarang VALUES ('8', '2', 'BAUT BMK 6X70 KUNING 2ST', '8000', '59', '');
INSERT INTO tmbarang VALUES ('9', '2', 'BAUT BO JP 5X30 4PC', '4000', '40', '');
INSERT INTO tmbarang VALUES ('10', '2', 'BAUT CALIPPER BINTANG TABUNG CAL GLPRO, MOTOR CROSS, MEGA PRO', '12000', '50', '');
INSERT INTO tmbarang VALUES ('11', '3', 'BOX TENGAH, JOK SPRA, KLEM COOL', '145000', '3', '');
INSERT INTO tmbarang VALUES ('12', '3', 'BOX TENGAH, JOK SUPRA', '135000', '5', '');
INSERT INTO tmbarang VALUES ('13', '3', 'FRONT RIDER BAG', '400000', '4', '');
INSERT INTO tmbarang VALUES ('14', '3', 'KLEM BOX BARANG BELAKANG MEGAPRO-NEW HITAM NEOTRCK', '160000', '6', '');
INSERT INTO tmbarang VALUES ('15', '3', 'KLEM BOX BARANG BELAKANG SCOOPY HITAM NEOTRCK', '160000', '3', '');
INSERT INTO tmbarang VALUES ('16', '4', 'AKI KERING GS GSHN GTZ-7S-BS MF BAT SAT-F150', '225000', '5', '');
INSERT INTO tmbarang VALUES ('17', '4', 'BOHLAM REM DOR COLK WR 12V10W T13 NG SIGNL SPRWHITE', '39000', '6', '');
INSERT INTO tmbarang VALUES ('18', '4', 'BOHLAMP DEPAN DOD BEBEK 12V, 25W K1 STANLEE BLM 3603 GRAND, MIO', '8000', '20', '');
INSERT INTO tmbarang VALUES ('19', '4', 'BOHLAMP BELAKANG DOB, DOP LED 9007', '20000', '10', '');
INSERT INTO tmbarang VALUES ('20', '4', 'BOHLAMP BElAKANG HOLOGEN DOH BEBEK 12V, 18W OSRAM UVF K1 P15D-25-1', '13000', '20', '');
INSERT INTO tmbarang VALUES ('21', '5', 'OLI MESIN CASTROL PWR1 GOLD 10W40 0.8L', '38500', '12', '');
INSERT INTO tmbarang VALUES ('22', '5', 'AIR ACCU HITAM XYZ', '14000', '20', '');
INSERT INTO tmbarang VALUES ('23', '5', 'AIR RADIATOR COLANT MASTR PREMIXD 1QUART', '19000', '12', '');
INSERT INTO tmbarang VALUES ('25', '5', 'ANTI KARAT AHRS MULTI - CARE 150 ML', '31000', '12', '');
INSERT INTO tmbarang VALUES ('26', '6', 'GEAR BELAKANG TK KLX 46T-428 TK01270', '182000', '5', '');
INSERT INTO tmbarang VALUES ('27', '6', 'GEAR BELAKANG YAMAHA TK SCRPIO UK.46T-428', '166000', '4', '');
INSERT INTO tmbarang VALUES ('28', '6', 'GEAR DEPAN YAMAHA TK RXZ UK.16T-428', '55000', '5', '');
INSERT INTO tmbarang VALUES ('29', '6', 'RANTAI SPEED 428-128 CHROME', '85000', '2', '');
INSERT INTO tmbarang VALUES ('30', '6', 'RANTAI TK 428 -128L GOLD', '145000', '4', '');
INSERT INTO tmbarang VALUES ('31', '7', 'KLAKSON KEONG 1-S HITAM HELA HORN TWIN TONE 12V', '275000', '4', '');
INSERT INTO tmbarang VALUES ('32', '7', 'KLAKSON MODEL STEBL 1-S KPL MHL', '135000', '4', '');
INSERT INTO tmbarang VALUES ('33', '7', 'ALUMUNIUM AUDIO REMOTE GMC', '250000', '5', '');
INSERT INTO tmbarang VALUES ('34', '7', 'KLAKSON KEONG - HELLA', '220000', '8', '');
INSERT INTO tmbarang VALUES ('35', '7', 'KLAKSON BULAT HELA HORN STANDAR HITAM 12V (2PCS)', '130000', '3', '');
INSERT INTO tmbarang VALUES ('36', '8', 'KANVAS KOPLING KLX DYTONA SET D-DR-PFKVL-K-KLX150', '350000', '3', '');
INSERT INTO tmbarang VALUES ('37', '8', 'PACKING KNALPOT ATS TIGER', '4000', '6', '');
INSERT INTO tmbarang VALUES ('38', '8', 'PER KOPLING KLX150 TK00117', '120000', '4', '');
INSERT INTO tmbarang VALUES ('39', '8', 'CKD AHM COP (Kepala Busi) KHARISMA, HONDA', '13000', '5', '');
INSERT INTO tmbarang VALUES ('40', '8', 'CKD AHM PIRING DISC BRAKE BELAKANG MEGA PRO-NW/TIGR-EVO', '145000', '7', '');
INSERT INTO tmbarang VALUES ('42', '9', 'MONOSHOCK - RACING', '275000', '2', '');
INSERT INTO tmbarang VALUES ('43', '9', 'SHOCK ABSORBER JUPITER, Z, F1Z, R YSS HYBRID UKURAN 280', '425000', '2', '');
INSERT INTO tmbarang VALUES ('44', '9', 'SHOCK ABSORBER MIO MONO YSS PRO-Z SERIES', '360000', '2', '');
INSERT INTO tmbarang VALUES ('45', '9', 'SHOCK ABSORBER MIO MONO YSS Z-SERIES OE302-300T-03-85 HITAM-MERAH', '550000', '3', '');
INSERT INTO tmbarang VALUES ('46', '9', 'SHOCK ABSORBER UK.340 HYBRID SCARLT', '235000', '3', '');
INSERT INTO tmbarang VALUES ('47', '10', 'KUNCI HELM BESAR WARNA KCL TY513A PLAST', '35000', '3', '');
INSERT INTO tmbarang VALUES ('48', '10', 'COVER JARING JARING SRAP PANAS BESAR GMA', '79000', '4', '');
INSERT INTO tmbarang VALUES ('49', '10', 'COVER JOK JARING SRAP PANSA MHL MATIC', '75000', '3', '');
INSERT INTO tmbarang VALUES ('50', '10', 'COVER JPK JARING SERAP PANAS BESAR MHL', '90000', '5', '');
INSERT INTO tmbarang VALUES ('51', '10', 'GANTUNGAN KUNCI DOMPET INDIAN KULIT', '17000', '4', '');
INSERT INTO tmbarang VALUES ('52', '11', 'BAN LUAR BATLAX 120/60-17 S20 F TL HYPRSPORT', '1200000', '4', '');
INSERT INTO tmbarang VALUES ('53', '11', 'BAN LUAR BATLAX 150/60-17 S20 R TL HYPRSPORT', '1602000', '5', '');
INSERT INTO tmbarang VALUES ('54', '11', 'BAN LUAR FDR 100/80-17 TL SPORT XR EVO', '340000', '3', '');
INSERT INTO tmbarang VALUES ('55', '11', 'BAN LUAR SWALLOW 70/90-17 TL 115 SEHWK', '166000', '5', '');
INSERT INTO tmbarang VALUES ('56', '11', 'BAL SWALLOW 90, 90-17 TRACROS SB114R', '418000', '5', '');
INSERT INTO tmbarang VALUES ('57', '1', 'Jaket Racing', '200000', '5', '');
INSERT INTO tmbarang VALUES ('58', '1', 'Baju Hujan Spesial', '60000', '3', '');
INSERT INTO tmbarang VALUES ('59', '2', 'Baut Golden Brown', '3000', '50', '');
INSERT INTO tmbarang VALUES ('60', '1', 'Jaket Racing 2', '200000', '5', '');
INSERT INTO tmbarang VALUES ('61', '5', 'Ban Dunlop', '300000', '6', '');
INSERT INTO tmbarang VALUES ('62', '7', 'Smart Alarm', '140000', '9', '');
INSERT INTO tmbarang VALUES ('63', '6', 'Gear Golden', '150000', '5', '');
INSERT INTO tmbarang VALUES ('64', '9', 'High Quality Suspension', '500000', '4', '');
INSERT INTO tmbarang VALUES ('65', '5', 'AIR ACCU HITAM X', '100000', '20', '');
INSERT INTO tmbarang VALUES ('74', '1', 'ABS Jaket Hujan Putih', '200000', '3', '');

-- ----------------------------
-- Table structure for `tmjnsbarang`
-- ----------------------------
DROP TABLE IF EXISTS `tmjnsbarang`;
CREATE TABLE `tmjnsbarang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ket` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tmjnsbarang
-- ----------------------------
INSERT INTO tmjnsbarang VALUES ('1', 'Fashion', '');
INSERT INTO tmjnsbarang VALUES ('2', 'Bolts', '');
INSERT INTO tmjnsbarang VALUES ('3', 'Box', '');
INSERT INTO tmjnsbarang VALUES ('4', 'Bulb dan Electrical', '');
INSERT INTO tmjnsbarang VALUES ('5', 'Cares', '');
INSERT INTO tmjnsbarang VALUES ('6', 'Gear', '');
INSERT INTO tmjnsbarang VALUES ('7', 'Alarm', '');
INSERT INTO tmjnsbarang VALUES ('8', 'Other parts', '');
INSERT INTO tmjnsbarang VALUES ('9', 'Suspension', '');
INSERT INTO tmjnsbarang VALUES ('10', 'Tools', '');
INSERT INTO tmjnsbarang VALUES ('11', 'Tires', '');
INSERT INTO tmjnsbarang VALUES ('12', 'Asesoris Tambahan', '');
INSERT INTO tmjnsbarang VALUES ('13', 'Asesoris Sepeda Motor', '');

-- ----------------------------
-- Table structure for `ttdjual`
-- ----------------------------
DROP TABLE IF EXISTS `ttdjual`;
CREATE TABLE `ttdjual` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nota_jual` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT '0',
  `jml` int(5) NOT NULL,
  `nominal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ttdjual
-- ----------------------------
INSERT INTO ttdjual VALUES ('1', '23', '74', '2', '400000');
INSERT INTO ttdjual VALUES ('2', '24', '3', '2', '500000');

-- ----------------------------
-- Table structure for `tthjual`
-- ----------------------------
DROP TABLE IF EXISTS `tthjual`;
CREATE TABLE `tthjual` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nota_jual` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `tgl_jual` date NOT NULL,
  `ket` text COLLATE utf8_unicode_ci,
  `nama_pembeli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`nota_jual`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tthjual
-- ----------------------------
INSERT INTO tthjual VALUES ('1', '23', null, '2014-04-12', '', 'Edi Santoso');
INSERT INTO tthjual VALUES ('2', '24', null, '2014-03-12', '', 'Edi Santoso');
