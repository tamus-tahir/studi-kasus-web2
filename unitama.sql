-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2024 pada 20.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `appname` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `author` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `appname`, `logo`, `copyright`, `description`, `keyword`, `author`) VALUES
(1, 'UNITAMA', '1719250495.png', '2024 || Universitas Teknologi Akba Makassar', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'php, css, js, bootstrap', 'Tamus Tahir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `prodi`, `deskripsi`, `icon`, `urutan`) VALUES
(1, 'Sistem Informasi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'bx bxl-meta', 2),
(2, 'Teknik Informatika', 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', 'bx bxl-flutter', 1),
(3, 'Pendidikan Teknologi', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'bx bxl-imdb', 3),
(4, 'Teknologi Informasi', 'It has survived not only five centuries', 'bx bxl-steam', 4),
(5, 'Bisnis Digital', 'But also the leap into electronic typesetting, remaining essentially unchanged', 'bx bxl-audible', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `tentang` text NOT NULL,
  `visimisi` text NOT NULL,
  `struktur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `tentang`, `visimisi`, `struktur`) VALUES
(1, '<p style=\"text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<p style=\"text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<p style=\"text-align: justify;\"><strong><span style=\"font-size: 18pt;\">VISI</span></strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Contrary to popular belief, Lorem Ipsum is not simply random text</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 18pt;\"><strong>MISI</strong></span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. </span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. </span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. </span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></li>\r\n</ol>', '1721066015.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `tombol` varchar(20) NOT NULL,
  `link` varchar(128) NOT NULL,
  `urutan` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id_slide`, `judul`, `deskripsi`, `tombol`, `link`, `urutan`, `gambar`) VALUES
(2, 'PMB ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'REGISTER', 'https://pmb.unitama.ac.id/', 2, '1720463706.jpg'),
(3, 'SIAKAD', 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'LOGIN', 'https://siakad.akba.ac.id/', 1, '1720461218.jpg'),
(4, 'E-MACCA', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'VISIT', 'https://e-macca.akba.ac.id/', 3, '1720461261.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `role` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `role`, `foto`) VALUES
(1, '12345678', '$2y$10$HVa49IQ4hVKPRoHUnaf5tO5FRptzIiu.SCRDQLJ5688exp9ew7RLa', 'Brandon Lee', 1, '1718044731.jpg'),
(6, '123123123', '$2y$10$xaMt1HjYEP1CVjccb/aSPO0Tc6Mrxz6QiY6gQaDl334sq6l9Dxn/e', 'Anton', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
