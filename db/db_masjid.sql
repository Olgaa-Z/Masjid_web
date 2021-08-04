-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 04:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(4, 'PSBB Transisi Berakhir Hari Ini semoga ditahun ini apapun yang diinginkan oleh pembaca dapat terkabulkan', 'Hai, baru saja kita memasuki tahun yang baru yakni tahun 2018, semoga ditahun ini apapun yang diinginkan oleh pembaca dapat terkabulkan, dan semoga yang telah disemogakan dapat di ter aminkan hehe .. oke fokus kepembahasan yah, pad atutorial kali ini saya akan membahas tentang Cara Membuat Limit Text Menggunakan Codeigniter', '2020-11-23 07:46:21', '', '1606117581.png', ''),
(11, 'Lesti Kejora Rizky Billar ', 'Hai, baru saja kita memasuki tahun yang baru yakni tahun 2018, semoga ditahun ini apapun yang diinginkan oleh pembaca dapat terkabulkan, dan semoga yang telah disemogakan dapat di ter aminkan hehe .. oke fokus kepembahasan yah, pad atutorial kali ini saya akan membahas tentang Cara Membuat Limit Text Menggunakan Codeigniter', '2020-11-23 07:47:51', '', '1606117671.png', ''),
(12, 'Update Sebaran Corona di Indonesia', '<b>Haai</b>, baru saja kita memasuki tahun yang baru yakni tahun 2018, semoga ditahun ini apapun yang diinginkan oleh pembaca dapat terkabulkan, dan semoga yang telah disemogakan dapat di ter aminkan hehe .. oke fokus kepembahasan yah, pad atutorial kali ini saya akan membahas tentang Cara Membuat Limit Text Menggunakan Codeigniter', '2020-12-26 13:55:32', '', '1606117734.png', ''),
(14, 'Presiden mengumumkan vaksin Covid 19 akan segera disebarluaskan', '<p>vaksin akan segera disebarluaskan di seluauh provinsi indonesia&nbsp;<span style=\"font-size: 1rem;\">vaksin akan segera disebarluaskan di seluauh provinsi indonesia&nbsp;</span><span style=\"font-size: 1rem;\">vaksin akan segera disebarluaskan di seluauh provinsi indonesia&nbsp;</span><span style=\"font-size: 1rem;\">vaksin akan segera disebarluaskan di seluauh provinsi indonesia&nbsp;</span><span style=\"font-size: 1rem;\">vaksin akan segera disebarluaskan di seluauh provinsi indonesia&nbsp;</span><span style=\"font-size: 1rem;\">vaksin akan segera disebarluaskan di seluauh provinsi indonesia&nbsp;</span><span style=\"font-size: 1rem;\">vaksin akan segera disebarluaskan di seluauh provinsi indonesia&nbsp;</span><span style=\"font-size: 1rem;\">vaksin akan segera disebarluaskan di seluauh provinsi indonesia&nbsp;</span></p>', '2020-12-18 09:09:21', '', '1606967787.png', '');

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
(2, 'Gedung satu', 'gedungsatu.jpg\r\n'),
(3, 'Gedung satu', 'gedungsatu.jpg\r\n'),
(4, 'Tempat Wudhu edit', 'logo.png');

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
(2, 'tempatwudhu.jpg', 'pesepeda Search finished, found 1 page(s) matching the search query.', 0, '2020-11-17'),
(4, 'tempatwudhu.jpg', 'edit 2', 0, '0000-00-00');

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
(2, '2020-11-19', 'imam1 edit', 'khatib1', 'muazin 1');

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
(2, '2020-11-30', 'EDIT2 PERGAULAN BEBAS ', 'Ustadz Maulana', '<b>Assalamualaikum Warahmatullahi Wabarakatuh</b>\r\n\r\nAlhamdulillah kita telah diberi kesempatan pada siang hari ini untuk bertemu di masjid besar ini. Alhamdulillah kita diberi nikmat sehat yang tiada tarannya sehingga kita dapat berkumpul untuk saling bersilaturahim.\r\n\r\nSaudara sekalian yang saya cintai, karena disini mayoritas adalah para remaja walaupun ada beberapa yang sudah ibu-ibu dan bapak-bapak.\r\n\r\n\r\n \r\nMaka dari itu disini saya akan sedikit menyinggung tentang penrgaulan bebas yang sudah menjadi momok bagi masyarakat bagi kalangan remaja, dan semoga bagi yang sudah menjadi orang tua dapat menjaga anaknya dari pengaruh negatif pergaulan bebas.\r\n\r\nKita sudah ketahui jika dalam seluruh kehidupan ini orang tua kita tidak selalu dapat mengawasi kita 100 %, mungkin mereka hanya bisa mengawasi kita ketika berada di rumah atau ketika kita masih kecil dan masih membtuhkan bantuan dari kedua orang tua kita baik ketika belajar berjalan, membaca, bermain, menulis, berbicara dan lain-lain.\r\n\r\nAkan tetapi semua itu sangatlah berbeda ketika kita sudah menginjak remaja atau baligh dimana jangkauan sosial kita lebih luas, baik itu dari lingkungan sekolah atau lingkungan bermain. Apalagi kita sudah merasakan ketertarikan dengan lawan jenis.\r\n\r\nPada dasarnya ketertarikan atau bahasa gaulnya virus merah jambu itu adalah fitrah dari yang Maha Kuasa, itu naluri nrmal setiap manusia.\r\n\r\nTanpa fitrah itu kita tidak dapat berkembang biak sampai sekarang ini, mungkin kita tidak dapat berada disini. Apalagi tidak hanya itu dari cinta kita muncul ke nafsu seksual. Ya tidak masalah jika nafsu itu disalurkan ketika sudah halal /menikah justru akan berpahala. Tapi bagaimana jika nafsu itu disalurkan sebelum waktunnya.\r\nDiamana kita melakukan segala sesuatu yang negatif itu sangan didukung oleh lingkungan kita, teman-teman kita, yang satu udah punya pacar satnnya ikut-ikutan biar gak dikatakan ketinggalan zaman begini dan begitu. Ya begitulah remana sangan rentan sekali dengan coba-coba, ikut-ikutan padahal mereka sendiri sudah tau kalau itu tidak benar.\r\n\r\nOleh karena itu saudara sekalian perlunnya mengikuti kajian seperti ini, agar kita selalu didekatkan dengan teman-teman yang positif, yang selalu mengajak kepada kebaikan, hindari pergaulan bebas, dan buat para bapak-bapak dan ibu-ibu semoga dapat selalu menjaga anaknya dari ergaulan bebas bagaimanapun carannya.\r\n\r\nSekian wejangan sedikit dari saya, semoga dapat memberikan segudang manfaat bagi saudara sekalian.\r\n\r\nWasalamualaikum. Warahmatullahi wabarakatuh.'),
(3, '2020-12-02', 'MENUNTUT ILMUE', 'Ustads Abdul Rohim', 'Assalamualaikum Warahmatullahi Wabarakatuh\r\n\r\nAlhamdulillah kita telah diberi kesempatan pada siang hari ini untuk bertemu di masjid besar ini. Alhamdulillah kita diberi nikmat sehat yang tiada tarannya sehingga kita dapat berkumpul untuk saling bersilaturahim.\r\n\r\nBaiklah bapak ibu dan saudara-saudara sekalian, disini saya akan sedikit membahas tentang menuntut ilmu. sebagaimana firman Allah dalam surah AL-Mujadalah ayat 11 yang artinnya Artinya : “Allah akan mengangkat derajat orang beriman dan yang berilmu dengan beberapa derajat.”\r\n\r\nDalam ayat tersebut dijelaskan bahwa keutamaan orang yang mau menuntut ilmu baik itu ilmu dunia maupun akhirat, karena dengan ilmu kita tidak akan buta saudara-saudara. Kita dapat melihat segala sesuatu dari sudut pandang manapun dan dengan demikian fikiran kita selalu jernh dan bijak dalam mengambil segala keputusan.\r\n\r\nSebagai contoh sejak kecil kita disekolahkan, kita dapat membaca, menulis, berhitung, menganalisa, dan kita mempelajari beraneka ragam ilmu akademik maupun terapan seperti matematika, fisika, bioligi, sosiologi, akutansi, PPKN, pendidikan agama, dan lain sebagainnya.\r\n\r\nDengan ilmu tersebut wawasan kita menjadi semakin beragam, dari fisika kita jadi tahu kalau ait dapat berubah wujud, dari matematika kita dapat berhitung. Dari ilmu agama kita dapat mengetahui sejarah islam, aqidah akhlak dan bagaimana sharusnya kita bersikap kepada Allah dan sesama manusia.\r\n\r\nJika kita hanya berdiam diri tanpa mau belajar kita akan buntu dari melihat segalannya, apalagi sebagaimana pentingnya ilmu agama yaitu untuk masa depan akhirat kita nanti, karena ilmu agama sendiri sangat banyak kita tidak hanya belajar di sekolah dan kajian ilmu saja kita juga belajar dari kehidupan sehari-hari. Baik tu ketika membantu orang, beramal, sedekah, solat dan sebaainnya.\r\n\r\nSekian wejangan sedikit dari saya, semoga dapat memberikan segudang manfaat bagi saudara sekalian.\r\n\r\nWasalamualaikum. Warahmatullahi wabarakatuh.'),
(5, '2020-12-02', 'IBU', 'Ustadz Hanan', 'Assalamualaikum Warahmatullahi Wabarakatuh\r\n\r\nAlhamdulillah kita telah diberi kesempatan pada siang hari ini untuk bertemu di masjid besar ini. Alhamdulillah kita diberi nikmat sehat yang tiada tarannya sehingga kita dapat berkumpul untuk saling bersilaturahim.\r\n\r\nSaudara –saudara seklian yang saya cintai, disini saya akan sedikit memberikan wejangan tentang ‘’ibu’’. Seperti firman Allah dalam surat Al-Isra’ itu berbunyi seperti ini:“Dan tuhanmu telah memerintahkan agar kamu jangan menyembah selain Dia dan hendaklah berbuat baik kepada ibu-bapak.\r\n\r\njika salah seorang diantara keduanya atau kedua-duanya sampai berusia lanjut dalam pemeliharaanmu, maka jangan sekali-kali mengatakan ‘Ah’ dan janganlah engkau membentak keduanya, dan ucapankanlah kepada keduanya perkataan yang baik.”\r\n\r\nDalam ayat tersebut dijelaskan bahwa kita sebagai anak harus menghormati kedua orang tua terutama adalah ibu. Bahkan kita sampai tidak boleh berkata ‘’Ah’’ apalagi sampai membentaknya. Karena karena orang tualah kita dapat berada di dunia ini, Allah memberi amanat berupa kita melalui mereka.\r\n\r\nApalagi seorang ibu, seorang yang telah mengandung kita selama sembilan bulan denan bersusah-susah, melahirkan kita dengan rasa sakit yang luar biasa dan ketika kita lahir, kita hanya mendapat kasih sayang yang tak terhingga seperti kata pepatah yang mengatakan ‘’kasih ibu sepanjang masa’’\r\n\r\nHal tersebut berarti bahwa kasih sayang seorang ibu memang tak terhingga memberi tanpa pamrih dan mengharap imbalan kembali. Ada juga yang mengatakan bahwa surga berada di bawah telapak kaki ibu. Hal tersebut berarti begitu berjasannya seorang ibu kepada kita sampai kita wajib berbuat baik kepada ibu kita sampai akhir hayat nanti.\r\n\r\nSekian wejangan sedikit dari saya, semoga dapat memberikan segudang manfaat bagi saudara sekalian.\r\n\r\nWasalamualaikum. Warahmatullahi wabarakatuh.');

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
(3, '2020-11-21', 'EMaulid Nabi', 'Emaulid nabi akan diadakan pada tanggal 20 bulan ini. diharapkan kepada masyrakat dan alim ulama menyemarakkan');

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
(3, '2020-11-28', '<p>jwfhghfghfhsagfhgaecv vzcsdfwdfawg sgafdgfGf</p>'),
(5, '2020-11-27', '<p>opqjjc&nbsp; fgdf ggsdhd hdfhsfh</p>'),
(6, '2020-11-19', '<p>edit dskjhaj bbewtfy teh ghcggwhgefhgfhgfhf hcvbcvghdfe</p>');

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
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `zakat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jamaah`
--

