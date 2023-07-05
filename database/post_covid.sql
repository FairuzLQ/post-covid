-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 05:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(100) NOT NULL,
  `ad_name` varchar(20) NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `ad_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `ad_password`) VALUES
(1, 'admin', 'admin@mail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `descrip` varchar(10000) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `category`, `descrip`, `img`, `url`, `date`, `status`) VALUES
(13, 'Sleman Bersiap Melalui Transisi Menuju Endemi Covid-19', 'Covid-19 Information', '<p class=\"MsoNormal\"><font color=\"#000000\">Pemerintah kabupatan Sleman di daerah istimewa Yogyakarta bersiap melalui transisi dari masa pandemi menuju endemi Covid-19 setelah angka kasus penularan corona di wilayahnya menurun. <o:p></o:p></font></p><p class=\"MsoNormal\"><font color=\"#000000\">“Saat ini, sesuai dengan perkembangan kasus Covid-19 di Sleman, kami mulai mempersiapkan pandemi menuju endemi Covid-19”, kata Kepala Dinas Kesehatan Sleman Cahya Purnama di Sleman. <o:p></o:p></font></p><p class=\"MsoNormal\"><font color=\"#000000\">Kebijakan itu, menurut diam dijalakan karena grafik angka kasus penularan virus corona terus menurun, cakupan vaksinasi sudah cukup tinggi dan Sleman sudah masuk wilayah pemberlakuan pembatasan kegiatan masyarakat (PPKM) level 1. <o:p></o:p></font></p><p class=\"MsoNormal\"><font color=\"#000000\">Ia memambahkan bahwa tingkat kematian akibat Covid-19 sudah berada di angka 0,08 dan tingkat keterisian temapat tidur perawatan pasien yang terinfeksi corona sudah turun ke angka 0,39 persen di Sleman.Oleh karena itu, Ia mengingatkan bahwa pada masa transisi menuju endemi mayarakat dihimbau tetap menjaga kesehatan dan menerapkan pola hidup bersih dan sehat (PHBS).<span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:Calibri;\r\nfont-size:12.0000pt;\">&nbsp;</span></font><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:Calibri;\r\nfont-size:12.0000pt;\"><o:p></o:p></span></p>', '1182821251SLEMAN.png', '', 'Tue 14 Jun 2022', '0'),
(14, 'Vaksin Covid-19 yang Menurut FDA Efektif Bagi Bayi 6 Bulan Hingga Anak 17 Tahun', 'Covid-19 Vaccines', '<p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\">Penasihat vaksin FDA akan melakukan evaluasi&nbsp;</span><a href=\"https://health.grid.id/tag/vaksin-moderna\"><span class=\"15\" style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;\">vaksin Moderna</span></a><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\">&nbsp;untuk anak-anak usia 6 bulan hingga 5 tahun dan 6 tahun sampai 17 tahun. Dari dokumen pengarahan FDA, dijelaskan bahwa vaksin Moderna melalui studi imunobridging dinilai apakah respon imun yang terjadi pada anak-anak, sama dengan penerima vaksin berusia 18 hingga 25 tahun.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\">Tingkat efektifitas vaksin. Menurut FDA, vaksin Moderna 93,3% efektif mengurangi gejala Covid-19 varian asli dan Alpha pada anak berusia 12 hingga 17 tahun.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\">Sedangkan pada anak-anak berusia 6 hingga 11 tahun, vaksin ini 76,8% efektif memberikan perlindungan dari varin Delta. Namun, bagi anak usia 6 hingga 11 tahun kemanjuran vaksin tidak bisa ditentukan secara andal, karena hanya ada sedikit jumlah kasus Covid-19 yang terjadi selama penelitian.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\">Pada anak-anak berumur 6 bulan hingga 5 tahun, uji klinis dilakukan belum lama ini, ketika kasus Covid-19 didominasi varian Omicron. Bagi yang berusia 2 hingga 5 tahun, vaksin Moderna 36,8% efektif melawan penyakit simtomatik.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\">Sementara itu, untuk yang berusia 6 hingga 23 bulan, tingkat efektivitasnya mencapai 50,6%. Sejauh ini, pemberian vaksin Moderna bagi anak-anak aman dilakukan. Nyeri di tangan yang disuntik, jadi satu-satunya kejadian ikut pasca imunisasi (KIPI) yang dilaporkan.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\">FDA juga tidak menemukan efek samping yang serius dan tidak ada kematian yang dilaporkan.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\">Selain vaksin Covid-19 Moderna, vaksin dari Pfizer juga dianggap aman bagi anak-anak di bawah 5 tahun oleh FDA.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\">Pemberian vaksin Covid-19 bagi anak-anak berusia muda sangat penting, mengingat banyak dari mereka yang terpapar Covid-19 harus menjalani perawatan di rumah sakit.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\"><o:p></o:p></span></p>', '730352889VAKSINBAYI.png', '', 'Tue 14 Jun 2022', '0'),
(16, 'Kasus Covid-19 di Jakarta Naik, Wagub Ariza Minta Masyarakat Disiplin Prokes', 'Covid-19 Information', '<p class=\"MsoNormal\"><font color=\"#000000\">Pemprov DKI Jakarta meminta masyarakat patuh terhadap protokol kesehatan (prokes). Pasalnya, dalam beberapa hari terakhir kasus aktif Covid-19 di Jakarta kembali meningkat. <o:p></o:p></font></p><p class=\"MsoNormal\"><font color=\"#000000\">Wakil Gubernur DKI Jakarta Ahmad Riza Patria (Ariza) meminta masyarakat meningkatkan disiplin, taat, dan patuh prokes di tengah pandemi Covid-19. Pasalnya, berdasarkan data Dinkes DKI Jakarta kasus aktif Covid-19 mengalami peningkatan, pada Minggu, 12 Juni 2022 lalu kasus aktif di Jakarta hari ini naik 158 sehingga total menjadi 2.214 kasus. <o:p></o:p></font></p><p class=\"MsoNormal\"><font color=\"#000000\">\"Betul sekali kita ini ada peningkatan. Kami minta sekalipun sudah diperkenankan tidak menggunakan masker di ruang terbuka kami minta seluruh warga Jakarta khususnya agar tetap patuh prokes,\" kata Ariza di Polda Metro Jaya pada Senin (13/6/2022).<o:p></o:p></font></p><p class=\"MsoNormal\"><font color=\"#000000\">\"Pemprov DKI juga terus berupaya memastikan seluruh masyarakat mendapat vaksin,\" ucapnya. Sebelumnya, Kepala Bidang Pencegahan dan Pengendalian Penyakit Dinkes DKI Jakarta, Dwi Oktavia menyebut berdasarkan data Minggu, 12 Juni 2022 lalu jumlah kasus aktif di Jakarta hari ini naik 158. Hal itu membuat kasus aktif kembali mencapai sebanyak 2.214 (orang yang masih dirawat/isolasi).</font><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\nfont-size:12.0000pt;mso-font-kerning:0.0000pt;\"><br></span></p>', '1895607935COVID.png', '', 'Tue 14 Jun 2022', '0'),
(17, 'Positif Covid Tambah 591 Kasus, Sembilan Orang Meninggal Dunia', 'Covid-19 Information', '<p class=\"MsoNormal\"><font color=\"#000000\">Kasus baru positif covid-19&nbsp;di Indonesia per Senin (13/6) bertambah 591 kasus. Tambahan tersebut membuat total kasus covid-19 di Indonesia sejak awal pandemi&nbsp;mencapai 6.061.079 kasus. Satgas Covid-19 mencatat sebanyak 9 orang meninggal dunia, membuat total angka kematian berada di angka 156.652 orang. Sementara itu sebanyak 390 pasien sembuh, membuat angka kesembuhan mencapai 5.899.501 orang.<br><br>Sebanyak 66.300 spesimen diperiksa pada hari ini. Sementara itu total kasus aktif mencapai 4.926 kasus, setelah bertambah sebanyak 192 pasien pada hari ini. Sementara itu jumlah suspek berada di angka 2.475 orang.<br><br>Kasus covid-19 dalam beberapa hari terakhir kembali menunjukkan kenaikan. Kendati demikian, pemerintah masih optimistis kondisi covid-19 di Indonesia masih bisa teratasi. Presiden Joko Widodo (Jokowi) menganggap kasus penularan covid usai libur Hari Raya Idul Fitri atau Lebaran 2022 juga masih terkendali. Jokowi merujuk pada evaluasi data Covid-19, yang mana angka positivity rate Indonesia masih di bawah 5 persen.<o:p></o:p></font></p><p class=\"MsoNormal\"><font color=\"#000000\">Kasus virus corona di Indonesia menanjak setidaknya dalam sepekan terakhir. Pada Selasa (7/6) hingga Kamis (9/6), kasus harian terus mengalami kenaikan dengan 500 lebih kasus yang dilaporkan tiap harinya.<br><br>Bahkan pada Jumat (10/6), Indonesia kembali mencatatkan peningkatan menjadi 627 kasus harian yang dilaporkan. Berdasarkan data yang dihimpun dari laporan harian pemerintah, tercatat selama periode 3-9 Juni, jumlah kumulatif kasus konfirmasi Covid-19 dalam sepekan berjumlah 3.091 kasus.<br><br>Sementara pada periode sepekan sebelumnya atau selama periode 27 Mei-2 Juni, kasus covid-19 berjumlah 1.975 kasus. Melalui jumlah tersebut, kasus Covid-19 di Indonesia terhitung 56,5 persen lebih tinggi jika dibandingkan dengan pekan sebelumnya.</font><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';mso-fareast-font-family:等线;\r\ncolor:rgb(0,0,0);font-size:12.0000pt;mso-font-kerning:0.0000pt;\"><br></span></p>', '597583078nambah.png', '', 'Tue 14 Jun 2022', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(2, 'Covid-19 Vaccines'),
(5, 'Covid-19 Information');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(1, 'tes@mail.com'),
(2, '2010511104@mahasiswa.upnvj.ac.id'),
(3, 'saa@mail.com'),
(4, 'elqimochammad@ymail.com'),
(5, 'saa@mail.com'),
(6, 'juju@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
