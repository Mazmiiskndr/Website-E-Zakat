-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2021 pada 09.15
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_zakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `deskripsi_artikel` text NOT NULL,
  `nama_mustahiq` varchar(255) NOT NULL,
  `id_users` int(11) NOT NULL,
  `slug_artikel` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `deskripsi_artikel`, `nama_mustahiq`, `id_users`, `slug_artikel`, `gambar`, `date`) VALUES
(5, 'Yayasan Mustahiq', '<p style=\"margin-bottom: 14px; font-size: 15px; line-height: 28px; color: rgb(89, 89, 89); font-family: Roboto, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical literature from 459, making it over 2000 years old. Richard McClintock, a Latin professor at Virginia looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from written in 45 BC. This book is a treatise on the theory.</p><p class=\"mb-0\" style=\"margin-bottom: 14px; font-size: 15px; line-height: 28px; color: rgb(89, 89, 89); font-family: Roboto, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical literature from 459, making it over 2000 years old. Richard McClintock, a Latin professor at Virginia looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>', 'Nama Mustahiq', 1, 'yayasan-mustahiq', 'Screenshot_(6)2.png', '2021-05-27 06:57:56'),
(7, 'Ini judul artikel ke dua', '<p style=\"margin-bottom: 14px; font-size: 15px; line-height: 28px; color: rgb(89, 89, 89); font-family: Roboto, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical literature from 459, making it over 2000 years old. Richard McClintock, a Latin professor at Virginia looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from written in 45 BC. This book is a treatise on the theory.</p><p class=\"mb-0\" style=\"margin-bottom: 14px; font-size: 15px; line-height: 28px; color: rgb(89, 89, 89); font-family: Roboto, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical literature from 459, making it over 2000 years old. Richard McClintock, a Latin professor at Virginia looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>', 'Moch Azmi Iskandar', 1, 'ini-judul-artikel-ke-dua', 'artikel.png', '2021-05-29 15:08:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `nama_rekening`, `nomor_rekening`) VALUES
(1, 'MANDIRI', 'ADMINISTRATOR', '1770006605478');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar_zakat`
--

CREATE TABLE `bayar_zakat` (
  `id_bayar_zakat` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `no_transaksi` varchar(150) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_zakat` varchar(255) NOT NULL,
  `status_pembayaran` int(11) DEFAULT NULL,
  `jumlah_zakat` double DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `nama_bank` varchar(150) DEFAULT NULL,
  `nama_rekening` varchar(255) DEFAULT NULL,
  `nomor_rekening` varchar(255) DEFAULT NULL,
  `jumlah_transfer` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `tgl_pembayaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bayar_zakat`
--

INSERT INTO `bayar_zakat` (`id_bayar_zakat`, `id_users`, `no_transaksi`, `nama`, `jenis_zakat`, `status_pembayaran`, `jumlah_zakat`, `harga`, `nama_bank`, `nama_rekening`, `nomor_rekening`, `jumlah_transfer`, `bukti_pembayaran`, `tgl_pembayaran`) VALUES
(1, 5, '20210528-5', 'Nizza Rahmah', 'Zakat Emas/Perak', 1, 200, 200000, 'MANDIRI', 'Moch Azmi Iskandar', '17700054678', 1000000, 'Screenshot_(6).png', '2021-05-03'),
(2, 5, '20210528-5', 'Nizza Rahmah', 'Zakat Perdagangan', NULL, 50000, 100000, '', NULL, NULL, 0, '', '2021-05-24'),
(4, 5, '20210528-5', 'Nizza Rahmah', 'Zakat Pertanian dan Buah-buahan', NULL, 5, 10000, NULL, NULL, NULL, NULL, NULL, '2021-05-29'),
(5, 5, '20210528-5', 'Nizza Rahmah', 'Zakat Hewan Ternak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-17'),
(8, 6, '20210529-6', 'Moch Azmi Iskandar', 'Zakat Fitrah', 2, 2.5, 25000, 'MANDIRI', 'Moch Azmi Iskandar', '17700054678', 62500, 'Screenshot_(4).png', '2021-05-17'),
(11, 6, '20210530-6', 'Moch Azmi Iskandar', 'Zakat Emas/Perak', 1, 100, 1000000, 'MANDIRI', 'Niera Putri Noerahmi', '3129890819', 2500000, '198192.jpg', '2021-05-17'),
(17, 6, '20210601-6', 'Moch Azmi Iskandar', 'Zakat Perdagangan', NULL, 20000, 500000, NULL, NULL, NULL, NULL, NULL, '01-06-2021'),
(18, 6, '20210604-6', 'Moch Azmi Iskandar', 'Zakat Perak', NULL, 672, 100000, NULL, NULL, NULL, NULL, NULL, '04-06-2021'),
(19, 6, '20210604-6', 'Moch Azmi Iskandar', 'Zakat Emas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '04-06-2021'),
(20, 6, '20210604-6', 'Moch Azmi Iskandar', 'Zakat Perak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '04-06-2021'),
(21, 6, '20210604-6', 'Moch Azmi Iskandar', 'Zakat Fitrah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '04-06-2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `no_telp`, `deskripsi`) VALUES
(1, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', '+6282295153183', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat delectus fugit a sequi eius deleniti eveniet, est mollitia optio, nam iusto quo temporibus numquam ab. Laboriosam reprehenderit quo, et provident ex facilis nesciunt consectetur dolor nulla quaerat in qui quos tempora nam cumque ab vero, quibusdam officiis recusandae aperiam facere optio excepturi soluta, dolorum porro. Iusto, nisi, blanditiis. Cupiditate at consequatur dicta quaerat enim, quibusdam, alias debitis corporis deleniti velit accusamus assumenda, accusantium natus harum, nam ex adipisci suscipit minus blanditiis rem odit eius ad. Nisi qui quidem dolorum obcaecati tempora, aliquid asperiores suscipit dicta ipsam architecto iure nihil distinctio!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_artikel`
--

CREATE TABLE `komentar_artikel` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama_users` varchar(255) NOT NULL,
  `email_users` varchar(255) NOT NULL,
  `komenter` text NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mustahiq`
--

CREATE TABLE `mustahiq` (
  `id_mustahiq` int(11) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `nama_yayasan` varchar(255) NOT NULL,
  `alamat_mustahiq` varchar(255) NOT NULL,
  `jumlah_zakat` int(11) NOT NULL,
  `tgl_penyaluran` date NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mustahiq`
--

INSERT INTO `mustahiq` (`id_mustahiq`, `nama_penerima`, `nama_yayasan`, `alamat_mustahiq`, `jumlah_zakat`, `tgl_penyaluran`, `id_users`) VALUES
(1, 'Nama Mustahiq', 'Yayasan Mustahiq', 'Alamat Mustahiq', 2000000, '2021-05-28', 1),
(4, 'Moch Azmi Iskandar', 'PT Global Mustahiq', 'Perum Griya Mitra Batik Blok E148', 1000000, '2021-05-30', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_users` varchar(255) NOT NULL,
  `nama_users` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `balasan` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_users`, `nama_users`, `pesan`, `balasan`, `status`, `date`) VALUES
(1, '1', 'Moch Azmi Iskandar', 'Lorem Pisum', 'dasdsadsa', 'Public', '2021-05-27 06:02:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `no_transaksi` varchar(100) NOT NULL,
  `jenis_zakat` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nomor_rekening` varchar(100) NOT NULL,
  `jumlah_transfer` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `bukti_transfer` varchar(150) NOT NULL,
  `status_transfer` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_users`, `no_transaksi`, `jenis_zakat`, `nama_bank`, `nama_rekening`, `nomor_rekening`, `jumlah_transfer`, `keterangan`, `bukti_transfer`, `status_transfer`, `date`) VALUES
(1, 5, '2105271207251', 'Zakat Emas Perak', 'MANDIRI', 'Nizza Rahmah', '1770006605478', 2000000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, quo! Laboriosam eveniet,', 'bukti.png', 'Lunas', '2021-05-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama_users` varchar(255) NOT NULL,
  `email_users` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar_users` varchar(150) DEFAULT NULL,
  `alamat_users` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama_users`, `email_users`, `password`, `gambar_users`, `alamat_users`, `no_telp`, `date`, `role_id`) VALUES
(1, 'Administrator', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'default.jpg', 'Admin Perum', '082295153183', '2021-05-27 05:52:01', 1),
(5, 'Nizza Rahmah', 'nizzarahmah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'nizza.jpg', 'Tasikmalaya, Cibereum', '082295153122', '2021-05-27 17:00:39', 2),
(6, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'users.png', 'Tasikmalaya,kawalu,perun griya mitra batik E148', '082295153183', '2021-05-29 16:16:42', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `bayar_zakat`
--
ALTER TABLE `bayar_zakat`
  ADD PRIMARY KEY (`id_bayar_zakat`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `komentar_artikel`
--
ALTER TABLE `komentar_artikel`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `mustahiq`
--
ALTER TABLE `mustahiq`
  ADD PRIMARY KEY (`id_mustahiq`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bayar_zakat`
--
ALTER TABLE `bayar_zakat`
  MODIFY `id_bayar_zakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `komentar_artikel`
--
ALTER TABLE `komentar_artikel`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mustahiq`
--
ALTER TABLE `mustahiq`
  MODIFY `id_mustahiq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
