-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Agu 2022 pada 10.52
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gisgeopalu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bewisata`
--

CREATE TABLE `bewisata` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `isi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bewisata`
--

INSERT INTO `bewisata` (`id`, `judul`, `tanggal`, `gambar`, `penulis`, `isi`) VALUES
(1, 'Pantai kaluku', '2022-07-10', 'wallpaperbetter1.jpg', 'kekei', 'pantai kaluku adalah                    '),
(2, 'tanjung api', '2022-08-12', 'Logo-Javascript3.png', 'ummul hijaiyah', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `geowisata`
--

CREATE TABLE `geowisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longtitude` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `geowisata`
--

INSERT INTO `geowisata` (`id`, `nama`, `latitude`, `longtitude`, `gambar`, `keterangan`) VALUES
(2, 'Pantai Bambarano', '0.218217', '119.8495298', 'Screenshot 2022-05-14 140952.png', 'Morfologi, Berupa pantai yang terdampak tsunami pada tahun 1968.'),
(3, 'Danau Talaga', '0.176356', '119.8457963', 'Screenshot 2022-05-14 135850.png', 'Morfologi Berupa danau yang terbentuk akibat proses tektonik.'),
(4, 'Equator Siweli', '0.000009', '119.8865227', 'Screenshot 2022-05-14 125919.png', 'Morfologi Berupa zona garis khatulistiwa atau titik 0'),
(5, 'Mata Air Panas  Mapane', '-0.032024', '119.8819113', 'Screenshot 2022-05-14 135850.png', 'Mata Air Berupa mata air panas yang ada karena gempabumi tahun 1968.'),
(6, 'Pantai Mapaga', '-0.117033', '119.8211977', 'Screenshot 2022-05-14 140952.png', 'Morfologi Berupa pantai yang terdampak tsunami tahun 1968. Ada bukti kampong yang hilang akibat tsunami.'),
(7, 'Pantai Tanjung Karang', '-0.645587', '119.7373342', 'tanjungkarang.jpg', 'Morfologi Berupa pantai yang mengalami penurunan permukaan/ downlift akibat gempabumi 2018'),
(8, 'Pantai Buluri', '-0.8496970958589369', '119.82430562580501', 'Screenshot 2022-05-14 140952.png', 'Morfologi Berupa pantai yang mengalami penurunan permukaan/ downlift akibat gempabumi 2018. Dan lanskap kerusakan lingkungan akibat tambang galian C.'),
(9, 'Pesisir Mamboro', '-0.795459', '119.8671333', 'pesisir mamboro.jpg', 'Morfologi Berupa pantai yang terdampak tsunami 2018, terdapat kapal yang tersingkap di daratan.'),
(10, 'Fosil Moluska Besar Tondo', '-0.839155', '119.8812513', 'fosil meluska.jpg', 'Litologi/ Paleontologi Berupa singkapan batuan batupasir dengan penuh moluska. Terdapat beberapa fosil moluska besar tersingkap, akibat dari proses tektonik.'),
(11, 'Pantai talise', '-0.8756782076658632', '119.8719970191834', 'pantai talise.jpeg', 'Morfologi Berupa pantai yang terdampak tsunami dan mengalami penurunan permukaan/ downlift akibat gempabumi 2018.'),
(12, 'Retakan Gempabumi Jl.  Diponegoro', '-0.8863544610448544', '119.84616188260748', 'retakan gempa.jpg', 'Jalur Patahan Permukaan yang mengalami pergeseran mengiri sebesar 5,5meter akibat gempabumi 2018.'),
(13, 'Retakan Gempabumi Jl.  Cemara', '-0.900155096835254', '119.84359562625914', 'jl.cemara.jpg', 'Jalur Patahan Permukaan yang mengalami pergeseran mengiri sebesar 5,5meter akibat gempabumi 2018.'),
(14, 'Likuefaksi  Balaroa', '-0.9053061391608531', '119.84293326872361', 'balaroa.jpeg', 'Gerakan Tanah Mengalami gerakan tanah berupa likuefaksi besar akibat gempabumi 2018.'),
(15, 'Likuefaksi Petobo', '-0.9378566845771326', '119.91958735314476', 'petobo.jpg', 'Gerakan Tanah Mengalami gerakan tanah berupa likuefaksi besar akibat gempabumi 2018.'),
(16, 'Puncak  Matantimali', '-0.94954926793386', '119.81512062799521', 'Puncak-Matantimali-Sulteng.jpg', 'Morfologi Dataran tinggi 1000 mdpl, lokasi untuk melihat lembah palu, pesisir donggala dan pegunungan sigi dengan jelas.'),
(17, 'Likuefaksi Jono Oge', '-0.9797477440613486', '119.91688778599472', 'jono oge.jpg', 'Gerakan Tanah Mengalami gerakan tanah berupa likuefaksi besar akibat gempabumi 2018.'),
(18, 'Retakan Gempabumi Jl.  Pewunu', '-1.028626428345641', '119.86642283561159', 'pevunu.jpg', 'Jalur Patahan Permukaan yang mengalami pergeseran mengiri sebesar 5,3meter akibat gempabumi 2018.'),
(19, 'Mata Air Panas Bora', '-1.053867955839716', '119.93920313542488', 'Screenshot 2022-05-14 135850.png', 'Mata Air Berupa mata air panas yang ada karena gempabumi tahun 2018'),
(20, 'Maranatha (Pohon Mangrove)', '-0.7067404610001974', '119.76466279862916', 'pohon mangrove.jpg', 'Morfologi Berupa dataran tinggi dimana pohon mangrove banyak ditemukan. Lokasi ini adalah bukti kalau dahulunya daerah ini adalah pesisir, sedangkan kondisinya sekarang jarak pesisir dengan Maranatha '),
(21, 'Likuefaksi  Sibalaya', '-1.148173', '119.9228958', '', 'Gerakan Tanah Mengalami gerakan tanah berupa likuefaksi besar akibat gempabumi 2018.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kordinat`
--

