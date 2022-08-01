-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 06 Haz 2022, 18:01:28
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `lotus`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_adSoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_kullaniciAd` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_tel` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `admin_resim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_adSoyad`, `admin_kullaniciAd`, `admin_sifre`, `admin_mail`, `admin_tel`, `admin_resim`) VALUES
(1, 'ali', 'ali', '123', 'ali@gmail.com', '123456789', 'ashe.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer_ayar`
--

DROP TABLE IF EXISTS `footer_ayar`;
CREATE TABLE IF NOT EXISTS `footer_ayar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `renk` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `konum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `iletisim_id` int(11) NOT NULL AUTO_INCREMENT,
  `iletisim_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mesaj` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`iletisim_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_ad`, `iletisim_mail`, `iletisim_telefon`, `iletisim_mesaj`) VALUES
(5, 'osman', 'osman@a', '0543', 'sada');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_resim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`, `kategori_resim`) VALUES
(11, 'Erkek Giyim', 'cat-1.jpg'),
(12, 'Kadın Giyim', 'cat-2.jpg'),
(13, 'Çocuk Giyim', 'cat-3.jpg'),
(14, 'Aksesuar', 'cat-4.jpg'),
(15, 'Çanta', 'cat-5.jpg'),
(16, 'Ayakkabı', 'cat-6.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_adresi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_id` int(11) NOT NULL,
  PRIMARY KEY (`mail_id`),
  KEY `uye_id` (`uye_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mail`
--

INSERT INTO `mail` (`mail_id`, `mail_adresi`, `uye_id`) VALUES
(1, 'osman@gmail.com', 8),
(2, 'ali@ali', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satis`
--

DROP TABLE IF EXISTS `satis`;
CREATE TABLE IF NOT EXISTS `satis` (
  `satis_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(11) NOT NULL,
  `uye_id` int(11) NOT NULL,
  PRIMARY KEY (`satis_id`),
  KEY `urun_id` (`urun_id`),
  KEY `uye_id` (`uye_id`),
  KEY `urun_id_2` (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `satis`
--

INSERT INTO `satis` (`satis_id`, `urun_id`, `uye_id`) VALUES
(5, 5, 8),
(7, 7, 8),
(8, 5, 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` int(11) NOT NULL,
  `urun_cinsiyet` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `urun_beden` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `urun_resim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `urun_miktar` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `satis_miktari` int(11) NOT NULL,
  PRIMARY KEY (`urun_id`),
  KEY `admin_id` (`admin_id`),
  KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_fiyat`, `urun_cinsiyet`, `urun_beden`, `urun_resim`, `urun_aciklama`, `urun_miktar`, `admin_id`, `kategori_id`, `satis_miktari`) VALUES
(5, 'Bilmem Ne 1', 100, 'Erkek', 's', 'cat-1.jpg', 'AÇIKLAMA', 100, 1, 11, 10),
(6, 'Bilmem Ne 2', 200, 'KadÄ±n', 'm', 'cat-2.jpg', 'Aï¿½IKLAMA', 100, 1, 12, 6),
(7, 'Bilmem Ne 3', 300, 'Cocuk', 'l', 'cat-3.jpg', 'ACIKLAMA', 100, 1, 13, 7),
(9, 'Bilmem Ne 5', 500, 'Erkek', 's', 'cat-5.jpg', 'ACIKLAMA', 100, 1, 15, 9),
(10, 'Bilmem Ne 6', 600, 'KadÄ±n', 'm', 'cat-6.jpg', 'ACIKLAMA', 100, 1, 16, 4),
(37, 'Bilmem Ne 6', 200, 'Erkek', 'x', 'cat-4.jpg', 'Açklama', 100, 1, 14, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_adSoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_kullaniciAdi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_durum` tinyint(1) NOT NULL,
  `mail_id` int(11) NOT NULL,
  PRIMARY KEY (`uye_id`),
  KEY `mail_id` (`mail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_adSoyad`, `uye_kullaniciAdi`, `uye_sifre`, `uye_durum`, `mail_id`) VALUES
(8, 'Osman Koyuncu', 'osman', '202cb962ac59075b964b07152d234b70', 1, 8),
(9, 'Ali', 'ali', '202cb962ac59075b964b07152d234b70', 0, 9);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `mail_ibfk_1` FOREIGN KEY (`uye_id`) REFERENCES `uyeler` (`uye_id`);

--
-- Tablo kısıtlamaları `satis`
--
ALTER TABLE `satis`
  ADD CONSTRAINT `satis_ibfk_1` FOREIGN KEY (`uye_id`) REFERENCES `uyeler` (`uye_id`),
  ADD CONSTRAINT `satis_ibfk_2` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`);

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `urunler_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategoriler` (`kategori_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
