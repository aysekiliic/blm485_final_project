-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Oca 2022, 17:35:45
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `final_project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gift_db`
--

CREATE TABLE `gift_db` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(11) NOT NULL,
  `gift` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gift_db`
--

INSERT INTO `gift_db` (`name`, `email`, `number`, `gift`, `message`, `address`) VALUES
('Ayşe Kılıç', 'aysekilicxx@gmail.com', '2147483647', 'tree', 'xdcv', 'Ümit mahallesi 2432.cadde Çankaya/Ankara'),
('Efe Mert', 'efemert@gmail.com', '2147483647', 'analog', 'Merry Christmas! :)', 'Anafartalar caddesi 2435.sk Deniz Sitesi no:88/53'),
('Yaren Korkmaz', 'aysekilicxx@gmail.com', '2147483647', 'coffee', 'I wish you a better year than previous ones!!!', 'gündoğan sokak no:56 Çankaya'),
('İlayda Erşahin', 'aysekilicxx@gmail.com', '2147483647', 'sweater', 'Merry christmas!!!', 'hasanoğlan caddesi doktorlar sitesi no:5 '),
('Yaren Korkmaz', 'aysekilicxx@gmail.com', '2147483647', 'analog', 'Merry Christmas my dear best friend!!!', 'Ümit mahallesi 2432.cadde no:88/30'),
('Tunahan Oğuz', 'aysekilicxx@gmail.com', '2147483647', 'tree', 'Merry christmas!', 'Ümit mahallesi 2432.cadde '),
('Ayşe Kılıç', 'aysekilicxx@gmail.com', '05378273248', 'coffee', 'Merry christmas!', '2432 street Mimozalar Site Çankaya'),
('Damla Dalay', 'aysekilicxx@gmail.com', '05378273248', 'special', 'Merry Christmas', 'Ümit mahallesi 2432.cadde '),
('Sultan Kılıç', 'aysekilicxx@gmail.com', '05378273248', 'special', 'My package: a bunch of roses\r\nMy note: I love you mom!!!', 'Ümit mahallesi 2432.cadde '),
('İlker Kılıç', 'aysekilicxx@gmail.com', '05378273248', 'coffee', 'Merry christmas, love you so much!!!', 'Ümit mahallesi 2432.cadde'),
('İlker Kılıç', 'aysekilicxx@gmail.com', '05378273248', 'coffee', 'Merry christmas, love you so much!!!', 'Ümit mahallesi 2432.cadde'),
('Mustafa Kemal', 'aysekilicxx@gmail.com', '05378273248', 'sweater', 'Merry christmas!!!', 'Ümit mahallesi 2432.cadde ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'aysekilic', '$2y$10$MiEalHoEMKDXumA9TfPb3e8PS/sg1rTCmehKm5F46ZWlSwFO7k5LG', '2022-01-09 22:34:00'),
(2, 'ersahinnilayda', '$2y$10$1z0uXpIT/SvZKRNkOtpT7eOrwf3aVru2S1FL2Mv9YPVAhgasbbEFi', '2022-01-10 14:55:40'),
(3, 'AYSENUR', '$2y$10$jufKnx5IQnLF..v.VXWZqe5LAivbIB1kIfN0TDxvvsU3GFKXDmRd6', '2022-01-10 14:56:03'),
(4, 'mchtklc', '$2y$10$AXuGpeyGSRuqjBDfjtk18e44yAXfJiah7m3g6R7MgT8t87NymvT8O', '2022-01-10 17:11:40');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