INSERT INTO `tb_jamaah` (`id_jamaah`, `nama`, `umur`, `jk`, `alamat`, `added_on`, `zakat`) VALUES
(9, 'popo', 25, 'l', 'sleman', '2020-11-23 03:37:32', ''),
(11, 'popo', 25, 'l', 'sleman', '2020-11-23 03:37:46', ''),
(12, 'lalla', 22, 'p', 'padang', '2020-11-23 03:37:46', ''),
(13, 'popo', 25, 'l', 'sleman', '2020-11-23 03:37:56', ''),
(14, 'lalla', 22, 'p', 'padang', '2020-11-23 03:37:56', ''),
(16, 'lalla', 22, 'p', 'padang', '2020-11-23 03:39:10', ''),
(17, 'popo', 25, 'l', 'sleman', '2020-11-23 03:41:40', ''),
(18, 'lalla', 22, 'p', 'padang', '2020-11-23 03:41:40', ''),
(19, 'Sigit Suryono', 25, 'laki-laki', 'Prambanan', '2020-11-23 03:54:34', ''),
(20, 'Zelvia Olga Maharani', 22, 'perempuan', 'Padang', '2020-11-23 03:54:34', ''),
(21, 'Agus Khaer', 19, 'laki-laki', 'banjar', '2020-11-23 03:54:34', ''),
(22, 'Sigit Suryono edit', 26, 'laki-laki', 'Prambanan', '2020-11-23 06:13:03', ''),
(23, 'Zelvia Olga Maharani edit', 22, 'perempuan', 'Padang', '2020-11-23 06:13:03', ''),
(24, 'Agus Khaer', 19, 'laki-laki', 'banjar', '2020-11-23 06:13:03', 'Ya'),
(25, 'hardiansah', 30, 'laki-laki', 'jogja', '2020-12-22 22:39:21', 'Tidak'),
(26, 'zeeee', 21, 'perempuan', '23rq32', '2020-12-23 01:17:09', 'Tidak');

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
(15, 30000, 0, '2020-11-06', 'dueee', '2020-11-27 03:12:46', ''),
(16, 0, 125000, '2020-11-26', 'out 2', '2020-11-27 03:15:03', ''),
(17, 156000, 0, '2020-12-02', 'in', '2020-12-02 04:40:45', ''),
(18, 0, 100000, '2020-12-02', 'out', '2020-12-02 04:41:05', ''),
(19, 0, 100000, '2020-12-02', 'out', '2020-12-02 04:41:05', ''),
(20, 156000, 0, '2020-12-02', 'in', '2020-12-02 04:40:45', ''),
(21, 0, 100000, '2020-12-02', 'out', '2020-12-02 04:41:05', ''),
(22, 30000, 0, '2020-11-06', 'dueee', '2020-11-27 03:12:46', ''),
(25, 156000, 0, '2020-12-02', 'in', '2020-12-02 04:40:45', ''),
(26, 0, 100000, '2020-12-02', 'out', '2020-12-02 04:41:05', ''),
(28, 0, 125000, '2020-11-26', 'out 2', '2020-11-27 03:15:03', ''),
(29, 156000, 0, '2020-12-02', 'in', '2020-12-02 04:40:45', ''),
(31, 98000, 0, '2020-12-02', 'masuuuk', '2020-12-02 07:11:19', ''),
(32, 2300, 0, '2020-12-01', 'www', '2020-12-02 07:12:13', ''),
(33, 0, 13000, '2020-12-02', 'outttttt la', '2020-12-02 07:13:07', ''),
(34, 1500000, 0, '2020-12-03', 'untuk beli keperluan masjid yang dishgdhsgdnsabhfeshjcdfegersggdg ggredg', '2020-12-03 06:37:33', ''),
(35, 0, 125000, '2020-12-04', 'axa', '2020-12-04 07:22:04', ''),
(36, 2300, 0, '2020-12-01', 'www', '2020-12-21 09:01:44', ''),
(37, 2300, 0, '2020-12-01', 'www edit', '2020-12-21 09:01:56', ''),
(38, 23000, 0, '2020-12-01', 'www edit', '2020-12-21 09:02:04', ''),
(39, 230000, 0, '2020-12-01', 'www edit', '2020-12-21 09:02:13', ''),
(40, 0, 125000, '2020-12-04', 'axa edit', '2020-12-21 09:09:39', ''),
(41, 0, 12500, '2020-12-04', 'axa edit', '2020-12-21 09:09:46', ''),
(42, 230000, 0, '2020-12-01', 'www edit 2', '2020-12-21 09:17:00', ''),
(43, 230000, 0, '2020-12-01', 'www edit 3', '2020-12-21 09:17:09', ''),
(44, 0, 12500, '2020-12-04', 'axa edit 2', '2020-12-21 09:17:31', '');

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
(1, 'Al-Ikhlas', 'jln lely 1, Ngringin Concat, Sleman', '+6281289003411', 'nurulhudamasjid@gmail.com', 'Masjid Tua Palopo didirikan oleh Raja Luwu bernama Sultan Abdullah Matinroe pada tahun 1604, menjadikan Masjid Tua Palopo sebagai salah satu masjid tertua dan bersejarah di Indonesia.\r\n\r\nPalopo sendiri diambil dari kata dalam bahasa Bugis dan Luwu yang memiliki hubungan dengan proses pembangunan Masjid Tua Palopo. Bangunan ini memiliki luas sebesar 15 meter persegi dan berada di Kota Palopo, Sulawesi Selatan.', 'logo.png', 'masjid.jpg', 'VISI\r\n\r\nTerwujudnya Masjid Agung Jawa Tengah yang makmur, mandiri, modern, dan megah, serta mampu melaksanakan fungsinya sebagai pusat peribadatan, wahana musyawarah dan silatur rahim, lembaga dakwah, pendidikan, pengembangan ilmu, dan budaya Islami, serta ekonomi pemberdayaan umat, yang dilandasi oleh keimanan dan ketaqwaan kepada Allah swt.\r\nMISI\r\n\r\nMenyelenggarakan berbagai macam kegiatan untuk memakmurkan masjid dan meningkatkan syiar Islam.\r\nMembentuk unit-unit kerja yang bergerak dalam bidang keuangan dan bisnis untuk menggali dana guna membiayai pengelolaan masjid dan kemaslahatan umat.\r\nMewujudkan terjaganya kesucian, kebersihan, dan ketertiban masjid\r\nMewujudkan sebuah masjid yang luas dan mampu bertahan lama, dengan arsitektur yang mencerminkan perpaduan antara corak universal arsitektur Islam, budaya lokal, dan teknologi modern, serta dilengkapi dengan berbagai macam fasilitas, agar dapat berfungsi sesuai dengan tuntunan Rasulullah saw.\r\nMewujudkan sistem pengelolaan masjid yang modern dan profesional.\r\nMengembangkan seni budaya bernafaskan Islam yang harmoni dengan budaya lokal dan pemeliharaan estetika masjid.\r\nMewujudkan masjid sebagai sentral wisata religius dan kebanggaan masyarakat Jawa Tengah.\r\nMenyelenggarakan kegiatan-kegiatan peribadatan, dakwah dan pendidikan dalam rangka membimbing umat agar memiliki keteguhan iman dan taqwa, akhlaqul karimah, kesalihan individu dan sosial, semangat ukhuwah Islamiyah, patriotisme, berilmu, patuh pada hukum, dan peduli lingkungan serta memelihara iklim sejuk.\r\nMewujudkan keterpaduan yang harmonis antara Masjid Agung Jawa Tengah dengan Masjid Besar Kauman Semarang, Masjid Raya Baiturrahman dan menjalin kerjasama dengan masjid-masjid lain, pemerintah dan seluruh komponen masyarakat.\r\nJATI DIRI\r\n\r\nSebuah tempat ibadah yang merefleksikan model peribadatan di Masjid Haramain yang dibangun oleh pemerintah dan masyarakat Jawa Tengah, sebagai tempat umat Islam bersujud kepada Allah swt dan tempat mendidik mereka menjadi umat yang beriman, bertaqwa, berakhlaqul karimah, memelihara kesatuan dan persatuan umat/bangsa, dan keserasian antara arsitektur Masjid Nabawi yang dipadukan dengan arsitektur masjid-masjid para wali di Jawa.', '<b>Masjid Agung Al-Azhar </b>(MAA) didirikan oleh Yayasan Pesantren Islam ( <b>YPI</b> ) pada tanggal 19 Nopember 1953 di atas tanah milik Yayasan seluas 43.755 m2 dan selesai dibangun tahun 1958.Pada tahun 1960 Prof. Dr. Mahmoud Syaltout (Rektor Universitas Al-Azhar Mesir) dalam kunjungannya ke Masjid Agung Kebayoran Baru Jakarta, memberikan kuliah umum kepada jamaah masjid, dan memberi nama ”Al-Azhar” kepada Masjid ini, yang sebelumnya lebih dikenal dengan nama ”Masjid Agung Kebayoran Baru”. Pada tahun 1962 dalam kiprahnya membina pemuda dan pemudi Islam, MAA mengadakan kegiatan Pramuka Gugus Depan dan sore harinya Pendidikan Islam Al-Azhar (PIA). Setelah Orde Lama tumbang dan lahirlah Orde Baru membawa angin segar bagi dakwah Islam khususnya bagi umat Islam. MAA mulai mendiirikan lembaga pendidikan formal (th 1967), diawali dengan TK Islam Al-Azhar dan seterusnya susul menyusul mendirikan SDIA, SMPIA, SMAIA dan pada akhirnya mendirikan Universitas Al Azhar Indonesia\r\n\r\nLalu masjid bersejarah apa sajakah yang merupakan masjid tertua di Indonesia? Inilah masjid tertua dan paling bersejarah di Indonesia!');

