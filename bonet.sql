-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2026 at 08:25 AM
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
-- Database: `bonet`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `foto`) VALUES
(13666638, 'Instalasi Jaringan Universitas Djuanda', 'Bogor â€” Tim teknis telah berhasil melaksanakan kegiatan instalasi dan optimalisasi jaringan di lingkungan Universitas Djuanda sebagai bagian dari upaya peningkatan kualitas layanan teknologi informasi dan komunikasi kampus. Kegiatan ini mencakup pemasangan infrastruktur jaringan baru, konfigurasi perangkat, serta pengujian konektivitas di berbagai area strategis kampus.  Proses instalasi dilakukan secara bertahap dan terkoordinasi, meliputi penarikan kabel jaringan, pemasangan perangkat switch dan access point, serta pengaturan sistem keamanan jaringan. Seluruh pekerjaan dilaksanakan sesuai dengan standar teknis dan prosedur keselamatan kerja, sehingga tidak mengganggu aktivitas akademik maupun administrasi kampus.  Hasil pengujian menunjukkan bahwa jaringan telah berfungsi dengan baik dan stabil, dengan peningkatan kecepatan akses serta cakupan sinyal yang lebih merata. Hal ini diharapkan dapat mendukung kegiatan perkuliahan, penelitian, dan layanan administrasi secara lebih efektif dan efisien.  Universitas Djuanda menyampaikan apresiasi kepada tim teknis atas profesionalisme dan komitmen dalam menyelesaikan pekerjaan sesuai dengan jadwal yang telah ditetapkan. Ke depan, pihak kampus akan terus melakukan pemeliharaan dan evaluasi berkala guna memastikan kualitas layanan jaringan tetap optimal.', '69869b09072ba.jpeg'),
(42087976, 'Instalasi CCTV Yanfeng', 'Karawang â€” Tim teknis telah menyelesaikan kegiatan instalasi sistem CCTV di lingkungan Yanfeng sebagai bagian dari upaya peningkatan keamanan dan pengawasan area operasional. Kegiatan ini meliputi pemasangan kamera di titik-titik strategis, penarikan kabel, konfigurasi perangkat perekam (NVR/DVR), serta pengujian sistem secara menyeluruh.  Proses instalasi dilaksanakan sesuai dengan standar keselamatan kerja dan prosedur teknis yang berlaku, tanpa mengganggu aktivitas operasional perusahaan. Setiap perangkat telah dikonfigurasi untuk memastikan kualitas gambar yang optimal, stabilitas koneksi, serta kemudahan dalam pemantauan dan pengelolaan data rekaman.  Hasil pengujian menunjukkan bahwa seluruh kamera berfungsi dengan baik, dengan cakupan area yang memadai dan sistem perekaman yang berjalan normal. Sistem CCTV ini diharapkan dapat meningkatkan tingkat keamanan, membantu pengawasan aktivitas kerja, serta mendukung upaya pencegahan risiko di lingkungan perusahaan.  Pihak Yanfeng menyampaikan apresiasi kepada tim teknis atas kinerja yang profesional dan penyelesaian pekerjaan sesuai dengan jadwal yang telah ditetapkan. Ke depan, pemeliharaan dan evaluasi berkala akan dilakukan untuk menjaga keandalan sistem.', '69869c6b0d7bd.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_foto` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_foto`, `nama`, `foto`) VALUES
(11228747, 'Mantapu', '6986d69e9c335.png'),
(48775682, 'test', '6986d6b0a0481.png'),
(10302870, 'Rezki Kartika', '6986da057fdf6.jpeg'),
(32427860, 'tests', '6986e011dce04.png');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `jenis_layanan`) VALUES
(28260441, 'Server'),
(28261121, 'CCTV'),
(28263203, 'Internet'),
(28264243, 'Domain dan Hosting'),
(53314309, 'Internet Dedicated'),
(81194374, 'Internet Dedicated');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_layanan`, `nama_product`, `deskripsi`, `harga`, `foto`) VALUES
(42433644, 53314309, 'Internet Dedicated', 'Customize AnyDesk with your own brand and logo to highlight your corporate identity. Easily administrate all settings and configurations in Windows.', '10000000', '6986d3c83265e.png'),
(54113913, 28260441, 'Server', 'Customize AnyDesk with your own brand and logo to highlight your corporate identity. Easily administrate all settings and configurations in Windows.', '10000000', '69799c402765c.jpeg'),
(59358309, 28263203, 'Maintenance', 'There are many variations of passages of Lorem Ipsum available, none fibe but the majority to be announce have is the suffered alteration in some form, by injected humour', '150000', '6982dc627a917.jpg'),
(80822056, 28261121, 'CCTV', 'Establish seamless Remote Desktop connections in Windows and offer excellent Remote Support to your customers with the help of thought-through features.', '2000000', '69798ba82f0c5.jpg'),
(99800923, 28263203, 'Internet BroadBand', 'Establish seamless Remote Desktop connections in Windows and offer excellent Remote Support to your customers with the help of thought-through features.', '1500000', '6982d9819f3b4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `role` varchar(25) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` enum('Aktif','Pending','Close','') NOT NULL,
  `alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_layanan`, `nama`, `username`, `password`, `email`, `no_tlp`, `role`, `foto`, `status`, `alamat`) VALUES
(11100, 0, 'Rezki Kartika Kiki', 'kiki1', 'kiki1231', 'kiki1@bonet.co.id', '085536709849', 'Admin', '698695645a28e.jpg', 'Aktif', ''),
(11063301, 28263203, 'Minie', 'mini', 'mini', 'miniw@gmail.com', '085755369845', 'User', '', 'Aktif', 'Jl. Raya Ciomas RT.03/05'),
(12114232, 0, 'Rezki Kartika', 'kiki', 'kiki', 'rezkikartika01@gmail.com', '085755369845', 'User', '', 'Pending', ''),
(22417977, 0, 'Mantapu', 'admin', 'admin', 'databonet1@gmail.com', '085536709849', 'Admin', '6986957914cd1.jpg', 'Aktif', ''),
(43294497, 0, 'kiki', 'kiki', 'kiki', 'rezkikartika01@gmail.com', '085536709849', 'Admin', '698695b152a69.jpeg', 'Aktif', ''),
(74123746, 0, 'Rezki Kartika', 'kiki', 'kiki', 'rezkikartika01@gmail.com', '085755369845', '', '', 'Aktif', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