CREATE TABLE `kordinat` (
  `id` int(11) NOT NULL,
  `lat_long` varchar(50) NOT NULL,
  `long_lat` varchar(50) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `gambar` varchar(2000) NOT NULL,
  `gambar2` varchar(256) NOT NULL,
  `gambar3` varchar(256) NOT NULL,
  `gambar4` varchar(256) NOT NULL,
  `gambar5` varchar(256) NOT NULL,
  `gambar6` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kordinat`
--

INSERT INTO `kordinat` (`id`, `lat_long`, `long_lat`, `nama_tempat`, `gambar`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `tanggal`, `keterangan`) VALUES
(20, '-0.08142468575438462', '119.76351393983252', 'Pantai Bambarano', '1.jpeg', '2.jpg', '2.jpg', '4.jpg', '5.jpg', '6.jpg', '2022-08-17', 'Morfologi berupa pantai yang terdampak tsunami pada tahun 1968. Pantai ini memiliki garis pantai yang cukup panjang dan memiliki belahan sungai yang melintang di salah satu spot nya. Selain itu, Pantai ini memiliki dua batu karang yang cukup besar dengan jarak yang cukup dekat di antara kedua nya. Anda pun bisa menjajaki dan naik ke atas batu karang tersebut untuk sekedar mencari spot foto atau mencari landscape view yang berbeda. Pantai yang berjarak sekitar 114 KM dari Kota Palu ini menawarkan Pantai Pasir putih yang indah dengan air laut yang jernih sehingga menjadi salah satu lokasi yang banyak dikunjungi wisatawan khususnya dari Kota Palu. '),
(24, '0.18153160241639377', '119.84831310748551', 'Danau Talaga', '11.jpg', '22.jpg', '34.jpg', '44.jpg', '54.jpg', '64.jpg', '2022-08-17', 'Morfologi berupa danau yang terbentuk akibat proses tektonik. Danau Dampelas biasa pula disebut Danau Talaga sesuai nama desa sekitar danau, namun secara umum disebut Dampelas sesuai bahasa dan etnis terbesar di wilayah tersebut. Pemanfaatannya sebagai sumber air untuk kebutuhan mandi dan mencuci bagi penduduk di sekitarnya. Di tepinya banyak tumbuh pohon sagu yang sengaja ditanam penduduk setempat sejak lama sebagai salah satu sumber pangan. Di dalam danau terdapat jenis ikan mujair (bau kandia), ikan lele, ikan mas (bau bulaan) dan terdapat salah satu jenis kerang (tude) menjadi sumber perikanan air tawar bagi penduduk setempat. Danau ini termasuk unik karena muaranya merupakan pertemuan dengan air laut perairan Selat Makassar. Setiap tahun di area danau dilaksanakan Festival Danau Dampelas sebagai kegiatan pariwisata budaya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tranding`
--

CREATE TABLE `tranding` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `isi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tranding`
--

INSERT INTO `tranding` (`id`, `judul`, `tanggal`, `gambar`, `penulis`, `isi`) VALUES
(2, 'sansarino', '2022-07-10', 'beranda.png', 'rere', 'sansarino adalah                    '),
(3, 'lembanato', '2022-07-10', 'instal-xampp-di-windows-71.png', 'ummul hijaiyah', 'lembanato adalah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(512) NOT NULL,
  `role_id` int(2) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role_id`, `is_active`) VALUES
(6, 'rivaldiway', 'mohrifaldiway@gmail.com', '$2y$10$heRsiD5FKsZTMqRQmqLDm.9FtIiWkR6nTJLWI5JuEiyOWBjYEloym', 2, 1),
(7, 'sukmalarasati', 'sukmalarasati@gmail.com', '$2y$10$ywB9hDfzJVPMaGyssq3GreXZQy9S4wZgt8uAfE5XGYczxHZ5yjDKy', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama`, `keterangan`) VALUES
(1, 'Equator Siweli', 'Morfologi Berupa zona garis khatulistiwa atau titik 0'),
(6, 'Fosil Moluska Besar Tondo', 'Litologi/ Paleontologi Berupa singkapan batuan batupasir dengan penuh moluska. Terdapat beberapa fos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bewisata`
--
ALTER TABLE `bewisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geowisata`
--
ALTER TABLE `geowisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kordinat`
--
ALTER TABLE `kordinat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wisata_id` (`lat_long`);

--
-- Indexes for table `tranding`
--
ALTER TABLE `tranding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bewisata`
--
ALTER TABLE `bewisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `geowisata`
--
ALTER TABLE `geowisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `kordinat`
--
ALTER TABLE `kordinat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tranding`
--
ALTER TABLE `tranding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
