-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2019 pada 18.48
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image`) VALUES
(1, 'Baju', 'Baju AllSize', 79000, 5, NULL),
(2, 'Sandal Casual', 'Sandal Jepit Casual', 35000, 10, NULL),
(3, 'Topi', 'Topi All', 20000, 10, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_session`
--

CREATE TABLE `tbl_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_session`
--

INSERT INTO `tbl_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('v6cta7b6a8hlg6nd4eo69cg7iioiddi5', '::1', 1556463652, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363436333635323b),
('83jju4alg5v2lqqvdsakscso9mbn7bi3', '::1', 1556464664, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363436343636343b),
('psq9gn16nbt4tliijb06msbp4rst1cbc', '::1', 1556465458, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363436353435383b),
('c4bl8nlt32afnfk3kpk0n2otrg872t7a', '::1', 1556465765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363436353736353b),
('ccj62e7uhinm89s2g7evre30o3aphmg2', '::1', 1556467660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363436373636303b),
('con16krhcohe71v79mfnngh9vvl1vd1r', '::1', 1556467961, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363436373936313b),
('7iiug3qajfub2dvij97au43kridi30dk', '::1', 1556468346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363436383334363b),
('81opvstj6hssokj0gd8jgbi9sedviphh', '::1', 1556468585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363436383334363b);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_session`
--
ALTER TABLE `tbl_session`
  ADD KEY `tbl_session_timestamp` (`timestamp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
