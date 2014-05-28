-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Mei 2014 pada 12.36
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvc_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `usertbl`
--

CREATE TABLE IF NOT EXISTS `usertbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `usertbl`
--

INSERT INTO `usertbl` (`id`, `username`, `email`, `contact`, `address`) VALUES
(23, 'TEST EDIT', 'TEST EDIT', 'TEST EDIT', 'TEST EDIT'),
(21, 'TEST INPUT 1', 'TEST INPUT 1', 'TEST INPUT 1', 'TEST INPUT 1'),
(24, 'Sultans Pria Permadi', 'sultans.permadi@gmail.com', '08811659664', 'Jl.Bintara IX Kp.setu RT 001/001\r\nNo.01 Bintara Jaya,Bekasi Barat\r\nKota BEKASI 17136'),
(25, 'TEST INPUT 4', 'TEST INPUT 4', 'TEST INPUT 4', 'TEST INPUT 4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
