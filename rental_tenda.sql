-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 15.02
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_tenda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(5, 'Darmawan', 'darmawan', 'jakarta selatan', 'laki-laki', '08156939848', '1423477324723', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(6, 'Andi', 'andi', 'Jakarta', 'laki-laki', '0217687634', '12747657463', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(7, 'Arif', 'admin', 'Pemijahan bogor ', 'laki-laki', '08135423624', '176457908345', '21232f297a57a5a743894a0e4a801fc3', 1),
(8, 'Bayu', 'bayu', 'Jl.Kelapa Gading Jakarta utara', 'laki-laki', '0817612233', '14000756764735', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(10, 'muhamad', 'roin', 'dsdasdasds', 'laki-laki', '081382055381', '37498948047975', 'c0e3c83eeb1bec3c4c961d38e928ecad', 2),
(11, 'yessy', 'yessy ', 'Jl.rawamangun', 'perempuan', '08137949838', '389348794797', '4a7d1ed414474e4033ac29ccb8653d9b', 2),
(12, 'winda', 'fauli', 'jl.mengkudu GG III', 'perempuan', '0812837464', '37392820390', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_tenda` int(11) NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenda`
--

CREATE TABLE `tenda` (
  `id_tenda` int(11) NOT NULL,
  `kode_tipe` varchar(120) NOT NULL,
  `merek` varchar(120) NOT NULL,
  `kapasitas` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `matras` int(11) NOT NULL,
  `selimut` int(11) NOT NULL,
  `lampu` int(11) NOT NULL,
  `hammock` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tenda`
--

INSERT INTO `tenda` (`id_tenda`, `kode_tipe`, `merek`, `kapasitas`, `warna`, `status`, `harga`, `denda`, `matras`, `selimut`, `lampu`, `hammock`, `gambar`) VALUES
(3, 'DM', 'Arpanez', '8 Orang', 'biru-putih', '1', 450000, 45000, 1, 1, 1, 0, 'alpanez.jpg'),
(6, 'DM', 'dhaulagiri', '8 Orang', 'hijau', '1', 400000, 40000, 1, 1, 1, 0, 'tenda-camping-charlie.jpg'),
(9, 'PL', 'komando', '16 Orang', 'hijau', '0', 650000, 65000, 1, 0, 1, 0, 'tenda_pletonD300_TNI.jpg'),
(10, 'GLP', 'Naturehike', '6 orang', 'Bening', '0', 600000, 100000, 1, 1, 1, 1, 'glamping9.jpg'),
(13, 'TN', 'Consina', '6 Orang', 'Kuning', '1', 450000, 45000, 1, 1, 1, 0, 'tunel1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` int(11) NOT NULL,
  `kode_tipe` varchar(120) NOT NULL,
  `nama_tipe` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `kode_tipe`, `nama_tipe`) VALUES
(1, 'DM', 'Dome'),
(2, 'PL', 'Tenda Peleton'),
(3, 'GLP', 'Glamping'),
(4, 'GD', 'Geodesic dome'),
(6, 'TN', 'Tunnel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_tenda` int(11) NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` int(11) NOT NULL,
  `total_denda` varchar(120) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_tenda`, `tgl_rental`, `tgl_kembali`, `harga`, `denda`, `total_denda`, `tgl_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(3, 6, 9, '2021-01-15', '2021-01-16', '450000', 30000, '120000', '2021-01-20', 'Belum Kembali', 'Belum Selesai', '', 0),
(4, 6, 6, '2021-01-15', '2021-01-18', '400000', 30000, '60000', '2021-01-20', 'Kembali', 'Selesai', 'tugas.png', 1),
(5, 8, 10, '2021-01-18', '2021-01-19', '400000', 100000, '100000', '2021-01-20', 'Belum Kembali', 'Belum Selesai', '', 0),
(6, 6, 11, '2021-01-28', '2021-01-30', '300000', 25000, '25000', '2021-01-31', 'Kembali', 'Selesai', 'tugas2.png', 1),
(7, 9, 13, '2021-01-30', '2021-02-01', '350000', 25000, '25000', '2021-02-02', 'Kembali', 'Selesai', 'tugas2.png', 1),
(12, 12, 3, '2022-06-24', '2022-06-25', '450000', 45000, '0', '2022-06-25', 'Kembali', 'Selesai', 'struck2.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indeks untuk tabel `tenda`
--
ALTER TABLE `tenda`
  ADD PRIMARY KEY (`id_tenda`);

--
-- Indeks untuk tabel `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tenda`
--
ALTER TABLE `tenda`
  MODIFY `id_tenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
