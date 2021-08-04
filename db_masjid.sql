-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 04:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `hp` int(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_berita` timestamp NOT NULL DEFAULT current_timestamp(),
  `added_by` varchar(50) NOT NULL,
  `gambar_berita` text NOT NULL,
  `slug_berita` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_berita`, `added_by`, `gambar_berita`, `slug_berita`) VALUES
(4, 'PSBB Transisi Berakhir Hari Ini ', '<p><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\">JAKARTA, KOMPAS.com - Kasus harian Covid-19 di DKI Jakarta bertambah 1.579 pada Sabtu (7/11/2020) kemarin. Penambahan tersebut tercatat paling tinggi sejak dilaporkannya kasus pertama di Ibu Kota, 3 Maret 2020.</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\"><br></p>', '2020-11-23 07:46:21', '', '1606117581.png', ''),
(11, 'Lesti Kejora Rizky Billar ', '<p><strong style=\"padding: 0px; margin: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">TRIBUNPONTIANAK.CO.ID</strong><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">&nbsp;– Komedian&nbsp;</span><a href=\"https://pontianak.tribunnews.com/tag/komeng\" title=\"Komeng\" aria-label=\"link\" style=\"padding: 0px; margin: 0px; color: rgb(1, 111, 186); outline: 0px; font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">Komeng</a><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">&nbsp;dan Jarwo Kwat belum lama ini ikut menyaksikan langsung kemesraan&nbsp;</span><a href=\"https://pontianak.tribunnews.com/tag/rizky-billar\" title=\"Rizky&nbsp;Billar\" aria-label=\"link\" style=\"padding: 0px; margin: 0px; color: rgb(1, 111, 186); outline: 0px; font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">Rizky&nbsp;Billar</a><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">&nbsp;dan&nbsp;</span><a href=\"https://pontianak.tribunnews.com/tag/lesti-kejora\" title=\"Lesti&nbsp;Kejora\" aria-label=\"link\" style=\"padding: 0px; margin: 0px; color: rgb(1, 111, 186); outline: 0px; font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">Lesti&nbsp;Kejora</a><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">.</span></p>', '2020-11-23 07:47:51', '', '1606117671.png', ''),
(12, 'Update Sebaran Corona di Indonesia', '<p><span style=\"font-weight: 700; color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">PRFMNEWS</span><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">&nbsp;- Pemerintah kembali melakukan&nbsp;</span><a href=\"https://prfmnews.pikiran-rakyat.com/tag/update\" style=\"color: rgb(216, 29, 24); vertical-align: top; outline: 0px; transition: all 0.2s ease 0s; position: relative; font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">update</a><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">&nbsp;data sebaran virus&nbsp;</span><a href=\"https://prfmnews.pikiran-rakyat.com/tag/corona\" style=\"color: rgb(216, 29, 24); vertical-align: top; outline: 0px; transition: all 0.2s ease 0s; position: relative; font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">corona</a><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">&nbsp;(</span><a href=\"https://prfmnews.pikiran-rakyat.com/tag/Covid\" style=\"color: rgb(216, 29, 24); vertical-align: top; outline: 0px; transition: all 0.2s ease 0s; position: relative; font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">Covid</a><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">-19) di wilayah&nbsp;</span><a href=\"https://prfmnews.pikiran-rakyat.com/tag/Indonesia\" style=\"color: rgb(216, 29, 24); vertical-align: top; outline: 0px; transition: all 0.2s ease 0s; position: relative; font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">Indonesia</a><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">&nbsp;</span><a href=\"https://prfmnews.pikiran-rakyat.com/tag/terkini\" style=\"color: rgb(216, 29, 24); vertical-align: top; outline: 0px; transition: all 0.2s ease 0s; position: relative; font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">terkini</a><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">, Minggu 22 November 2020&nbsp;</span><a href=\"https://prfmnews.pikiran-rakyat.com/tag/hari%20ini\" style=\"color: rgb(216, 29, 24); vertical-align: top; outline: 0px; transition: all 0.2s ease 0s; position: relative; font-family: Roboto, sans-serif; background-color: rgb(255, 255, 255);\">hari ini</a><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">.</span><br></p>', '2020-11-23 07:48:54', '', '1606117734.png', ''),
(13, 'Lesti Kejora Rizky Billar ', '<p><strong style=\"padding: 0px; margin: 0px; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">TRIBUNPONTIANAK.CO.ID</strong><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">&nbsp;– Komedian&nbsp;</span><a href=\"https://pontianak.tribunnews.com/tag/komeng\" title=\"Komeng\" aria-label=\"link\" style=\"padding: 0px; margin: 0px; color: rgb(1, 111, 186); outline: 0px; font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">Komeng</a><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">&nbsp;dan Jarwo Kwat belum lama ini ikut menyaksikan langsung kemesraan&nbsp;</span><a href=\"https://pontianak.tribunnews.com/tag/rizky-billar\" title=\"Rizky&nbsp;Billar\" aria-label=\"link\" style=\"padding: 0px; margin: 0px; color: rgb(1, 111, 186); outline: 0px; font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">Rizky&nbsp;Billar</a><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">&nbsp;dan&nbsp;</span><a href=\"https://pontianak.tribunnews.com/tag/lesti-kejora\" title=\"Lesti&nbsp;Kejora\" aria-label=\"link\" style=\"padding: 0px; margin: 0px; color: rgb(1, 111, 186); outline: 0px; font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">Lesti&nbsp;Kejora</a><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif; font-size: 13px; background-color: rgb(235, 235, 235);\">.</span></p>', '2020-11-23 07:47:51', '', '1606117671.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `gambar_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `gambar_fasilitas`) VALUES
(1, 'Tempat Wudhu', 'tempatwudhu.jpg\r\n'),
(2, 'Gedung satu', 'gedungsatu.jpg\r\n'),
(3, 'Gedung satu', 'gedungsatu.jpg\r\n'),
(4, 'Tempat Wudhu', 'tempatwudhu.jpg\r\n'),
(5, 'Tempat Wudhu', 'tempatwudhu.jpg\r\n'),
(6, 'Tempat Wudhu', 'tempatwudhu.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_foto` int(11) NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_foto`, `foto`, `keterangan`, `id_admin`, `tanggal`) VALUES
(1, 'gedungsatu.jpg', 'hegfwhegfh wuexyrughfdhgefg edungsatu', 0, '2020-11-11'),
(2, 'tempatwudhu.jpg', 'pesepeda Search finished, found 1 page(s) matching the search query.', 0, '2020-11-17'),
(3, 'gedungsatu.jpg', 'wdsa', 0, '2020-11-03'),
(4, 'tempatwudhu.jpg', 'wkwkwk', 0, '2020-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `jadwal` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_jumatan`
--

CREATE TABLE `tb_jadwal_jumatan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `imam` varchar(200) NOT NULL,
  `khatib` varchar(200) NOT NULL,
  `muazin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_jumatan`
--

INSERT INTO `tb_jadwal_jumatan` (`id`, `tanggal`, `imam`, `khatib`, `muazin`) VALUES
(1, '2020-11-18', 'Imam 1', 'khatib 1', 'Muazin 1'),
(2, '2020-11-19', 'shgf', 'djshj', 'djhgjs2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_kajian`
--

CREATE TABLE `tb_jadwal_kajian` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul_kajian` varchar(150) NOT NULL,
  `ustadz` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_kajian`
--

INSERT INTO `tb_jadwal_kajian` (`id`, `tanggal`, `judul_kajian`, `ustadz`, `keterangan`) VALUES
(1, '2020-11-20', 'judul 1', 'ustadz Basamallah', 'jyefc fbhewytcvg gefgwfehwegry geffewferyerteryet'),
(2, '2020-11-29', 'judul 2', 'ustadz Maulana', '<ul><li>sjfyeueywawge</li><li>ekfhjegasg</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_lainnya`
--

CREATE TABLE `tb_jadwal_lainnya` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_lainnya`
--

INSERT INTO `tb_jadwal_lainnya` (`id`, `tanggal`, `kegiatan`, `keterangan`) VALUES
(1, '2020-11-20', 'Maulid Nabi', 'maulid nabi akan diadakan pada tanggal 20 bulan ini. diharapkan kepada masyrakat dan alim ulama menyemarakkan'),
(2, '2020-11-06', 'belum tau', '<p>belum tau juga</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_tpa`
--

CREATE TABLE `tb_jadwal_tpa` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_tpa`
--

INSERT INTO `tb_jadwal_tpa` (`id`, `tanggal`, `keterangan`) VALUES
(1, '2020-11-19', 'hsfgas ywtrawvfadwq'),
(2, '2020-11-19', '<p>dskjhaj bbewtfy teh ghcggwhgefhgfhgfhf hcvbcvghdfe</p>'),
(3, '2020-11-28', '<p>jwfhghfghfhsagfhgaecv vzcsdfwdfawg sgafdgfGf</p>'),
(4, '2020-11-21', '<p>zzzz</p>'),
(5, '2020-11-27', '<p>opqjjc&nbsp; fgdf ggsdhd hdfhsfh</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jamaah`
--

CREATE TABLE `tb_jamaah` (
  `id_jamaah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jamaah`
--

INSERT INTO `tb_jamaah` (`id_jamaah`, `nama`, `umur`, `jk`, `alamat`, `added_on`) VALUES
(7, 'Asep', 17, 'laki-laki', 'andara', '2020-11-20 06:45:31'),
(8, 'rafi', 18, 'laki-laki', 'andara', '2020-11-23 02:38:29'),
(9, 'popo', 25, 'l', 'sleman', '2020-11-23 03:37:32'),
(10, 'lalla', 22, 'p', 'padang', '2020-11-23 03:37:32'),
(11, 'popo', 25, 'l', 'sleman', '2020-11-23 03:37:46'),
(12, 'lalla', 22, 'p', 'padang', '2020-11-23 03:37:46'),
(13, 'popo', 25, 'l', 'sleman', '2020-11-23 03:37:56'),
(14, 'lalla', 22, 'p', 'padang', '2020-11-23 03:37:56'),
(16, 'lalla', 22, 'p', 'padang', '2020-11-23 03:39:10'),
(17, 'popo', 25, 'l', 'sleman', '2020-11-23 03:41:40'),
(18, 'lalla', 22, 'p', 'padang', '2020-11-23 03:41:40'),
(19, 'Sigit Suryono', 25, 'laki-laki', 'Prambanan', '2020-11-23 03:54:34'),
(20, 'Zelvia Olga Maharani', 22, 'perempuan', 'Padang', '2020-11-23 03:54:34'),
(21, 'Agus Khaer', 19, 'laki-laki', 'banjar', '2020-11-23 03:54:34'),
(22, 'Sigit Suryono', 25, 'laki-laki', 'Prambanan', '2020-11-23 06:13:03'),
(23, 'Zelvia Olga Maharani', 22, 'perempuan', 'Padang', '2020-11-23 06:13:03'),
(24, 'Agus Khaer', 19, 'laki-laki', 'banjar', '2020-11-23 06:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuangan`
--

CREATE TABLE `tb_keuangan` (
  `id_keuangan` bigint(30) NOT NULL,
  `pemasukan` int(20) NOT NULL,
  `pengeluaran` int(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `added_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keuangan`
--

INSERT INTO `tb_keuangan` (`id_keuangan`, `pemasukan`, `pengeluaran`, `tanggal`, `deskripsi`, `added_on`, `added_by`) VALUES
(10, 0, 23000, '2020-11-16', 'out', '2020-11-16 07:42:14', ''),
(12, 25000, 0, '2020-11-02', 'in', '2020-11-19 04:17:12', ''),
(14, 12000, 0, '2020-11-27', 'cubo', '2020-11-27 03:09:22', ''),
(15, 30000, 0, '2020-11-06', 'dueee', '2020-11-27 03:12:46', ''),
(16, 0, 125000, '2020-11-26', 'out 2', '2020-11-27 03:15:03', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_masjid`
--

CREATE TABLE `tb_masjid` (
  `id_masjid` int(11) NOT NULL,
  `nama_masjid` varchar(200) NOT NULL,
  `alamat_masjid` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email_masjid` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `logo` text NOT NULL,
  `gambar` text NOT NULL,
  `visimisi` text NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_masjid`
--

INSERT INTO `tb_masjid` (`id_masjid`, `nama_masjid`, `alamat_masjid`, `no_telp`, `email_masjid`, `deskripsi`, `logo`, `gambar`, `visimisi`, `sejarah`) VALUES
(1, 'Masjid Nurul Huda', 'jln lely 1, Ngringin Concat, Sleman', '+6281289003411', 'nurulhudamasjid@gmail.com', '<p><b style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Masjid</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;(bentuk tidak baku:&nbsp;</span><b style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">mesjid</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">) adalah rumah tempat ibadah umat Islam atau&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Muslim\" title=\"Muslim\" style=\"color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">Muslim</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">. Masjid artinya tempat sujud, sebutan lain yang berkaitan dengan masjid di Indonesia adalah&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Musala\" title=\"Musala\" style=\"color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">musala</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">,&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Langgar\" class=\"mw-redirect\" title=\"Langgar\" style=\"color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">langgar</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;atau&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Surau\" title=\"Surau\" style=\"color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">surau</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">. Istilah tersebut diperuntukkan bagi bangunan menyerupai masjid yang tidak digunakan untuk salat Jumat,&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Iktikaf\" title=\"Iktikaf\" style=\"color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">iktikaf</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">, dan umumnya berukuran kecil. Selain digunakan sebagai tempat ibadah, masjid juga merupakan pusat kehidupan komunitas muslim. Kegiatan-kegiatan perayaan hari besar, diskusi, kajian agama, ceramah dan belajar&nbsp;</span><a href=\"https://id.wikipedia.org/wiki/Al-Qur%27an\" title=\"Al-Qur\'an\" style=\"color: rgb(11, 0, 128); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">Al-Qur\'an</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;sering dilaksanakan di Masjid. Bahkan dalam sejarah Islam, masjid turut memegang peranan dalam aktivitas sosial kemasyarakatan hingga kemiliteran.</span><br></p>', 'logo.png', 'masjid.jpg', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.9em;\">1.Visi<br style=\"margin: 0px; padding: 0px; border: none; outline: none;\"></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.9em;\">Menjadikan Masjid sebagai Pusat Unggulan dalam Bidang Peribadatan, Dakwah dan Sosial Keagamaan dengan Sistem Pengelolaan yang Modern</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.9em;\"><br style=\"margin: 0px; padding: 0px; border: none; outline: none;\"></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.9em;\">2.Misi</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.9em;\"></p><ul class=\"styled-list\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 20px; border: none; outline: none; list-style: none; position: relative;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; border: none; outline: none; list-style: none; position: relative; line-height: 24px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 14px;\">Melaksanakan, membina, mengembangkan, menanamkan dan menerapkan ajaran Islam yang berwawasan luas, toleran dan penuh persaudaraan dalam semangat ukhuwah Islamiyah, ukhuwah wathaniyah, dan ukhuwah basyariyah.</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; border: none; outline: none; list-style: none; position: relative; line-height: 24px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 14px;\">Membina dan mengelola masjid dan pendidikan sebagai wahana pembinaan watak dan kepribadian, dengan menerapkan manajemen modern yang terencana, terarah, terpadu, profesional, efektif dan efisien</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; border: none; outline: none; list-style: none; position: relative; line-height: 24px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 14px;\">Membangun, membina dan mengembangkan usaha-usaha yang bersifat bisnis yang relevan yang hasilnya untuk pengembangan dan menunjang kegiatan kemasjidan dan pendidikan.<br style=\"margin: 0px; padding: 0px; border: none; outline: none;\"></li><li></li></ul>', '<span class=\"mw-headline\" id=\"Masjid_pertama\">Sejarah</span><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Menara-menara, serta kubah masjid yang besar, seakan menjadi saksi betapa jayanya&nbsp;<a href=\"https://id.wikipedia.org/wiki/Islam\" title=\"Islam\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Islam</a>&nbsp;pada kurun abad pertengahan. Masjid telah melalui serangkaian tahun-tahun terpanjang di sejarah hingga sekarang. Mulai dari&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perang_Salib\" title=\"Perang Salib\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Perang Salib</a>&nbsp;sampai&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perang_Teluk\" class=\"mw-redirect\" title=\"Perang Teluk\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Perang Teluk</a>. Selama lebih dari 1000 tahun pula, arsitektur Masjid perlahan-lahan mulai menyesuaikan bangunan masjid dengan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Arsitektur\" title=\"Arsitektur\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">arsitektur</a>&nbsp;modern.</p><h3 style=\"color: rgb(0, 0, 0); margin: 0.3em 0px 0px; padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-size: 1.2em; line-height: 1.6; font-weight: bold; font-family: sans-serif;\"><span class=\"mw-headline\" id=\"Masjid_pertama\">Masjid pertama</span></h3><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Ketika Nabi Muhammad saw tiba di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madinah\" title=\"Madinah\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Madinah</a>, dia memutuskan untuk membangun sebuah masjid, yang sekarang dikenal dengan nama&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_Nabawi\" title=\"Masjid Nabawi\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid Nabawi</a>, yang berarti Masjid Nabi. Masjid Nabawi terletak di pusat&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madinah\" title=\"Madinah\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Madinah</a>. Masjid Nabawi dibangun di sebuah lapangan yang luas. Di Masjid Nabawi, juga terdapat mimbar yang sering dipakai oleh Nabi Muhammad saw<sup id=\"cite_ref-Masdjid1_1-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://id.wikipedia.org/wiki/Masjid#cite_note-Masdjid1-1\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[1]</a></sup>. Masjid Nabawi menjadi jantung kota Madinah saat itu. Masjid ini digunakan untuk kegiatan politik, perencanaan kota, menentukan strategi militer, dan untuk mengadakan perjanjian. Bahkan, di area sekitar masjid digunakan sebagai tempat tinggal sementara oleh orang-orang fakir miskin.</p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Saat ini,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjidil_Haram\" title=\"Masjidil Haram\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjidil Haram</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_Nabawi\" title=\"Masjid Nabawi\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid Nabawi</a>&nbsp;dan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_al-Aqsa\" class=\"mw-redirect\" title=\"Masjid al-Aqsa\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid al-Aqsa</a>&nbsp;adalah tiga masjid tersuci di dunia.</p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\"><br></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\"><span class=\"mw-headline\" id=\"Masjid_pertama\" style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Sejarah</span></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Menara-menara, serta kubah masjid yang besar, seakan menjadi saksi betapa jayanya&nbsp;<a href=\"https://id.wikipedia.org/wiki/Islam\" title=\"Islam\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Islam</a>&nbsp;pada kurun abad pertengahan. Masjid telah melalui serangkaian tahun-tahun terpanjang di sejarah hingga sekarang. Mulai dari&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perang_Salib\" title=\"Perang Salib\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Perang Salib</a>&nbsp;sampai&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perang_Teluk\" class=\"mw-redirect\" title=\"Perang Teluk\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Perang Teluk</a>. Selama lebih dari 1000 tahun pula, arsitektur Masjid perlahan-lahan mulai menyesuaikan bangunan masjid dengan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Arsitektur\" title=\"Arsitektur\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">arsitektur</a>&nbsp;modern.</p><h3 style=\"margin: 0.3em 0px 0px; font-weight: bold; line-height: 1.6; font-size: 1.2em; color: rgb(0, 0, 0); padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-family: sans-serif;\"><span class=\"mw-headline\" id=\"Masjid_pertama\">Masjid pertama</span></h3><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Ketika Nabi Muhammad saw tiba di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madinah\" title=\"Madinah\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Madinah</a>, dia memutuskan untuk membangun sebuah masjid, yang sekarang dikenal dengan nama&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_Nabawi\" title=\"Masjid Nabawi\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid Nabawi</a>, yang berarti Masjid Nabi. Masjid Nabawi terletak di pusat&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madinah\" title=\"Madinah\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Madinah</a>. Masjid Nabawi dibangun di sebuah lapangan yang luas. Di Masjid Nabawi, juga terdapat mimbar yang sering dipakai oleh Nabi Muhammad saw<sup id=\"cite_ref-Masdjid1_1-2\" class=\"reference\" style=\"font-size: 11.2px; line-height: 1; unicode-bidi: isolate; white-space: nowrap;\"><a href=\"https://id.wikipedia.org/wiki/Masjid#cite_note-Masdjid1-1\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[1]</a></sup>. Masjid Nabawi menjadi jantung kota Madinah saat itu. Masjid ini digunakan untuk kegiatan politik, perencanaan kota, menentukan strategi militer, dan untuk mengadakan perjanjian. Bahkan, di area sekitar masjid digunakan sebagai tempat tinggal sementara oleh orang-orang fakir miskin.</p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Saat ini,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjidil_Haram\" title=\"Masjidil Haram\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjidil Haram</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_Nabawi\" title=\"Masjid Nabawi\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid Nabawi</a>&nbsp;dan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_al-Aqsa\" class=\"mw-redirect\" title=\"Masjid al-Aqsa\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid al-Aqsa</a>&nbsp;adalah tiga masjid tersuci di dunia.</p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\"><br></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\"><span class=\"mw-headline\" id=\"Masjid_pertama\" style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Sejarah</span></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Menara-menara, serta kubah masjid yang besar, seakan menjadi saksi betapa jayanya&nbsp;<a href=\"https://id.wikipedia.org/wiki/Islam\" title=\"Islam\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Islam</a>&nbsp;pada kurun abad pertengahan. Masjid telah melalui serangkaian tahun-tahun terpanjang di sejarah hingga sekarang. Mulai dari&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perang_Salib\" title=\"Perang Salib\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Perang Salib</a>&nbsp;sampai&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perang_Teluk\" class=\"mw-redirect\" title=\"Perang Teluk\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Perang Teluk</a>. Selama lebih dari 1000 tahun pula, arsitektur Masjid perlahan-lahan mulai menyesuaikan bangunan masjid dengan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Arsitektur\" title=\"Arsitektur\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">arsitektur</a>&nbsp;modern.</p><h3 style=\"margin: 0.3em 0px 0px; font-weight: bold; line-height: 1.6; font-size: 1.2em; color: rgb(0, 0, 0); padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-family: sans-serif;\"><span class=\"mw-headline\" id=\"Masjid_pertama\">Masjid pertama</span></h3><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Ketika Nabi Muhammad saw tiba di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madinah\" title=\"Madinah\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Madinah</a>, dia memutuskan untuk membangun sebuah masjid, yang sekarang dikenal dengan nama&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_Nabawi\" title=\"Masjid Nabawi\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid Nabawi</a>, yang berarti Masjid Nabi. Masjid Nabawi terletak di pusat&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madinah\" title=\"Madinah\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Madinah</a>. Masjid Nabawi dibangun di sebuah lapangan yang luas. Di Masjid Nabawi, juga terdapat mimbar yang sering dipakai oleh Nabi Muhammad saw<sup id=\"cite_ref-Masdjid1_1-2\" class=\"reference\" style=\"font-size: 11.2px; line-height: 1; unicode-bidi: isolate; white-space: nowrap;\"><a href=\"https://id.wikipedia.org/wiki/Masjid#cite_note-Masdjid1-1\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[1]</a></sup>. Masjid Nabawi menjadi jantung kota Madinah saat itu. Masjid ini digunakan untuk kegiatan politik, perencanaan kota, menentukan strategi militer, dan untuk mengadakan perjanjian. Bahkan, di area sekitar masjid digunakan sebagai tempat tinggal sementara oleh orang-orang fakir miskin.</p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Saat ini,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjidil_Haram\" title=\"Masjidil Haram\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjidil Haram</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_Nabawi\" title=\"Masjid Nabawi\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid Nabawi</a>&nbsp;dan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_al-Aqsa\" class=\"mw-redirect\" title=\"Masjid al-Aqsa\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid al-Aqsa</a>&nbsp;adalah tiga masjid tersuci di dunia.</p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\"><br></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\"><span class=\"mw-headline\" id=\"Masjid_pertama\" style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Sejarah</span></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Menara-menara, serta kubah masjid yang besar, seakan menjadi saksi betapa jayanya&nbsp;<a href=\"https://id.wikipedia.org/wiki/Islam\" title=\"Islam\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Islam</a>&nbsp;pada kurun abad pertengahan. Masjid telah melalui serangkaian tahun-tahun terpanjang di sejarah hingga sekarang. Mulai dari&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perang_Salib\" title=\"Perang Salib\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Perang Salib</a>&nbsp;sampai&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perang_Teluk\" class=\"mw-redirect\" title=\"Perang Teluk\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Perang Teluk</a>. Selama lebih dari 1000 tahun pula, arsitektur Masjid perlahan-lahan mulai menyesuaikan bangunan masjid dengan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Arsitektur\" title=\"Arsitektur\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">arsitektur</a>&nbsp;modern.</p><h3 style=\"margin: 0.3em 0px 0px; font-weight: bold; line-height: 1.6; font-size: 1.2em; color: rgb(0, 0, 0); padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-family: sans-serif;\"><span class=\"mw-headline\" id=\"Masjid_pertama\">Masjid pertama</span></h3><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Ketika Nabi Muhammad saw tiba di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madinah\" title=\"Madinah\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Madinah</a>, dia memutuskan untuk membangun sebuah masjid, yang sekarang dikenal dengan nama&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_Nabawi\" title=\"Masjid Nabawi\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid Nabawi</a>, yang berarti Masjid Nabi. Masjid Nabawi terletak di pusat&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madinah\" title=\"Madinah\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Madinah</a>. Masjid Nabawi dibangun di sebuah lapangan yang luas. Di Masjid Nabawi, juga terdapat mimbar yang sering dipakai oleh Nabi Muhammad saw<sup id=\"cite_ref-Masdjid1_1-2\" class=\"reference\" style=\"font-size: 11.2px; line-height: 1; unicode-bidi: isolate; white-space: nowrap;\"><a href=\"https://id.wikipedia.org/wiki/Masjid#cite_note-Masdjid1-1\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[1]</a></sup>. Masjid Nabawi menjadi jantung kota Madinah saat itu. Masjid ini digunakan untuk kegiatan politik, perencanaan kota, menentukan strategi militer, dan untuk mengadakan perjanjian. Bahkan, di area sekitar masjid digunakan sebagai tempat tinggal sementara oleh orang-orang fakir miskin.</p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Saat ini,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjidil_Haram\" title=\"Masjidil Haram\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjidil Haram</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_Nabawi\" title=\"Masjid Nabawi\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid Nabawi</a>&nbsp;dan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Masjid_al-Aqsa\" class=\"mw-redirect\" title=\"Masjid al-Aqsa\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Masjid al-Aqsa</a>&nbsp;adalah tiga masjid tersuci di dunia.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_takmir`
--

CREATE TABLE `tb_takmir` (
  `id_takmir` int(11) NOT NULL,
  `nama_takmir` varchar(50) NOT NULL,
  `jk_takmir` varchar(20) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `foto_takmir` text NOT NULL,
  `bidang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_takmir`
--

INSERT INTO `tb_takmir` (`id_takmir`, `nama_takmir`, `jk_takmir`, `no_hp`, `alamat`, `foto_takmir`, `bidang`) VALUES
(5, 'KRT H A Muchsin Kamaludiningrat', 'laki-laki', 2147483647, 'opoe', 'takmir1.jpg', 'Penasehat'),
(6, ' Ir. H Azman Latief', 'laki-laki', 646745, 'fdhfh', 'takmir2.jpg', 'Ketua Umum'),
(7, 'Ir. Arief Purwanto', 'laki-laki', 4656, 'fhgfh', 'takmir3.jpg', 'Sekretaris Umum'),
(8, 'Cipto Budi Wibowo', 'laki-laki', 76578, 'ghkk', 'takmir4.jpg', 'Bendahara Umum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_jadwal_jumatan`
--
ALTER TABLE `tb_jadwal_jumatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal_kajian`
--
ALTER TABLE `tb_jadwal_kajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal_lainnya`
--
ALTER TABLE `tb_jadwal_lainnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal_tpa`
--
ALTER TABLE `tb_jadwal_tpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jamaah`
--
ALTER TABLE `tb_jamaah`
  ADD PRIMARY KEY (`id_jamaah`);

--
-- Indexes for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `tb_masjid`
--
ALTER TABLE `tb_masjid`
  ADD PRIMARY KEY (`id_masjid`);

--
-- Indexes for table `tb_takmir`
--
ALTER TABLE `tb_takmir`
  ADD PRIMARY KEY (`id_takmir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jadwal_jumatan`
--
ALTER TABLE `tb_jadwal_jumatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jadwal_kajian`
--
ALTER TABLE `tb_jadwal_kajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jadwal_lainnya`
--
ALTER TABLE `tb_jadwal_lainnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jadwal_tpa`
--
ALTER TABLE `tb_jadwal_tpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jamaah`
--
ALTER TABLE `tb_jamaah`
  MODIFY `id_jamaah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  MODIFY `id_keuangan` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_masjid`
--
ALTER TABLE `tb_masjid`
  MODIFY `id_masjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_takmir`
--
ALTER TABLE `tb_takmir`
  MODIFY `id_takmir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
