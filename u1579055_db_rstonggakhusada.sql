-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 07:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1579055_db_rstonggakhusada`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapendaftaran`
--

CREATE TABLE `datapendaftaran` (
  `idDaftar` int(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `noTlp` varchar(13) NOT NULL,
  `tmpLahir` varchar(255) NOT NULL,
  `tglLahir` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `golDar` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(50) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `kelDes` varchar(255) NOT NULL,
  `kec` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `statusKawin` varchar(255) NOT NULL,
  `statusWarga` varchar(255) NOT NULL,
  `konsultasi` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapendaftaran`
--

INSERT INTO `datapendaftaran` (`idDaftar`, `nik`, `namaLengkap`, `noTlp`, `tmpLahir`, `tglLahir`, `jk`, `golDar`, `alamat`, `rt`, `rw`, `kelDes`, `kec`, `agama`, `statusKawin`, `statusWarga`, `konsultasi`, `createdAt`) VALUES
(1, '36012000010001', 'MIKO SETIAWAN', '08129128319', 'SERANG', '2000-11-22', 'Laki-Laki', 'A', 'KP.TUNGGAK', '001', '002', 'KERTASANA', 'BOJONEGARA', 'Islam', 'Menikah', 'WNI', 'Mode test !', '2023-10-12 04:29:37'),
(2, '36020380201920', 'JUNED', '08571289189', 'PADANG', '1999-02-12', 'Laki-Laki', 'B', 'KP. PADANG PANJANG', '004', '007', 'PADANG', 'PANJANG', 'Kristen', 'Duda', 'WNI', 'Dok saya mayu konsultasi', '2023-10-12 04:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `datasuratnarkoba`
--

CREATE TABLE `datasuratnarkoba` (
  `noSurat` varchar(500) NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `tempatLahir` varchar(255) NOT NULL,
  `tglLahir` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `dipergunakan` varchar(255) NOT NULL,
  `ttdDokter` varchar(255) NOT NULL,
  `hasilKeputusan` varchar(255) NOT NULL,
  `hasil1` varchar(255) NOT NULL,
  `hasil2` varchar(255) NOT NULL,
  `hasil3` varchar(255) NOT NULL,
  `hasil4` varchar(255) NOT NULL,
  `hasil5` varchar(255) NOT NULL,
  `hasil6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datasuratnarkoba`
--

INSERT INTO `datasuratnarkoba` (`noSurat`, `namaLengkap`, `tempatLahir`, `tglLahir`, `agama`, `jk`, `pekerjaan`, `alamat`, `dipergunakan`, `ttdDokter`, `hasilKeputusan`, `hasil1`, `hasil2`, `hasil3`, `hasil4`, `hasil5`, `hasil6`) VALUES
('SKN001/09/2023', 'MIKO SETIAWAN', 'PANDEGLANG', '2001-10-22', 'Islam', 'Laki-laki', 'IT ', 'KP.TUNGGAK', 'BEKERJA', 'dr. ANUGRAH AKBAR PAMBUDI', 'BEBAS DARI ZAT ADIKTIF/NARKOBA', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE'),
('SKN002/09/2023', 'SURESTI AGITA', 'SERANG', '2000-08-03', 'Islam', 'Perempuan', 'KARYAWAN SWASTA', 'JL. TEUYNUBCIJJ\r\n', 'KERJA \r\n', 'dr. AWALIYAH WAHDAH', 'BEBAS DARI ZAT ADIKTIF/NARKOBA', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE'),
('SKN003/10/2023', 'AHMAD FATONI', 'SIDOARJO', '1985-10-18', 'Islam', 'Laki-laki', 'KARYAWAN SWASTA', 'PERUM JANGGOLO PERMAI W6 JANGGOLO JANU TUBAN\r\n', 'PEKERJAAN\r\n', 'dr. AWALIYAH WAHDAH', 'BEBAS DARI ZAT ADIKTIF/NARKOBA', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE', 'NEGATIVE');

-- --------------------------------------------------------

--
-- Table structure for table `db_update_kamar`
--

CREATE TABLE `db_update_kamar` (
  `id` int(11) NOT NULL,
  `Rselamat` varchar(255) NOT NULL,
  `Rsehat` varchar(255) NOT NULL,
  `Rsejahtera` varchar(255) NOT NULL,
  `Rbahagia` varchar(255) NOT NULL,
  `Rbersama` varchar(255) NOT NULL,
  `Radenium` varchar(255) NOT NULL,
  `Rcamelia` varchar(255) NOT NULL,
  `Rbugenvil` varchar(255) NOT NULL,
  `Redelweis` varchar(255) NOT NULL,
  `Rdandalion` varchar(255) NOT NULL,
  `qtyRadenium` varchar(6) NOT NULL,
  `qtyRcamelia` varchar(6) NOT NULL,
  `qtyRbugenvil` varchar(6) NOT NULL,
  `qtyRedelweis` varchar(6) NOT NULL,
  `qtyRdandalion` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_update_kamar`
--

INSERT INTO `db_update_kamar` (`id`, `Rselamat`, `Rsehat`, `Rsejahtera`, `Rbahagia`, `Rbersama`, `Radenium`, `Rcamelia`, `Rbugenvil`, `Redelweis`, `Rdandalion`, `qtyRadenium`, `qtyRcamelia`, `qtyRbugenvil`, `qtyRedelweis`, `qtyRdandalion`) VALUES
(45, 'Terisi', 'Terisi', 'Terisi', 'Terisi', 'Terisi', 'Kosong', 'Terisi', 'Terisi', 'Kosong', 'Terisi', '', '5', '4', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id` int(11) NOT NULL,
  `gambar_blog` varchar(255) NOT NULL,
  `judul_blog` varchar(255) NOT NULL,
  `isi_blog` text NOT NULL,
  `tanggal_blog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `gambar_blog`, `judul_blog`, `isi_blog`, `tanggal_blog`) VALUES
(1, 'e414f491b673b9012a609fb48dbb7e7f-perut terasa begah.jpg', 'Serba Mudah', 'Bisa akses diamana saja kapan saja sudah bisa di hellosehat', '2023-08-11'),
(10, '85482876da35aaa82afa7d4a0dd845bf-6 Makanan penyebab usus buntu.jpg', '6 Makanan Penyebab Usus Buntu!', '<p>Apendisitis atau radang usus buntu adalah salah satu gangguan pencernaan yang kerap terjadi.</p>\r\n<p>Kondisi ini dapat dipicu oleh beberapa hal, salah satunya adalah konsumsi makanan penyebab radang usus buntu secara berlebihan.</p>\r\n<p>Penting untuk diketahui, sebetulnya makanan bukan menjadi penyebab utama dari radang usus buntu. Kendati demikian, konsumsi makanan penyebab radang usus buntu secara berlebihan dan tidak diimbangi dengan pola hidup sehat lainnya dapat memicu penyumbatan pada usus buntu yang berisiko menimbulkan peradangan. Mari kenali daftar makanan yang bisa menyebabkan radang usus buntu selengkapnya melalui ulasan di bawah ini.</p>', '2023-08-11'),
(12, 'e9e4a49d5a64ba68ff110d5e93a7d448-Makanan  Bernutrisi bagi anak.jpg', '5 Makanan Sehat Untuk Anak-', '<p>Makanan yang bernutrisi tinggi amat penting untuk tumbuh kembang anak. Setiap orang tua tentu ingin melihat anaknya tumbuh dan berkembang secara optimal.</p>\r\n<p>Sehingga tak mengherankan bila mereka selalu berusaha memberikan makanan sehat untuk anak yang mengandung gizi tinggi.</p>\r\n<p>Akan tetapi, terkadang si kecil enggan untuk makan makanan sehat seperti sayuran. Oleh karena itu, para orang tua harus memikirkan bagaimana cara agar si kecil tetap mendapatkan asupan gizi dari makanan tersebut.</p>\r\n<p>Nah, sebaiknya Anda menyimak daftar menu makanan sehat untuk anak berikut beserta tips agar si kecil mau mengonsumsinya. Makanan Sehat dan Kaya Nutrisi untuk Anak. Beberapa sumber makanan sehat untuk anak yang bergizi dan juga lezat di antaranya adalah sebagai berikut.</p>\r\n<p><strong>1. Telur</strong><br>Salah satu menu makanan sehat untuk anak adalah telur. Telur mengandung banyak nutrisi seperti omega-3, vitamin, asam folat, dan kolin yang bermanfaat bagi perkembangan otak anak. Anda bisa memberikan telur pada si kecil sebanyak satu butir per hari. Namun, jika anak alergi terhadap telur, sebaiknya jangan diberikan sama sekali, ya.</p>\r\n<p><strong>2. Kacang-kacangan</strong><br>Kacang-kacangan juga sangat penting untuk kesehatan anak dimana nutrisi gizinya banyak didalam kacang-kacangan</p>\r\n<p><strong>3. Susu</strong><br>Susu terkenal sebagai minuman berkalsium tinggi. Selain itu, susu juga mengandung vitamin D untuk kesehatan tulang dan protein yang baik untuk tumbuh kembang anak.</p>\r\n<p>Anjuran konsumsi susu pada anak bervariasi tergantung usianya, namun rata-rata setiap anak minum susu 2-4 gelas per hari. Jika si kecil alergi terhadap laktosa, maka Anda bisa memberi susu free lactose.</p>\r\n<p><strong>4. Daging</strong><br>Daging juga mengandung beberapa Protein dan Gizi asalkan jangan terlalu banyak mengkonsumsi ini</p>\r\n<p><strong>5. Ikan&nbsp;</strong><br>Kaya dengan serat protein beguna untuk daya tahan tubuh anak sejak usia anak-anak</p>', '2023-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karir`
--

CREATE TABLE `tb_karir` (
  `id_karir` int(11) NOT NULL,
  `judul_karir` varchar(255) NOT NULL,
  `kualifikasi_karir` varchar(255) NOT NULL,
  `tanggal_karir` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_karir`
--

INSERT INTO `tb_karir` (`id_karir`, `judul_karir`, `kualifikasi_karir`, `tanggal_karir`, `foto`) VALUES
(6, 'Dokter Spesialis Radiologi', '- Pria / Wanita\r\n- STR Aktif', '2023-06-30', '205679367_Lowongan Pekerjaan Dokter spesialis Radiologi-001.jpg'),
(7, 'REKEMAN MEDIS', '- Pria / Wanita - STR Aktif', '2023-06-30', '961174794_OPEN RECRIUTMENT - RM-001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'admin', 'admin@email.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
(6, 'admin', 'admin@email.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
(7, 'admin', 'admin@email.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');

-- --------------------------------------------------------

--
-- Table structure for table `users_edaftar`
--

CREATE TABLE `users_edaftar` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_edaftar`
--

INSERT INTO `users_edaftar` (`id`, `username`, `email`, `password`) VALUES
(4, 'ADMIN', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'MIKO', 'mikosetiawan152@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapendaftaran`
--
ALTER TABLE `datapendaftaran`
  ADD PRIMARY KEY (`idDaftar`);

--
-- Indexes for table `datasuratnarkoba`
--
ALTER TABLE `datasuratnarkoba`
  ADD PRIMARY KEY (`noSurat`);

--
-- Indexes for table `db_update_kamar`
--
ALTER TABLE `db_update_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karir`
--
ALTER TABLE `tb_karir`
  ADD PRIMARY KEY (`id_karir`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_edaftar`
--
ALTER TABLE `users_edaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapendaftaran`
--
ALTER TABLE `datapendaftaran`
  MODIFY `idDaftar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_update_kamar`
--
ALTER TABLE `db_update_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_karir`
--
ALTER TABLE `tb_karir`
  MODIFY `id_karir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_edaftar`
--
ALTER TABLE `users_edaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