-- --------------------------------------------------------

--
-- Table structure for table `tb_socmed`
--

CREATE TABLE `tb_socmed` (
  `id` int(11) NOT NULL,
  `socmed` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_socmed`
--

INSERT INTO `tb_socmed` (`id`, `socmed`, `link`) VALUES
(1, 'Instagram', 'https://www.instagram.com/'),
(2, 'Twitter', 'https://twitter.com/'),
(3, 'Facebook', 'https://www.facebook.com/');

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
(6, ' Ir. H Azman Latief', 'laki-laki', 646745, 'fdhfh', 'takmir2.jpg', 'Ketua Umum'),
(7, 'Ir. Arief Purwanto edit', 'laki-laki', 4656, 'fhgfh ', 'takmir3.jpg', 'Sekretaris Umum'),
(8, 'Cipto Budi Wibowo edit2', 'laki-laki', 76578, 'Ngringin, Condong Catur ', 'takmir4.jpg', 'Bendahara Umum');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `password`) VALUES
(3, 'admin', 'admin', '$2y$10$a4eexUxQc.b4k9L3xB.Oqu2R1foarmL9AdatlbKvTsZBMt2CDy9Xm'),
(4, 'superadmin', 'superadmin', '$2y$10$FIJPGasZIiICrcc.uiEXLe.cESQZXElaOFYQL7agSUvP8itWLmp2u');

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
-- Indexes for table `tb_socmed`
--
ALTER TABLE `tb_socmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_takmir`
--
ALTER TABLE `tb_takmir`
  ADD PRIMARY KEY (`id_takmir`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jadwal_kajian`
--
ALTER TABLE `tb_jadwal_kajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jadwal_lainnya`
--
ALTER TABLE `tb_jadwal_lainnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jadwal_tpa`
--
ALTER TABLE `tb_jadwal_tpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jamaah`
--
ALTER TABLE `tb_jamaah`
  MODIFY `id_jamaah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  MODIFY `id_keuangan` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_masjid`
--
ALTER TABLE `tb_masjid`
  MODIFY `id_masjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_socmed`
--
ALTER TABLE `tb_socmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_takmir`
--
ALTER TABLE `tb_takmir`
  MODIFY `id_takmir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
