-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 08:34 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kosyuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `judul_gambar` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_kos`, `judul_gambar`, `gambar`, `tanggal_update`) VALUES
(3, 7, 'Halaman Depan', 'kos41.jpg', '2020-05-13 11:34:34'),
(4, 7, 'Isi Dalam', 'kos1.jpg', '2020-05-13 11:39:46'),
(5, 7, 'Fasilitas Kamar', 'kos21.jpg', '2020-05-13 11:40:52'),
(6, 7, 'Pintu Depan', 'kos_52.jpg', '2020-05-13 11:41:21'),
(7, 11, 'Gerbang Depan', 'gawangan.jpg', '2020-05-13 11:48:43'),
(8, 11, 'Kamar Mandi', 'kamarmandi.jpg', '2020-05-13 11:48:57'),
(9, 11, 'Halaman Depan', 'kos2an.jpg', '2020-05-13 11:49:13'),
(10, 11, 'Kamar Tidur', 'kos-ekslusif-fasilitas.jpg', '2020-05-13 11:52:52'),
(11, 12, 'Fasilitas Kamar', 'mesincuci.jpg', '2020-05-13 11:56:02'),
(12, 12, 'Kamar Mandi', 'kamarmandi1.jpg', '2020-05-13 11:56:18'),
(13, 12, 'Teras', 'tangga.jpg', '2020-05-13 11:56:45'),
(14, 12, 'Halaman Depan', 'halaman.jpg', '2020-05-13 11:58:08'),
(15, 13, 'Halaman Depan', 'halaman1.jpg', '2020-05-13 12:02:32'),
(16, 13, 'Isi Dalam', 'kamar2.jpg', '2020-05-13 12:02:49'),
(17, 13, 'Kamar Mandi', 'kamarmandi2.jpg', '2020-05-13 12:03:17'),
(18, 13, 'Pintu Depan', 'teras.JPG', '2020-05-13 12:03:36'),
(19, 14, 'Halaman Depan', 'halaman2.jpg', '2020-05-13 12:09:38'),
(20, 14, 'Fasilitas', 'unnamed.jpg', '2020-05-13 12:10:00'),
(21, 14, 'Kamar Mandi', 'kamar_mandi.jpg', '2020-05-13 12:10:20'),
(22, 14, 'Dapur', 'dapur.jpg', '2020-05-13 12:10:40'),
(23, 15, 'Gerbang Depan', 'tampakdepan.jpg', '2020-05-13 12:18:01'),
(24, 15, 'Fasilitas', 'tv-kulkas-meja-kamar.jpg', '2020-05-13 12:19:26'),
(25, 15, 'Kamar Mandi', 'kamar_mandi1.JPG', '2020-05-13 12:20:12'),
(26, 15, 'Kamar Tidur', 'kkkk.jpg', '2020-05-13 12:20:31'),
(27, 15, 'Ruang Tengah', 'Desain-Kamar-Kost-Dapur-Mini.jpg', '2020-05-13 12:23:18'),
(28, 16, 'Isi Dalam', 'isi_dalam_Mini.jpg', '2020-05-14 11:11:40'),
(29, 16, 'Gerbang Depan', 'gawangan1.jpg', '2020-05-14 11:12:00'),
(30, 16, 'Kamar Mandi', 'kamarmandi3.jpg', '2020-05-14 11:12:15'),
(31, 16, 'Halaman Depan', 'Gawangan-pintu-Rumah-Kost.jpg', '2020-05-14 11:13:12'),
(32, 17, 'Tampak Depan', 'kos63.jpg', '2020-05-14 11:17:57'),
(33, 17, 'Isi Dalam', 'kos_6.jpg', '2020-05-14 11:18:13'),
(34, 17, 'Fasilitas', 'kos22.jpg', '2020-05-14 11:18:38'),
(35, 17, 'Kamar Mandi', 'kamar_mandi2.jpg', '2020-05-14 11:19:06'),
(36, 18, 'Halaman Depan', 'teras1.JPG', '2020-05-14 11:22:18'),
(37, 18, 'Isi Dalam', 'kos_61.jpg', '2020-05-14 11:22:52'),
(38, 18, 'Kamar Tidur', 'kos-alifah-nyaman1.jpg', '2020-05-14 11:23:10'),
(39, 18, 'Fasilitas', 'kos64.jpg', '2020-05-14 11:23:32'),
(40, 19, 'Tampak Depan', 'kos_1.jpg', '2020-05-14 11:27:30'),
(41, 19, 'Kamar Mandi', 'kamarmandi4.jpg', '2020-05-14 11:28:15'),
(42, 19, 'Isi Dalam', '849106_720.jpg', '2020-05-14 11:34:56'),
(43, 19, 'Balkon', 'kos-putra-strategis-fasilitas-lengkap-1482070447_large.jpeg', '2020-05-14 11:36:07'),
(44, 20, 'Isi Dalam', '1469719735-fasilitas-.jpg', '2020-05-14 11:43:49'),
(45, 20, 'Tampak Depan', 'kos5.jpg', '2020-05-14 11:44:40'),
(46, 20, 'Kamar Mandi', 'images.jpg', '2020-05-14 11:45:45'),
(47, 20, 'Lemari', 'Kamar-kost-kamar-mandi.jpg', '2020-05-14 11:46:47'),
(48, 21, 'Tampak Depan', 'kos3.jpg', '2020-05-14 11:51:26'),
(49, 21, 'Kamar Mandi', 'kamar-mandi-www_kostsby_com.jpg', '2020-05-14 11:51:57'),
(50, 21, 'Isi Dalam', 'kos-quot-ibu-yuli-quot-khusus-putri-dan-pasutri-kamar-mandi-luar-651249568_large.JPG', '2020-05-14 11:52:28'),
(51, 21, 'Fasilitas', '03c9d69bd9d5fbcfbacad435aeff13d3.jpg', '2020-05-14 11:53:35'),
(53, 22, 'Kamar Mandi', 'kamar_mandi_kos.jpg', '2020-05-25 04:54:11'),
(54, 22, 'Fasilitas Kamar', 'fasilitas_kos.jpg', '2020-05-25 04:56:22'),
(55, 22, 'Halaman Depan', 'halaman_depan.jpg', '2020-05-25 05:23:32'),
(56, 22, 'Isi Dalam', 'isi_kamar.jpg', '2020-05-25 05:25:30'),
(57, 25, 'Halaman Depan', 'halaman3.jpg', '2020-05-25 13:16:37'),
(58, 25, 'Dapur', 'dapur.jpeg', '2020-05-25 13:16:46'),
(59, 25, 'Kamar Mandi', 'kamar_mandi3.jpg', '2020-05-25 13:16:56'),
(60, 25, 'Tempat Parkir', 'parkir.jpg', '2020-05-25 13:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `kode_transaksi` varchar(20) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `rekening_pembayaran` varchar(30) NOT NULL,
  `rekening_pelanggan` varchar(30) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `id_rekening` int(11) NOT NULL,
  `tanggal_bayar` varchar(50) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `id_user`, `id_pelanggan`, `id_kos`, `nama_pelanggan`, `email`, `telepon`, `alamat`, `kode_transaksi`, `tanggal_transaksi`, `jumlah_transaksi`, `status_bayar`, `jumlah_bayar`, `rekening_pembayaran`, `rekening_pelanggan`, `bukti_bayar`, `id_rekening`, `tanggal_bayar`, `nama_bank`, `tanggal_post`, `tanggal_update`) VALUES
(10, 0, 3, 23, 'Nunik', 'nunikunram@gmail.com', '08123456789', 'narmada', '25052020EEVPTHNI', '2020-05-25 00:00:00', 1400000, 'Konfirmasi', 14000000, '2123123131', 'Nunik', 'Bank_BNI6.png', 0, ' 25-05-2020', 'BANK BNI', '2020-05-25 09:29:17', '2020-05-25 15:18:56'),
(15, 0, 3, 0, 'Nunik', 'nunikunram@gmail.com', '08123456789', 'narmada', '290520203FU5XMKW', '2020-05-29 00:00:00', 3000000, 'Konfirmasi', 30000000, '2123123131', 'Nunik', '_MG_55603.JPG', 0, ' 29-05-2020', 'BANK BNI', '2020-05-29 08:50:54', '2020-05-29 07:02:08'),
(18, 0, 4, 24, 'Ande Rizky', 'Andefakboy@gmail.com', '0896926969', 'Perum,Mataram, Lombok, Nusa Tenggara Barat', '04062020KC5DSSJ1', '2020-06-04 00:00:00', 1000000, 'Konfirmasi', 1000000, '923842034', 'Ande', 'img-12.jpg', 0, '04/06/2020', 'BANK MANDIRI', '2020-06-04 13:41:51', '2020-06-04 11:56:43'),
(19, 0, 4, 27, 'Ande Rizky', 'Andefakboy@gmail.com', '0896926969', 'Perum,Mataram, Lombok, Nusa Tenggara Barat', '040620201YXFM4KN', '2020-06-04 00:00:00', 300000, 'Konfirmasi', 300000, '923842034', 'Ande', 'img-15.jpg', 0, ' 04-06-2020', 'BANK MUAMALAT', '2020-06-04 14:06:01', '2020-06-04 12:08:12'),
(20, 0, 4, 22, 'Ande Rizky', 'Andefakboy@gmail.com', '0896926969', 'Perum,Mataram, Lombok, Nusa Tenggara Barat', '04062020QIYD0CZV', '2020-06-04 00:00:00', 700000, 'Konfirmasi', 700000, '923842034', 'Ande', '_MG_55604.JPG', 8, ' 04-06-2020', 'BANK BNI', '2020-06-04 14:09:26', '2020-06-04 12:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `tagline`, `email`, `website`, `keywords`, `metatext`, `telepon`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `rekening_pembayaran`, `tanggal_update`) VALUES
(1, 'Kosyuk - Cari Kos di Mataram', 'HAYUK', 'kosyuk@gmail.com', 'http://kosyuk.com', 'Kosyuk,kos mataram,kos', 'OK', '(0370) 621-567', 'Mataram', 'https://facebook.com/Kosyuk', 'https://instagram.com/Kosyuk', 'Cari kos mataram dengan cepat di KosYuk', 'richooo2.png', 'richooo21.png', 'OK', '2020-05-13 16:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `kos`
--

CREATE TABLE `kos` (
  `id_kos` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_penyedia` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `id_rekening` int(11) NOT NULL,
  `kode_kos` varchar(100) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `nama_kos` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `slug_kos` varchar(255) NOT NULL,
  `ukuran_kos` varchar(255) NOT NULL,
  `kategori_kos` varchar(32) NOT NULL,
  `fasilitas_kos` varchar(255) NOT NULL,
  `alamat_kos` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kos`
--

INSERT INTO `kos` (`id_kos`, `id_user`, `id_penyedia`, `id_wilayah`, `id_rekening`, `kode_kos`, `no_rekening`, `nama_kos`, `telepon`, `slug_kos`, `ukuran_kos`, `kategori_kos`, `fasilitas_kos`, `alamat_kos`, `harga`, `stok`, `deskripsi`, `gambar`, `tanggal_post`, `tanggal_update`) VALUES
(7, 1, 0, 1, 0, 'KPP01', '', 'Kos permai pagutan', '081337028218', 'kpp01', '4x4', 'Putra', 'Kasur<br> Wifi<br> Kamar Mandi Pribadi<br> Kipas Angin', 'Jl. Danau Maninjau 1/15 Pagutan barat', '500000', 10, '<p>Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman.</p>\r\n', 'kos62.jpg', '2020-05-10 07:12:46', '2020-05-19 11:06:46'),
(11, 1, 0, 7, 0, 'KJN01', '', 'Kos Jaya Narmada', '081440987456', 'kjn01', '4x3', 'Putra/Putri', 'Kasur<br> Wifi<br> Kamar Mandi Pribadi<br> Kipas Angin<br> Dapur', 'Jl. Raya Narmada Lombok Barat, Mataram, NTB', '750000', 8, '<p>Kos memiliki lokasi yang strategis karena jauh dari&nbsp;pusat kota, serta lingkungan sekitar yang nyaman.</p>\r\n', 'kos-alifah-nyaman.jpg', '2020-05-13 13:48:17', '2020-05-19 11:12:17'),
(12, 1, 0, 2, 0, 'KNIP01', '', 'Kos Nusa Indah Perum', '0887654112345', 'knip01', '5x5', 'Putra/Putri', 'Kasur<br> Wifi<br> Kamar Mandi Pribadi<br> Kipas Angin<br> Dapur', 'Jl. Arya Banjar Getas, Ampenan Selatan, Kec.Ampenan, Kota Mataram, NTB', '750000', 9, '<p>Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman.</p>\r\n', 'kamar.jpg', '2020-05-13 13:55:21', '2020-05-19 11:11:50'),
(13, 1, 0, 7, 0, 'KGM01', '', 'Kos Gomong Murah ', '085443787665', 'kgm01', '3x4', 'Putra', 'Kasur<br> Wifi<br> Kamar Mandi Pribadi<br> Kipas Angin<br> Dapur', 'Jl. Gomong I/15 Kec.Selaparang, Mataram, NTB', '600000', 6, '<p>Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman.</p>\r\n', 'kamar1.jpg', '2020-05-13 14:01:53', '2020-05-19 11:11:30'),
(14, 1, 0, 5, 0, 'KM01', '', 'Kos Monjok', '0895634452331', 'km01', '4x4', 'Putri', 'Kasur<br> Wifi<br> Kamar Mandi Pribadi<br> Kipas Angin<br> Dapur', 'Jl. Monjok Timur Kec.Selaparang, Mataram, NTB', '700000', 5, '<p>Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman</p>\r\n', 'kos-harian-cowok-cewek-jember.jpg', '2020-05-13 14:09:14', '2020-05-19 11:11:06'),
(15, 1, 0, 6, 0, 'KKJ01', '', 'Kos Kekalik Jaya', '081567445909', 'kkj01', '4x5', 'Putra', 'Kasur<br> Wifi<br> Kamar Mandi Pribadi<br> Kipas Angin<br> Dapur', 'Jl. Raya Kekalik Kecamatan Sekarbela, Mataram, NTB', '800000', 7, '<p>Kos memiliki lokasi yang asri dan indah, dekat dengan pusat perbelanjaan, serta lingkungan sekitar yang nyaman.</p>\r\n', 'kamar3.jpg', '2020-05-13 14:13:35', '2020-05-19 11:10:38'),
(16, 1, 0, 6, 0, 'KAS01', '', 'Kos Ande Simpang', '083129114718', 'kas01', '4x3', 'Putra/Putri', 'Kasur<br> Wifi<br> Kamar Mandi Pribadi<br> Kipas Angin<br> Dapur', 'Jalan Adi Sucipto No. 20, Pejeruk, Ampenan, Ampenan Utara, Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83511', '500000', 6, '<p>Kos memiliki lokasi yang asri dan indah, dekat dengan pusat perbelanjaan, serta lingkungan sekitar yang nyaman.</p>\r\n', 'kos-ekslusif-fasilitas1.jpg', '2020-05-14 13:11:10', '2020-05-19 11:10:02'),
(17, 1, 0, 4, 0, 'KLA01', '', 'Kos Ling Ampenan', '081803767843', 'kla01', '4 x 4', 'Putri', 'Kasur<br> Wifi<br> Kamar Mandi Pribadi<br> Kipas Angin', 'Jl. Lumba-lumba Kec.Ampenan, Mataram, NTB', '650000', 7, '<p>Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman.</p>\r\n', 'tampakdepan1.jpg', '2020-05-14 13:17:22', '2020-05-19 08:03:05'),
(18, 1, 0, 2, 0, 'KIIM01', '', 'Kos Ibu Ina Murah', '037012345', 'kiim01', '3 x 4', 'Putri', 'Kasur<br> Wifi<br> Lemari Baju<br> Dapur', 'Jl. Arya Banjar Getas, Ampenan Sel., Kec. Ampenan, Kota Mataram, Nusa Tenggara Bar. 83112', '650000', 7, '<p>Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman.</p>\r\n', 'kamar21.jpg', '2020-05-14 13:21:58', '2020-05-19 11:09:11'),
(19, 1, 0, 3, 0, 'KC01', '', 'Kos Cakranegara', '081237456239', 'kc01', '4 x 5', 'Putra', 'Kasur<br> Wifi<br> Lemari Baju<br> Kamar Mandi Pribadi<br> Meja', 'Jl. Pejanggik, Cakranegara Bar., Kec. Cakranegara, Kota Mataram, Nusa Tenggara Bar. 83239', '800000', 10, '<p>Kos memiliki lokasi yang asri dan indah, dekat dengan pusat perbelanjaan, serta lingkungan sekitar yang nyaman.</p>\r\n', 'Ide-Desain-Kamar-Tidur-Rumah-Kampung-Tentang-Dekorasi-Kamar-Tidur-Terbaru.jpg', '2020-05-14 13:26:19', '2020-05-19 11:08:49'),
(20, 1, 0, 7, 0, 'KSL01', '', 'Kos Sriwijaya Lapangan', '0370123456', 'ksl01', '4 x 4', 'Putra', 'Kasur<br> Wifi<br> Kamar Mandi Pribadi<br> Kipas Angin<br> Dapur', 'Jl. Cilinaya No.7, Cilinaya, Kec. Cakranegara, Kota Mataram, Nusa Tenggara Bar. 83239', '750000', 8, '<p>Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman.</p>\r\n', 'Koolkost.png', '2020-05-14 13:40:24', '2020-05-19 11:08:13'),
(21, 1, 0, 7, 0, 'KT01', '', 'Kos Timuran', '08133946729', 'kt01', '5 x 5', 'Putra', 'Kasur<br> Wifi<br> Lemari Baju<br> Kamar Mandi Pribadi<br> Kipas Angin', 'Jl. Terusan Bung Hatta, Monjok, Kec. Selaparang, Kota Mataram, Nusa Tenggara Bar. 83122', '700000', 6, '<p>Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman.</p>\r\n', '5400492_orig.jpg', '2020-05-14 13:50:45', '2020-05-19 11:07:29'),
(22, 0, 1, 6, 8, 'KJA01', '1298301982312', 'Kos Jaya Ampenan', '087765332903', 'kja01', '4x4', 'Putra/Putri', 'Kasur<br> Wifi<br> Lemari Baju<br> Kamar Mandi Pribadi', 'Jl. Gotong Royong Gg. Mawar I, Pejeruk, Kec. Ampenan, Kota Mataram, Nusa Tenggara Bar. 83112', '700000', 8, 'Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman.				    				    				    				    				    ', 'promosi15.jpg', '2020-05-24 17:14:50', '2020-06-09 17:01:28'),
(24, 0, 7, 5, 10, 'KIM01', '23423412212313', 'Kos Indah Monjok', '08123456789', 'kim01', '5x5', 'Putra/Putri', 'Kasur<br> Wifi<br> Lemari Baju<br> Kamar Mandi Pribadi<br> Televisi', 'Jl. Bung Karno, Monjok', '1000000', 8, 'kos memilik lokasi yang strategis dan kos berada di pusat kota				    ', '5400492_orig2.jpg', '2020-05-25 14:38:48', '2020-06-09 18:24:44'),
(25, 0, 8, 7, 11, 'KSP01', '55670203998374', 'Kos Santuy Pak Robby', '0899765647742', 'ksp01', '5x5', 'Putra/Putri', 'Kasur<br> Wifi<br> Lemari Baju<br> Kamar Mandi Pribadi<br> Meja<br> Kipas Angin<br> Dapur<br> Televisi(TV)', 'Mataram', '1500000', 6, 'Kos memiliki lokasi yang strategis dan berada di pusat kota', 'halaman_utama.jpg', '2020-05-25 15:12:45', '2020-05-25 13:12:45'),
(26, 0, 9, 6, 11, 'KPK01', '930238', 'Kos Payung Kagura', '88493', 'kpk01', '4x5', 'Putra/Putri', 'Kasur<br> Wifi<br> Meja', 'Ampenan santuy', '1000000', 5, 'kos santuy', '_MG_55601.JPG', '2020-05-29 08:24:46', '2020-05-29 06:24:46'),
(27, 0, 10, 1, 12, 'KJB01', '889', 'Kos Jaya Bambang', '088', 'kjb01', '4x4', 'Putra/Putri', 'Kasur<br> Kipas Angin', 'Bumi', '300000', 2, 'Kos bumi', '_MG_55602.JPG', '2020-05-29 08:29:11', '2020-05-29 06:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pelanggan` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `nama_pelanggan`, `email`, `password`, `telepon`, `alamat`, `tanggal_daftar`, `tanggal_update`) VALUES
(3, 0, 'Nunik', 'nunikunram@gmail.com', '123456', '08123456789', 'narmada', '2020-05-20 17:03:37', '2020-05-20 15:03:37'),
(4, 0, 'Ande Rizky', 'Andefakboy@gmail.com', 'gaskan', '0896926969', 'Perum,Mataram, Lombok, Nusa Tenggara Barat ', '2020-05-21 16:07:27', '2020-06-09 17:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `penyedia`
--

CREATE TABLE `penyedia` (
  `id_penyedia` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `id_rekening` int(11) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `email_pemilik` varchar(255) NOT NULL,
  `password_pemilik` varchar(32) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyedia`
--

INSERT INTO `penyedia` (`id_penyedia`, `id_user`, `id_kos`, `id_rekening`, `nama_pemilik`, `email_pemilik`, `password_pemilik`, `telepon`, `alamat`, `tanggal_daftar`, `tanggal_update`) VALUES
(1, 0, 0, 0, 'Nadratul Naim', 'nadratulnaiim@gmail.com', 'anjaymabar', '087765332902', 'Desa Sesela Lombok', '2020-05-24 09:23:13', '2020-06-09 18:28:10'),
(7, 0, 0, 0, 'Dika Guntur', 'dikaguntur@gmail.com', 'guntur', '08123456789', 'Monjok, Mataram', '2020-05-25 14:31:23', '2020-06-09 18:29:40'),
(8, 0, 0, 0, 'Robby Igfirly', 'robbyigfirly@gmail.com', 'tankgg', '0899765647742', 'Desa Sandik', '2020-05-25 15:09:28', '2020-06-04 11:52:52'),
(9, 0, 0, 0, 'Arian', 'kaguragg@gmail.com', 'kaguranub', '098039', 'Bima', '2020-05-29 08:22:13', '2020-05-29 06:22:13'),
(10, 0, 0, 0, 'bambang', 'bb@gmail.com', '123456', '089', 'Bumi', '2020-05-29 08:27:51', '2020-05-29 06:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `urutan`, `gambar`, `tanggal_post`) VALUES
(8, 'BANK BNI', 1, 'Bank_BNI2.png', '2020-05-25 06:26:50'),
(9, 'BANK BRI', 2, 'bank_BRI1.png', '2020-05-25 06:27:03'),
(10, 'BANK MANDIRI', 3, 'Bank_Mandiri_Logo1.png', '2020-05-25 06:27:17'),
(11, 'BANK BCA', 4, 'logo_bca1.png', '2020-05-25 06:27:30'),
(12, 'BANK MUAMALAT', 5, 'bank_muamalat2.png', '2020-05-25 06:27:41'),
(13, 'BANK MEGA', 6, 'bank-mega.png', '2020-06-07 21:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `saran` text NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `id_pelanggan`, `saran`, `tanggal_post`) VALUES
(1, 3, 'HALO APA KABAR?', '2020-06-09 09:55:06'),
(7, 4, 'halo', '2020-06-09 17:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_pelanggan`, `kode_transaksi`, `id_kos`, `harga`, `jumlah`, `total_harga`, `tanggal_transaksi`, `tanggal_update`) VALUES
(3, 0, 4, '21052020XEFNCCSU', 16, 500000, 1, 500000, '2020-05-21 00:00:00', '2020-05-21 16:19:29'),
(4, 0, 4, '23052020QIEPX7MW', 16, 500000, 1, 500000, '2020-05-23 00:00:00', '2020-05-23 14:56:00'),
(5, 0, 4, '230520203AWZFCQR', 12, 750000, 2, 1500000, '2020-05-23 00:00:00', '2020-05-23 17:05:09'),
(6, 0, 4, '23052020MSQYMPAC', 17, 650000, 1, 650000, '2020-05-23 00:00:00', '2020-05-23 17:08:07'),
(7, 0, 4, '230520207IHWA9PF', 13, 600000, 4, 2400000, '2020-05-23 00:00:00', '2020-05-23 17:08:59'),
(8, 0, 3, '25052020EEVPTHNI', 22, 700000, 2, 1400000, '2020-05-25 00:00:00', '2020-05-25 07:29:17'),
(9, 0, 3, '25052020Y0U3DW6U', 20, 750000, 1, 750000, '2020-05-25 00:00:00', '2020-05-25 11:18:47'),
(10, 0, 3, '25052020XBFEEHRU', 19, 800000, 1, 800000, '2020-05-25 00:00:00', '2020-05-25 11:24:38'),
(11, 0, 4, '25052020XRVGCB8K', 25, 1500000, 1, 1500000, '2020-05-25 00:00:00', '2020-05-25 13:19:46'),
(12, 0, 3, '290520203FU5XMKW', 27, 300000, 10, 3000000, '2020-05-29 00:00:00', '2020-05-29 06:50:55'),
(13, 0, 3, '29052020JF3T2HWL', 25, 1500000, 1, 1500000, '2020-05-29 00:00:00', '2020-05-29 07:02:48'),
(14, 0, 4, '04062020XARULZP0', 26, 1000000, 1, 1000000, '2020-06-04 00:00:00', '2020-06-04 11:20:47'),
(15, 0, 4, '04062020KC5DSSJ1', 24, 1000000, 1, 1000000, '2020-06-04 00:00:00', '2020-06-04 11:41:53'),
(16, 0, 4, '040620201YXFM4KN', 27, 300000, 1, 300000, '2020-06-04 00:00:00', '2020-06-04 12:06:02'),
(17, 0, 4, '04062020QIYD0CZV', 22, 700000, 1, 700000, '2020-06-04 00:00:00', '2020-06-04 12:09:26'),
(18, 0, 4, '09062020IH04RBSP', 24, 1000000, 3, 3000000, '2020-06-09 00:00:00', '2020-06-09 17:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_update`) VALUES
(1, 'Fredericho Madi', 'frederichomadi@gmail.com', 'fredericho', 'adminsuper', 'Admin', '2020-05-07 13:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `slug_wilayah` varchar(255) NOT NULL,
  `nama_wilayah` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `gambar_wilayah` varchar(255) NOT NULL,
  `tanggal uipdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `slug_wilayah`, `nama_wilayah`, `urutan`, `gambar_wilayah`, `tanggal uipdate`) VALUES
(1, 'pagutan', 'Pagutan', 1, 'Pagutan.jpg', '2020-05-19 15:08:52'),
(2, 'perum', 'Perum', 2, '_MG_5560.JPG', '2020-05-19 15:08:42'),
(3, 'cakra', 'Cakra', 3, 'cakranegara.jpg', '2020-05-19 15:08:31'),
(4, 'udayana', 'Udayana', 4, 'taman-udayana.jpg', '2020-05-19 15:08:22'),
(5, 'monjok', 'Monjok', 5, 'monjok.jpg', '2020-05-19 15:07:59'),
(6, 'ampenan', 'Ampenan', 6, 'ampenan.jpeg', '2020-05-19 15:07:46'),
(7, 'mataram', 'Mataram', 7, 'dasan_agung1.jpg', '2020-05-19 15:07:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `kos`
--
ALTER TABLE `kos`
  ADD PRIMARY KEY (`id_kos`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `penyedia`
--
ALTER TABLE `penyedia`
  ADD PRIMARY KEY (`id_penyedia`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kos`
--
ALTER TABLE `kos`
  MODIFY `id_kos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penyedia`
--
ALTER TABLE `penyedia`
  MODIFY `id_penyedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
