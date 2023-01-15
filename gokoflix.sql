-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Oca 2023, 18:26:49
-- Sunucu sürümü: 8.0.28
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gokoflix`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `adSoyad` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kullAdi` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `adSoyad`, `kullAdi`, `sifre`) VALUES
(1, 'Gökdeniz Öztürk', 'g', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

CREATE TABLE `filmler` (
  `id` int NOT NULL,
  `ad` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cikis_yili` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puan` int NOT NULL,
  `foto` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`id`, `ad`, `kategori`, `cikis_yili`, `puan`, `foto`) VALUES
(5, 'Recep Ivedik 3', '1', '2010', 7, 'DA01A3E657BC97C608F8BD305BF3BE32.jpg'),
(6, 'John Wick:3 Parabellum', '3', '2019', 8, '91hFxTjgTSL._UX425_.jpg'),
(7, 'Annabelle:3', '2', '2019', 6, 'indir.jpg'),
(8, 'Son Durak 5', '4', '2009', 7, 'FD5_poster.jpg'),
(9, 'Buz Devri 5', '7', '2016', 7, '547764.jpg'),
(10, 'Avatar: Suyun Yolu', '6', '2022', 9, '4691827.jpg'),
(11, '7.Kogustaki Mucize', '5', '2019', 9, 'en-iyi-dram-filmleri-turk-5-304x405.jpg'),
(12, 'Emanet', '8', '2016', 7, 'images (1).jpg'),
(13, 'Avengers Infinity War', '6', '2018', 9, 'MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_.jpg'),
(14, 'Senden Bana Kalan', '5', '2015', 9, '581651.jpg'),
(15, 'Arog', '1', '2008', 7, 'Arog.jpg'),
(16, 'Snow White', '3', '2012', 7, 'poster.jpg'),
(17, 'Kutsal Damacana', '2', '2012', 6, 'MV5BZjM3YmM5MTEtNzdiZC00ZDMwLThhMzctOGE0N2E0NmNiMDc1XkEyXkFqcGdeQXVyNTM3NzExMDQ@._V1_.jpg'),
(18, 'Dinozorlarla Yürümek', '7', '2012', 8, '114737.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int NOT NULL,
  `Ad` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `Ad`) VALUES
(1, 'Komedi'),
(2, 'Korku'),
(3, 'Aksiyon'),
(4, 'Gerilim'),
(5, 'Dram'),
(6, 'Bilim Kurgu'),
(7, 'Animasyon'),
(8, 'Polisiye');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `filmler`
--
ALTER TABLE `filmler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `filmler`
--
ALTER TABLE `filmler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
