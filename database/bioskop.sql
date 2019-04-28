-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Apr 2019 pada 19.15
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'dickyhdyt', 'e10adc3949ba59abbe56e057f20f883e', 'dickyhidayat2@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_user`
--

CREATE TABLE `akun_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `handphone` varchar(12) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_user`
--

INSERT INTO `akun_user` (`id_user`, `username`, `password`, `email`, `handphone`, `jk`, `address`) VALUES
(4, 'anggaagustira', 'angga0', 'anggaagustira@gmail.com', '081395145194', 'L', 'Kp.Bojong Kasur RT.04 RW.13, Des.Bojong, Kec.Majalaya, Kab.Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id_film` int(255) NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `nama_film`, `durasi`, `rating`, `sinopsis`, `status`, `gambar`) VALUES
(14, 'Shazam!', '132', 'R', 'Setiap orang memiliki sifat pahlawan di dalam dirinya. Hanya menunggu waktu dan keajaiban untuk membawanya keluar.   Billy Batson (Asher Angel) remaja 14 tahun ini terpilih karena sifatnya. Ia menjadi superhero setelah menyebut kata SHAZAM.', 'Playing', '155289109532951_300x430.jpg'),
(15, 'Bumi Itu Bulat', '103', 'R', 'Meski ber ayah kan seorang banser, Rahabi tidak bangga. Di kampus, Rahabi bersahabat dengan Markus, umat kristiani, Hitu yang bercita-cita menjadi Banser, Sayid calon novelis, dan Tiara yang juga bermasalah dengan keluarga nya. Mereka membentuk grup acapella dengan nama Rujak Acapella. Rahabi ingin Rujak acapella sukses demi membiayai kuliah kedokteran Rara, adiknya.  Jalan itu terbuka ketika Aldi, seorang producer musik menawari rekaman, dengan syarat Aisha harus bergabung di Rujak acapella. Aisha sendiri adalah mantan penyanyi remaja terkenal yang memutuskan tidak akan pernah bernyanyi lagi.  Demi mengajak Aisha bergabung, Rahabi bersedia melakukan apa saja yang diminta oleh Aisha. Keluarga dan keempat sahabat Rahabi secara perlahan tapi pasti melihat perubahan sikap Rahabi. Rahabi akhirnya harus memilih, apakah Ia harus terus mengejar impian nya dengan resiko kehilangan semua orang yang penting dalam hidupnya..', 'Playing', '155299196964763_300x430.jpg'),
(16, 'Dumbo', '112', 'SU', 'Seekor gajah kecil bernama Dumbo memiliki telinga yang sangat besar. Keanehan tersebut membuat Dumbo bisa terbang.   Kelebihan Dumbo ternyata membantu usaha sebuah sirkus yang hampir bangkrut. Kini Dumbo menjadi bintang baru sirkus tersebut.', 'Playing', '15523723493388_300x430.jpg'),
(17, 'Avengers: Endgame', '-', 'SU', 'Setelah peristiwa yang memusnahkan setengah dari populasi Bumi di Avengers: Infinity War (2018) kisah akan berlanjut saat Avengers yang tersisa berkumpul sekali lagi untuk melawan Thanos dan memulihkan tatanan alam semesta.', 'Up Coming', '155436530940989_452x647.jpg'),
(18, 'Rumput Tetangga', '104', 'R', 'Menjelang reuni SMA, Kirana (Titi Kamal) yang dulu adalah murid paling populer dan berprestasi di sekolah khawatir akan pendapat teman-temannya terhadap kehidupannya yang anti-klimaks dan hanya menjadi Ibu Rumah Tangga dengan 2 anak (Aqila dan Daffa). Bagaimana kehidupannya bila semua yang diidam-idamkan menjadi kenyataan? Apa harga yang harus dibayarkan agar keinginannya terwujud?', 'Up Coming', '155324193523639_300x430.jpg'),
(19, 'AFTER', '105 Minutes', 'R', 'Tessa (Josephine Langford) adalah remaja putri yang jatuh cinta kepada Hardin (Hero Fiennes Tiffin) sosok pemuda dengan latar belakang yang sangat misterius. Keduanya menjalani kisah cinta yang berliku.', 'Playing', '18AFTR.jpg'),
(20, 'HELLBOY (IMAX 2D)', '121 Minutes', 'R', 'Hellboy (David Harbour) adalah sosok superhero setengah setan. Berjuang dan menjadi harapan manusia saat ia bertarung melawan kekuatan kuno yang ingin menghancurkan dunia.', 'Playing', '3.jpg'),
(21, 'AVE MARYAM', '73 Minutes', 'R', 'Semarang, Suster Maryam (39th), seorang biarawati yang bertugas mengurusi para suster-suster sepuh, menjelang ulang tahun nya yang ke 40th dia berusaha untuk terus memurnikan diri. suatu malam Romo Martin (45th) datang ke rumah asrama kesusteran yang di pimpin oleh suster Mila (40th). Romo Martin memperkenalkan Suster Monic (66th) dan Romo Yosef (30th) keduanya akan menetap di kota ini. Kehadiran Romo Yosef yang pandai bermain music membuat suster Maryam jatuh hati. Suster Monic sebagai suster sepuh yang sudah berpengalaman mencoba menasehati Romo Yosef namun cinta berkata lain, hingga kedua nya menjalin hubungan diam-diam. Suster Maryam dihadapi oleh 2 pilihan, bertahan pada janjinya atau memilih Romo Yosef.', 'Playing', '4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teater`
--

CREATE TABLE `teater` (
  `id_teater` int(255) NOT NULL,
  `nama_teater` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telpon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teater`
--

INSERT INTO `teater` (`id_teater`, `nama_teater`, `kota`, `alamat`, `no_telpon`) VALUES
(4, 'TRANSMART BUAH BATU XXI', 'Bandung', 'Buah Batu Square Jln. Bojongsoang Raya No. 269 Cipagalo, Bojongsoang, Bandung', '(022) 86012956'),
(5, 'GANDARIA CITY IMAX', 'Jakarta', 'Jl Sultan Iskandar Muda, Kebayoran Lama Jakarta Selatan', '(021) 29053218'),
(6, '22132321', '123123213', '123213', '123213123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `akun_user`
--
ALTER TABLE `akun_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `teater`
--
ALTER TABLE `teater`
  ADD PRIMARY KEY (`id_teater`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `akun_user`
--
ALTER TABLE `akun_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `teater`
--
ALTER TABLE `teater`
  MODIFY `id_teater` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
