-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Agu 2023 pada 07.29
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eassessment`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_acara`
--

CREATE TABLE `berita_acara` (
  `id_berita_acara` int(11) NOT NULL,
  `id_skripsi` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita_acara`
--

INSERT INTO `berita_acara` (`id_berita_acara`, `id_skripsi`, `nim`) VALUES
(36, 92, '19101106038'),
(37, 93, '19101106042'),
(39, 95, '19101106020'),
(40, 96, '19101106058'),
(41, 97, '19101106016'),
(42, 98, '19101106044');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dfsemhas`
--

CREATE TABLE `dfsemhas` (
  `id_semhas` int(11) NOT NULL,
  `nama_mhs_semhas` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `prodi_semhas` varchar(20) NOT NULL,
  `judul_semhas` varchar(255) NOT NULL,
  `dospem1_semhas` varchar(50) NOT NULL,
  `dospem2_semhas` varchar(50) NOT NULL,
  `dosenuji1_semhas` varchar(50) NOT NULL,
  `dosenuji2_semhas` varchar(50) NOT NULL,
  `dosenuji3_semhas` varchar(50) NOT NULL,
  `komisi_semhas` varchar(50) NOT NULL,
  `tgl_semhas` date NOT NULL,
  `waktu_semhas` time NOT NULL,
  `tempat_semhas` varchar(30) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dfsemhas`
--

INSERT INTO `dfsemhas` (`id_semhas`, `nama_mhs_semhas`, `nim`, `prodi_semhas`, `judul_semhas`, `dospem1_semhas`, `dospem2_semhas`, `dosenuji1_semhas`, `dosenuji2_semhas`, `dosenuji3_semhas`, `komisi_semhas`, `tgl_semhas`, `waktu_semhas`, `tempat_semhas`, `nilai`) VALUES
(90, 'Florencia Fintje Saselah', '19101106038', 'Sistem Informasi', 'e-Assessment for Final Exam (Case Study: Department of Mathematcis, Sam Ratulangi University Manado)', 'Prof. Dr. Benny Pinontoan, M.Sc', 'Mahardika I. Takaendengan, S.ST, M.Si', 'Edwin Tenda, S.Kom, M.Kom', 'Yohanes A. Langi, S.Si, M.Si', 'Mahardika I. Takaendengan, SST, M.Si', 'Dodisutarma Lapihu, S.SI, M.Kom', '2023-08-02', '14:00:00', 'Ruang Sidang', 0),
(91, 'Nurul Nikma Salsabila', '19101106042', 'Sistem Informasi', 'Sistem Informasi Pendaftaran Santri dan Santriwati Berbasis Website Menggunakan Metode Rapid Application Development (RAD) pada Taman Pendidikan Al-Qur’an (TPA) Az-Zikra', 'Prof. Dr. Ir. John S. Kekenusa, MS​ ', 'Stephano Caesar Wenston Ngangi, ST., MT', 'Edwin Tenda, S.Kom, M.Kom', 'Mahardika I Takaendengan, SST, M.Si', 'Stephano Caesar Wenston Ngangi, ST., MT', 'Siska Ayu Widiana, S.Kom, M.Kom', '2023-08-04', '10:00:00', 'Ruang Sidang', 0),
(93, 'Istiqomah Br Karo Sekali', '19101106020', 'Sistem Informasi', 'Perancangan UI/UX Aplikasi Produk Fashion Pria Berbasis Mobile Pada Toko Celcius Menggunakan Metode Design thinking', 'Chriestie E.J.C. Montolalu, S.Si, M.Sc', 'Siska Ayu Widiana, S.Kom, M.Kom', 'Marline S. Paendong, S.Si, M.Si', 'Mahardika I Takaendengan, SST, M.Si', 'Christian Alderi Jeffta Soewoeh, MTI', 'Siska Ayu Widiana, S.Kom, M.Kom', '2023-07-07', '10:00:00', 'Ruang Sidang', 0),
(94, 'Fika Priskila', '19101106058', 'Sistem Informasi', 'Sistem Informasi Pendaftaran Santri dan Santriwati Berbasis Website Menggunakan Metode Rapid Application Development (RAD) pada Taman Pendidikan Al-Qur’an (TPA) Az-Zikra', 'Prof. Dr. Ir. John S. Kekenusa, MS​ ', 'Stephano Caesar Wenston Ngangi, ST., MT', 'Edwin Tenda, S.Kom, M.Kom', 'Mahardika I Takaendengan, SST, M.Si', 'Stephano Caesar Wenston Ngangi, ST., MT', 'Siska Ayu Widiana, S.Kom, M.Kom', '2023-08-10', '10:00:00', 'Ruang Sidang', 0),
(95, 'Jovianto Marcellino Dumalang', '19101106016', 'Sistem Informasi', 'Perancangan UI/UX Aplikasi Penjualan Makanan berbasis Mobile pada UMKM di Kota Manado menggunakan metode Design Thinking', 'Chriestie E.J.C. Montolalu, S.Si, M.Sc', 'Dodisutarma Lapihu, S.SI, M.Kom', 'Edwin Tenda, S.Kom, M.Kom', 'Tohap Manurung, S.Si, M.Si', 'Stephano Caesar Wenston Ngangi, ST., MT', 'Rillya Arundaa, M.Kom', '2023-07-04', '10:00:00', 'Ruang Sidang', 0),
(96, 'Reivaldo Tjuluku', '19101106044', 'Sistem Informasi', 'SMART WEBSITE FOR MANAGING CHURCH ACTIVITIES  USING RULE BASED REASONING BASED ONLINE  ANALYTICAL PROCESSING (OLAP)', 'Prof. Dr. Benny Pinontoan, M.Sc', 'Erik Alfonsius S.Kom, M.Kom', 'Aditya Lapu Kalua, ST., M.C.I.S', 'Wisard Widsli Kalengkongan, M.Kom', 'Siska Ayu Widiana, S.Kom., M.Kom', 'Siska Ayu Widiana, S.Kom, M.Kom', '2023-08-03', '13:00:00', 'Ruang Sidang', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dfskripsi`
--

CREATE TABLE `dfskripsi` (
  `id_skripsi` int(11) NOT NULL,
  `nama_mhs_skripsi` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `prodi_skripsi` varchar(20) NOT NULL,
  `judul_skripsi` varchar(255) NOT NULL,
  `dospem1_skripsi` varchar(50) NOT NULL,
  `dospem2_skripsi` varchar(50) NOT NULL,
  `dosenuji1_skripsi` varchar(50) NOT NULL,
  `dosenuji2_skripsi` varchar(50) NOT NULL,
  `dosenuji3_skripsi` varchar(50) NOT NULL,
  `pengawas` varchar(50) NOT NULL,
  `sek_komisi` varchar(50) NOT NULL,
  `tgl_skripsi` date NOT NULL,
  `waktu_skripsi` time NOT NULL,
  `tempat_skripsi` varchar(30) NOT NULL,
  `nilai_semhas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dfskripsi`
--

INSERT INTO `dfskripsi` (`id_skripsi`, `nama_mhs_skripsi`, `nim`, `prodi_skripsi`, `judul_skripsi`, `dospem1_skripsi`, `dospem2_skripsi`, `dosenuji1_skripsi`, `dosenuji2_skripsi`, `dosenuji3_skripsi`, `pengawas`, `sek_komisi`, `tgl_skripsi`, `waktu_skripsi`, `tempat_skripsi`, `nilai_semhas`) VALUES
(92, 'Florencia Fintje Saselah', '19101106038', 'Sistem Informasi', 'e-Assessment for Final Exam (Case Study: Department of Mathematics, Sam Ratulangi University Manado)', 'Prof. Dr. Benny Pinontoan, M.Sc', 'Mahardika I. Takaendengan, S.ST, M.Si', 'Edwin Tenda, S.Kom, M.Kom', 'Yohanes A. Langi, S,Si, M.Si', 'Dodisutarma Lapihu, S.SI, M.Kom', 'Chriestie E.J.C Montolalu, S.Si, M.Sc', '', '2023-08-09', '13:00:00', 'Ruang Sidang', 0),
(93, 'Nurul Nikma Salsabila', '19101106042', 'Sistem Informasi', 'Sistem Informasi Pendaftaran Santri dan Santriwati Berbasis Website Menggunakan Metode Rapid Application Development (RAD) pada Taman Pendidikan Al-Qur’an (TPA) Az-Zikra', 'Prof. Dr. Ir. John S. Kekenusa, MS​ ', 'Stephano Caesar Wenston Ngangi, ST., MT', 'Edwin Tenda, S.Kom, M.Kom', 'Mahardika I. Takaendengan, S.ST, M.Si', 'Dodisutarma Lapihu, S.SI, M.Kom', 'Chriestie E.J.C Montolalu, S.Si, M.Sc', '', '2023-08-09', '14:00:00', 'Ruang Sidang', 0),
(95, 'Istiqomah Br Karo Sekali', '19101106020', 'Sistem Informasi', 'Perancangan UI/UX Aplikasi Produk Fashion Pria Berbasis Mobile Pada Toko Celcius Menggunakan Metode Design thinking', 'Chriestie E.J.C Montolalu, S.Si, M,Sc', 'Stephano Caesar Wenston Ngangi, ST., MT', 'Edwin Tenda, S.Kom, M.Kom', 'Mahardika I. Takaendengan, S.ST, M.Si', 'Siska Ayu Widiana, S.Kom, M.Kom', 'Chriestie E.J.C Montolalu, S.Si, M.Sc', '', '2023-07-20', '10:00:00', 'Ruang Sidang', 0),
(96, 'Fika Priskila', '19101106058', 'Sistem Informasi', 'Klasifikasi Senjata Tradisional Menggunakan Metode CNN Berbasis Website', 'Dr. Eng. Luther Latumakulita, S.Si, M.Kom', 'Dr. Eng. Luther Latumakulita, S.Si, M.Kom', 'Prof. Dr. Benny Pinontoan, M.Sc', 'Aditya Lapu Kalua, ST., M.C.I.S', 'Siska Ayu Widiana, S.Kom, M.Kom', 'Chriestie E.J.C Montolalu, S.Si, M.Sc', '', '2023-08-08', '10:00:00', 'Ruang Sidang', 0),
(97, 'Jovianto Marcelino Dumalang', '19101106016', 'Sistem Informasi', 'Perancangan UI/UX Aplikasi Penjualan Makanan berbasis Mobile pada UMKM di Kota Manado menggunakan metode Design Thinking', 'Chriestie E.J.C Montolalu, S.Si, M,Sc', 'Dodisutarma Lapihu, S.SI, M.Kom', 'Edwin Tenda, S.Kom, M.Kom', 'Yohanes A. Langi, S,Si, M.Si', 'Siska Ayu Widiana, S.Kom, M.Kom', 'Chriestie E.J.C Montolalu, S.Si, M.Sc', '', '2023-07-20', '10:00:00', 'Ruang Sidang', 0),
(98, 'Reivaldo Tjuluku', '19101106044', 'Sistem Informasi', 'SMART WEBSITE FOR MANAGING CHURCH ACTIVITIES USING RULE BASED REASONING BASED ONLINE ANALYTICAL PROCESSING (OLAP)', 'Prof. Dr. Benny Pinontoan, M.Sc', 'Erik Alfonsius S.Kom, M.Kom', 'Aditya Lapu Kalua, ST., M.C.I.S', 'Wisard Widsli Kalengkongan, M.Kom', 'Siska Ayu Widiana, S.Kom, M.Kom', 'Chriestie E.J.C Montolalu, S.Si, M.Sc', '', '2023-08-29', '15:00:00', 'Ruang Sidang', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilsemhas`
--

CREATE TABLE `nilsemhas` (
  `id_nilsemhas` int(11) NOT NULL,
  `nilsemhas_1` int(11) NOT NULL,
  `nilsemhas_2` int(11) NOT NULL,
  `nilsemhas_3` int(11) NOT NULL,
  `nilsemhas_total` int(11) NOT NULL,
  `pengisian_count` int(11) NOT NULL,
  `id_semhas` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilsemhas`
--

INSERT INTO `nilsemhas` (`id_nilsemhas`, `nilsemhas_1`, `nilsemhas_2`, `nilsemhas_3`, `nilsemhas_total`, `pengisian_count`, `id_semhas`, `nim`) VALUES
(94, 90, 90, 90, 90, 1, 90, '19101106038'),
(95, 85, 90, 90, 90, 1, 91, '19101106042'),
(97, 85, 90, 88, 88, 1, 93, '19101106020'),
(99, 0, 0, 0, 0, 0, 94, '19101106058'),
(100, 0, 0, 0, 0, 0, 95, '19101106016'),
(101, 90, 90, 90, 90, 1, 96, '19101106044');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilsemhas_dosen`
--

CREATE TABLE `nilsemhas_dosen` (
  `id_nilsemhas_dosen` int(11) NOT NULL,
  `id_nilsemhas` int(11) NOT NULL,
  `nilsemhas_1` int(11) NOT NULL,
  `nilsemhas_2` int(11) NOT NULL,
  `nilsemhas_3` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilsemhas_dosen`
--

INSERT INTO `nilsemhas_dosen` (`id_nilsemhas_dosen`, `id_nilsemhas`, `nilsemhas_1`, `nilsemhas_2`, `nilsemhas_3`, `username`, `nama`, `id_user`) VALUES
(54, 94, 90, 90, 90, '199408112022031004', 'Mahardika Inra Takaendengan, S.ST, M.Si', 10),
(55, 97, 85, 90, 88, '196606041995121001', 'Prof. Dr. Benny Pinontoan, M.Sc', 20),
(56, 95, 85, 90, 90, '199408112022031004', 'Mahardika Inra Takaendengan, S.ST, M.Si', 10),
(57, 101, 90, 90, 90, '196606041995121001', 'Prof. Dr. Benny Pinontoan, M.Sc', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilskripsi_kbim`
--

CREATE TABLE `nilskripsi_kbim` (
  `id_nilskripsi_kbim` int(11) NOT NULL,
  `nilskripsi_kbim_1` int(11) NOT NULL,
  `nilskripsi_kbim_2` int(11) NOT NULL,
  `nilskripsi_kbim_3` int(11) NOT NULL,
  `nilskripsi_kbim_total` int(11) NOT NULL,
  `pengisian_count` int(11) NOT NULL,
  `id_skripsi` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilskripsi_kbim`
--

INSERT INTO `nilskripsi_kbim` (`id_nilskripsi_kbim`, `nilskripsi_kbim_1`, `nilskripsi_kbim_2`, `nilskripsi_kbim_3`, `nilskripsi_kbim_total`, `pengisian_count`, `id_skripsi`, `nim`) VALUES
(66, 90, 100, 100, 99, 1, 92, '19101106038'),
(67, 90, 95, 100, 98, 1, 93, '19101106042'),
(69, 88, 99, 89, 92, 1, 95, '19101106020'),
(70, 0, 0, 0, 0, 0, 96, '19101106058'),
(71, 0, 0, 0, 0, 0, 97, '19101106016'),
(72, 0, 0, 0, 0, 0, 98, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilskripsi_kbim_dosen`
--

CREATE TABLE `nilskripsi_kbim_dosen` (
  `id_nilskripsi_kbim_dosen` int(11) NOT NULL,
  `id_nilskripsi_kbim` int(11) NOT NULL,
  `nilskripsi_kbim_1` int(11) NOT NULL,
  `nilskripsi_kbim_2` int(11) NOT NULL,
  `nilskripsi_kbim_3` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilskripsi_kbim_dosen`
--

INSERT INTO `nilskripsi_kbim_dosen` (`id_nilskripsi_kbim_dosen`, `id_nilskripsi_kbim`, `nilskripsi_kbim_1`, `nilskripsi_kbim_2`, `nilskripsi_kbim_3`, `username`, `nama`, `id_user`) VALUES
(13, 66, 90, 100, 100, '199408112022031004', 'Mahardika Inra Takaendengan, S.ST, M.Si', 10),
(14, 69, 88, 99, 89, '196606041995121001', 'Prof. Dr. Benny Pinontoan, M.Sc', 20),
(15, 67, 90, 95, 100, '199408112022031004', 'Mahardika Inra Takaendengan, S.ST, M.Si', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilskripsi_kuji`
--

CREATE TABLE `nilskripsi_kuji` (
  `id_nilskripsi_kuji` int(11) NOT NULL,
  `nilskripsi_kuji_1` int(11) NOT NULL,
  `nilskripsi_kuji_2` int(11) NOT NULL,
  `nilskripsi_kuji_3` int(11) NOT NULL,
  `nilskripsi_kuji_4` int(11) NOT NULL,
  `nilskripsi_kuji_5` int(11) NOT NULL,
  `nilskripsi_kuji_6` int(11) NOT NULL,
  `nilskripsi_kuji_7` int(11) NOT NULL,
  `nilskripsi_kuji_k` int(11) NOT NULL,
  `nilskripsi_kuji_u` int(11) NOT NULL,
  `nilskripsi_kuji_total` int(11) NOT NULL,
  `pengisian_count` int(11) NOT NULL,
  `id_skripsi` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilskripsi_kuji`
--

INSERT INTO `nilskripsi_kuji` (`id_nilskripsi_kuji`, `nilskripsi_kuji_1`, `nilskripsi_kuji_2`, `nilskripsi_kuji_3`, `nilskripsi_kuji_4`, `nilskripsi_kuji_5`, `nilskripsi_kuji_6`, `nilskripsi_kuji_7`, `nilskripsi_kuji_k`, `nilskripsi_kuji_u`, `nilskripsi_kuji_total`, `pengisian_count`, `id_skripsi`, `nim`) VALUES
(55, 90, 90, 89, 90, 90, 90, 91, 90, 91, 0, 1, 92, '19101106038'),
(56, 90, 90, 90, 90, 90, 88, 90, 90, 89, 0, 1, 93, '19101106042'),
(58, 88, 89, 90, 88, 90, 92, 99, 89, 97, 0, 1, 95, '19101106020'),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 96, '19101106058'),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 97, '19101106016'),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 98, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilskripsi_kuji_dosen`
--

CREATE TABLE `nilskripsi_kuji_dosen` (
  `id_nilskripsi_kuji_dosen` int(11) NOT NULL,
  `id_nilskripsi_kuji` int(11) NOT NULL,
  `nilskripsi_kuji_1` int(11) NOT NULL,
  `nilskripsi_kuji_2` int(11) NOT NULL,
  `nilskripsi_kuji_3` int(11) NOT NULL,
  `nilskripsi_kuji_4` int(11) NOT NULL,
  `nilskripsi_kuji_5` int(11) NOT NULL,
  `nilskripsi_kuji_6` int(11) NOT NULL,
  `nilskripsi_kuji_7` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilskripsi_kuji_dosen`
--

INSERT INTO `nilskripsi_kuji_dosen` (`id_nilskripsi_kuji_dosen`, `id_nilskripsi_kuji`, `nilskripsi_kuji_1`, `nilskripsi_kuji_2`, `nilskripsi_kuji_3`, `nilskripsi_kuji_4`, `nilskripsi_kuji_5`, `nilskripsi_kuji_6`, `nilskripsi_kuji_7`, `username`, `nama`, `id_user`) VALUES
(10, 55, 90, 90, 89, 90, 90, 90, 91, '199408112022031004', 'Mahardika Inra Takaendengan, S.ST, M.Si', 10),
(11, 58, 88, 89, 90, 88, 90, 92, 99, '196606041995121001', 'Prof. Dr. Benny Pinontoan, M.Sc', 20),
(12, 56, 90, 90, 90, 90, 90, 88, 90, '199408112022031004', 'Mahardika Inra Takaendengan, S.ST, M.Si', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','dosen') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_sessions` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `blokir`, `id_sessions`, `nama`) VALUES
(9, '20112001', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'N', '', 'Flo'),
(10, '199408112022031004', '107cda0a9cbdeaddfd0b59799413e5a1', 'dosen', 'N', '', 'Mahardika Inra Takaendengan, S.ST, M.Si'),
(14, '', '74be16979710d4c4e7c6647856088456', '', 'N', '', ''),
(19, 'mathstaff', 'ca57c4fdac95896186c68f7bb7b5ee5a', 'admin', 'N', '', 'Jurusan Matematika'),
(20, '196606041995121001', '4353946cb2a2cbe21adc886942b10303', 'dosen', 'N', '', 'Prof. Dr. Benny Pinontoan, M.Sc'),
(21, '198701082022031001', '306e0f4f22dfd91a8d5f2b6b4bc861c4', 'dosen', 'N', '', 'Edwin Tenda, S.Kom, M.Kom'),
(23, '197006132005011001', '2836b2acc0fca1ed70e134d1f1c0b069', 'dosen', 'N', '', 'Yohanes A.R. Langi, S.Si, M.Si'),
(24, '198512102008122001', '082f2a0da3c293f1adf1e1b94e97c9c2', 'dosen', 'N', '', 'Chriestie E.J.C Montolalu, S.Si, M.Sc\r\n'),
(25, '199107112022031003', '37a594718cb6c8fb1e9326005a5386a8', 'dosen', 'N', '', 'Dodisutarma Lapihu, S.SI, M.Kom\r\n'),
(26, '199202112022031005', 'd77e4aa5da89228abe95ec42a7e076df', 'dosen', 'N', '', 'Stephano Caesar Wenston Ngangi, ST., MT'),
(27, '199103102022032006', '7a99d273d2cabadac6a5639dda0803b7', 'dosen', 'N', '', 'Siska Ayu Widiana, S.Kom, M.Kom'),
(28, '198906232022032002', '57eeaf067ca67ae290df2d98bf7678bc', 'dosen', 'N', '', 'Rillya Arundaa, M.Kom'),
(29, '198712272022031005', 'ec4f2aae7066b4a72effbd19f70db7c5', 'dosen', 'N', '', 'Christian Alderi Jeffta Soewoeh, MTI'),
(30, '199402072022031011', '88658af34d42cca9bc398a3dd9e9c9a6', 'dosen', 'N', '', 'Aditya Lapu Kalua, ST., M.C.I.S'),
(31, '197109142008121001', 'f9c056c9aa506b89f3330a88184b4fa6', 'dosen', 'N', '', 'Dr. Eng. Luther Latumakulita, S.Si, M.Kom'),
(32, '195808241983031005', '59aba7e779d102ece2aff748674d4208', 'dosen', 'N', '', 'Prof. Dr. Ir. John S. Kekenusa, MS​ '),
(33, '197403162000032001', '2e9f078f2c6160f18e28eadb2561c9e7', 'dosen', 'N', '', 'Marline S. Paendong, S.Si, M.Si'),
(34, '197912242006041003', '202cb962ac59075b964b07152d234b70', 'dosen', 'N', '', 'Tohap Manurung, S.Si, M.Si');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD PRIMARY KEY (`id_berita_acara`),
  ADD UNIQUE KEY `nim_skripsi` (`nim`),
  ADD KEY `id_skripsi` (`id_skripsi`);

--
-- Indeks untuk tabel `dfsemhas`
--
ALTER TABLE `dfsemhas`
  ADD PRIMARY KEY (`id_semhas`),
  ADD UNIQUE KEY `unique_nim_semhas` (`nim`);

--
-- Indeks untuk tabel `dfskripsi`
--
ALTER TABLE `dfskripsi`
  ADD PRIMARY KEY (`id_skripsi`),
  ADD UNIQUE KEY `unique_nim_skripsi` (`nim`);

--
-- Indeks untuk tabel `nilsemhas`
--
ALTER TABLE `nilsemhas`
  ADD PRIMARY KEY (`id_nilsemhas`),
  ADD KEY `fk_nilsemhas_dfsemhas` (`id_semhas`);

--
-- Indeks untuk tabel `nilsemhas_dosen`
--
ALTER TABLE `nilsemhas_dosen`
  ADD PRIMARY KEY (`id_nilsemhas_dosen`),
  ADD KEY `id_nilsemhas` (`id_nilsemhas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `nilskripsi_kbim`
--
ALTER TABLE `nilskripsi_kbim`
  ADD PRIMARY KEY (`id_nilskripsi_kbim`),
  ADD KEY `fk_nilskripsi_kbim_semhas` (`id_skripsi`);

--
-- Indeks untuk tabel `nilskripsi_kbim_dosen`
--
ALTER TABLE `nilskripsi_kbim_dosen`
  ADD PRIMARY KEY (`id_nilskripsi_kbim_dosen`),
  ADD KEY `id_nilskripsi_kbim` (`id_nilskripsi_kbim`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `nilskripsi_kuji`
--
ALTER TABLE `nilskripsi_kuji`
  ADD PRIMARY KEY (`id_nilskripsi_kuji`),
  ADD KEY `id_skripsi` (`id_skripsi`);

--
-- Indeks untuk tabel `nilskripsi_kuji_dosen`
--
ALTER TABLE `nilskripsi_kuji_dosen`
  ADD PRIMARY KEY (`id_nilskripsi_kuji_dosen`),
  ADD KEY `id_nilskripsi_kuji` (`id_nilskripsi_kuji`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `unique_username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  MODIFY `id_berita_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `dfsemhas`
--
ALTER TABLE `dfsemhas`
  MODIFY `id_semhas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `dfskripsi`
--
ALTER TABLE `dfskripsi`
  MODIFY `id_skripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `nilsemhas`
--
ALTER TABLE `nilsemhas`
  MODIFY `id_nilsemhas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `nilsemhas_dosen`
--
ALTER TABLE `nilsemhas_dosen`
  MODIFY `id_nilsemhas_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `nilskripsi_kbim`
--
ALTER TABLE `nilskripsi_kbim`
  MODIFY `id_nilskripsi_kbim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `nilskripsi_kbim_dosen`
--
ALTER TABLE `nilskripsi_kbim_dosen`
  MODIFY `id_nilskripsi_kbim_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `nilskripsi_kuji`
--
ALTER TABLE `nilskripsi_kuji`
  MODIFY `id_nilskripsi_kuji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `nilskripsi_kuji_dosen`
--
ALTER TABLE `nilskripsi_kuji_dosen`
  MODIFY `id_nilskripsi_kuji_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD CONSTRAINT `berita_acara_ibfk_1` FOREIGN KEY (`id_skripsi`) REFERENCES `dfskripsi` (`id_skripsi`);

--
-- Ketidakleluasaan untuk tabel `nilsemhas`
--
ALTER TABLE `nilsemhas`
  ADD CONSTRAINT `fk_nilsemhas_dfsemhas` FOREIGN KEY (`id_semhas`) REFERENCES `dfsemhas` (`id_semhas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilsemhas_dosen`
--
ALTER TABLE `nilsemhas_dosen`
  ADD CONSTRAINT `nilsemhas_dosen_ibfk_1` FOREIGN KEY (`id_nilsemhas`) REFERENCES `nilsemhas` (`id_nilsemhas`),
  ADD CONSTRAINT `nilsemhas_dosen_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `nilskripsi_kbim`
--
ALTER TABLE `nilskripsi_kbim`
  ADD CONSTRAINT `fk_nilskripsi_kbim_id_skripsi` FOREIGN KEY (`id_skripsi`) REFERENCES `dfskripsi` (`id_skripsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilskripsi_kbim_ibfk_1` FOREIGN KEY (`id_skripsi`) REFERENCES `dfskripsi` (`id_skripsi`);

--
-- Ketidakleluasaan untuk tabel `nilskripsi_kbim_dosen`
--
ALTER TABLE `nilskripsi_kbim_dosen`
  ADD CONSTRAINT `nilskripsi_kbim_dosen_ibfk_1` FOREIGN KEY (`id_nilskripsi_kbim`) REFERENCES `nilskripsi_kbim` (`id_nilskripsi_kbim`),
  ADD CONSTRAINT `nilskripsi_kbim_dosen_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `nilskripsi_kuji`
--
ALTER TABLE `nilskripsi_kuji`
  ADD CONSTRAINT `nilskripsi_kuji_ibfk_1` FOREIGN KEY (`id_skripsi`) REFERENCES `dfskripsi` (`id_skripsi`);

--
-- Ketidakleluasaan untuk tabel `nilskripsi_kuji_dosen`
--
ALTER TABLE `nilskripsi_kuji_dosen`
  ADD CONSTRAINT `nilskripsi_kuji_dosen_ibfk_1` FOREIGN KEY (`id_nilskripsi_kuji`) REFERENCES `nilskripsi_kuji` (`id_nilskripsi_kuji`),
  ADD CONSTRAINT `nilskripsi_kuji_dosen_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
