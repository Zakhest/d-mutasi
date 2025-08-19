-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2024 pada 17.01
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
-- Database: `e-mutasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mutasi`
--

CREATE TABLE `data_mutasi` (
  `no` int(11) NOT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `tgl_disahkan` varchar(25) DEFAULT NULL,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `kelas` varchar(34) NOT NULL,
  `ttl` varchar(25) DEFAULT NULL,
  `nisn_nis` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `sekolah_asal` varchar(255) DEFAULT NULL,
  `alamat_sekolah_asal` varchar(255) DEFAULT NULL,
  `sekolah_tujuan` varchar(255) DEFAULT NULL,
  `kota_kab` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` varchar(80) DEFAULT NULL,
  `sekertaris` varchar(45) NOT NULL,
  `nip` varchar(34) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_mutasi`
--

INSERT INTO `data_mutasi` (`no`, `nama_sekolah`, `no_surat`, `tgl_disahkan`, `nama_siswa`, `kelas`, `ttl`, `nisn_nis`, `jenis_kelamin`, `sekolah_asal`, `alamat_sekolah_asal`, `sekolah_tujuan`, `kota_kab`, `provinsi`, `tanggal_dibuat`, `sekertaris`, `nip`, `jabatan`) VALUES
(1, 'Sindangsari 2', '421.2/186/SDR/VIII/2023', ' 27 Agustus 2023', 'Hanami Ashyana', '3 (Tiga)', 'Bogor, 20 Januari 1998', '3158544671 ', 'Perempuan', 'SD Negeri Cibuluh 2', 'Jl. Lebaksongsi RT 3/7 Kec. Bogor Timur', 'SD Negeri Paguyuban', 'Kab. Tasikmalaya', 'Jawa Barat', '23 Agustus 2023', 'Hj. Rini Mulyani, M.Pd', '197205012000032003', 'Kasi Kurikulum'),
(2, '', '421.2/186/SD/VII/2023', '25 Agustus 2023', 'Zaki Akbar', '4 (Empat)', 'Bogor, 23 Agustus 2010', '123456789', 'Laki-laki', 'SDN Sukasari', 'Jl. Raya Sukasari No.12 ', 'SDN Lawanggintung', 'Kota Bogor', 'Jawa Barat', '08 September 2023', 'Hj. Rini Mulyani, M.Pd', '197205012000032003', 'Kasi Kurikulum'),
(3, NULL, '422/231/SPK-2/X/2023', '31 Oktober 2023', 'Muhammad Naufal Adityo', '2 (Dua)', 'Sukabumi, 04 April 2015', '222301077 /  3154792496', 'Laki-laki', 'SD NEGERI SEMPLAK 2', 'Jl. Raya Semplak', 'SDN Rancabungur 03', 'Kab. Bogor', 'Jawa Barat', '31 Oktober 2023', 'Hj. Rini Mulyani, M.Pd', '197205012000032003', 'Kasi Kurikulum'),
(4, NULL, '421.2/186/SDR/VIII/2023', '27 Agustus 2023', 'Syifa', '2 (Dua)', 'Bogor, 21 Agustus 2011', '3158544671 ', 'Perempuan', 'SD NEGERI TAJUR 2', 'Jl. Raya Tajur Gg. Bale Desa', 'SD Negeri Paguyuban', 'Kab. Tasikmalaya', 'Jawa Barat', 'Kamis, 11 Januari 2024', 'Hj. Rini Mulyani, M.Pd', '197205012000032003', 'Kasi Kurikulum'),
(5, NULL, '421.2/369/-SDNP 5/2023', '23 Januari 2024', 'Razak ', '3 (Tiga)', 'Bogor, 23 Maret 2012', '24343221233', 'Laki-laki', 'SD AL GHAZALY', 'Jln. Cempaka No.6 Kotaparis', 'SDN Rancabungur 03', 'Medan', 'Sumatera Utara', '24 Januari 2024', 'Hj. Rini Mulyani, M.Pd', '197205012000032003', 'Kasi Kurikulum'),
(12, NULL, '421.2/SKet-247/SDN CIB 4/IX/2023', '29 September 2023', 'Rindi Permatasari', '3 (Tiga)', 'Bogor, 14 April 2014', '212201079/3147326049', 'Perempuan', 'SD NEGERI CIBULUH 4', 'Jl. Ciburial RT 04/04', 'SD Negeri Gegersari', 'Cianjur', 'Jawa Barat', '29 September 2023', 'Siswanto, S.E., M.Si.', '197506062008011009', 'Kasi Kesiswaan'),
(13, NULL, '421.2/SKet-247/SDN CIB 4/IX/2023', '29 September 2023', 'Rindi Permatasari', '3 (Tiga)', 'Bogor, 14 April 2014', '212201079/3147326049', 'Perempuan', 'SD NEGERI CIBULUH 4', 'Jl. Ciburial RT 04/04', 'SD Negeri Gegersari', 'Cianjur', 'Jawa Barat', '29 September 2023', 'Siswanto, S.E., M.Si.', '', ''),
(14, NULL, '421.2/SKet-247/SDN CIB 4/IX/2023', '29 September 2023', 'Rindi Permatasari', '3 (Tiga)', 'Bogor, 14 April 2014', '212201079/3147326049', 'Perempuan', 'SD NEGERI CIBULUH 4', 'Jl. Ciburial RT 04/04', 'SD Negeri Gegersari', 'Cianjur', 'Jawa Barat', '29 September 2023', 'Siswanto, S.E., M.Si.', '', ''),
(443, NULL, '421.2/369/-SDNP 5/2023', '12 September 2023', 'Ziapa Aja', '1 (Satu)', 'Bogor, 12 Juni 2014', '0148036543', 'Laki-laki', 'SD AL GHAZALY', 'Jln. Cempaka No.6 Kotaparis', 'SDN Rancabungur 03', 'Bogor', 'Aceh', '23 Agustus 2023', 'Dony Aprianto, S.I.P', '197804272006041008', 'Kasi Kesiswaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `format_no_surat`
--

CREATE TABLE `format_no_surat` (
  `no_urut` int(11) NOT NULL,
  `format` varchar(40) NOT NULL,
  `jenis` enum('keluar','masuk','luar_negeri') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `format_no_surat`
--

INSERT INTO `format_no_surat` (`no_urut`, `format`, `jenis`) VALUES
(1, '421.2/- Bid. SD', 'keluar'),
(2, '421.2/- Bid. SD', 'masuk'),
(3, '421.2/- Bid. SD', 'luar_negeri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_pejabat`
--

CREATE TABLE `kepala_pejabat` (
  `no_urut` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jabatan` enum('kasi_kesis','kasi_kur','kabid','kadis') NOT NULL,
  `posisi` enum('kadis','kabid','kasi') NOT NULL,
  `nip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kepala_pejabat`
--

INSERT INTO `kepala_pejabat` (`no_urut`, `id_login`, `nama`, `jabatan`, `posisi`, `nip`) VALUES
(1, 2, 'Drs. IRWAN RIYANTO, M.Si.', 'kadis', 'kadis', '197506062008011009'),
(2, 3, 'Rini Mulyani, S.Pd', 'kabid', 'kabid', '197205012000032003'),
(3, 4, 'Sandra Berliana, SE.MM', 'kasi_kur', 'kasi', '197205012000032003'),
(4, 5, 'Dony Aprianto, S.I.P.', 'kasi_kesis', 'kasi', '197804272006041008');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('staf','kasi','kabid','kadis','wali') NOT NULL,
  `sublevel` enum('staf','kabid','kadis','kasi_kur','kasi_kesis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`, `sublevel`) VALUES
(1, 'tes', 'tes', 'staf', 'staf'),
(2, 'kadis', 'kadis', 'kadis', 'kadis'),
(3, 'kabid', 'kabid', 'kabid', 'kabid'),
(4, 'kasi_kur', 'kasi_kur', 'kasi', 'kasi_kur'),
(5, 'kasi_kesis', 'kasi_kur', 'kasi', 'kasi_kesis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `luar_negeri`
--

CREATE TABLE `luar_negeri` (
  `no` int(11) NOT NULL,
  `no_surat` varchar(200) NOT NULL,
  `nama_siswa` varchar(300) NOT NULL,
  `jenis_kelamin` varchar(24) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nama_wali` varchar(300) NOT NULL,
  `asal_sekolah` varchar(400) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `tujuan` varchar(240) NOT NULL,
  `tanggal_dibuat` varchar(250) DEFAULT NULL,
  `tanggal_hijriah` varchar(250) NOT NULL,
  `tanggal_surat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `luar_negeri`
--

INSERT INTO `luar_negeri` (`no`, `no_surat`, `nama_siswa`, `jenis_kelamin`, `kelas`, `nama_wali`, `asal_sekolah`, `alamat_sekolah`, `tujuan`, `tanggal_dibuat`, `tanggal_hijriah`, `tanggal_surat`) VALUES
(1, ' 421.1/SD/VIII/2023     ', 'Emily', 'Laki-laki', '1 (Satu)', 'Lop', 'SD N BOJONG KERTA', 'Jl. Bojong Pesantren Kel.Bojongkerta', 'Akhirat', '23 Agustus 2023', '06 Safar 1445', '14 November 2023'),
(2, '421.1/SD/VIII/2023', 'D', 'laki-laki', '1 (Satu)', 'DF', 'SD BUDI MULIA', 'Jl. Kapten Muslihat No. 22', 'Belanda', '3 November 2023', '26 Rabiul Akhir 1445', '10 November 2023'),
(3, '421.1/SD/VIII/2023', 'C', 'perempuan', '1 (Satu)', 'lop', 'SD KRISTEN SATU BAKTI', 'Jln Kartini No 3 Bogor', 'Belanda', '1 November 2023', ' 02 Jumadil Awwal 1445', '10 November 2023'),
(4, '421.2/186/SDR/SDR2/VIII/2023  ', 'MAMAT', 'Laki-laki', '4 (Empat)', 'FULAN', 'SD N KAMPUNG RAMBUTAN', 'Jl. Sempur Kaler No.86', 'Akhirat', '23 November 2023', ' 09 Jumadil Awwal 1445', '23 November 2023'),
(7, '421.2/369/-SDNP 5/2023 ', 'Alo', 'laki-laki', '1 (Satu)', '', 'SD AL GHAZALY', 'Jln. Cempaka No.6 Kotaparis', 'Belanda', '22 November 2023', '03 Jumadil Awwal 1445', '10 November 2023'),
(5, '421.2/183/SDN_PAN-2/IX/2023 ', 'Nanda', 'Laki-laki', '2 (Dua)', 'Ahmad', 'SD AL GHAZALY', 'Jln. Cempaka No.6 Kotaparis', 'Belanda', '24 Januari 2024', '13 Rajab 1445', '20 Januari 2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_masuk`
--

CREATE TABLE `mutasi_masuk` (
  `no_urut` int(11) NOT NULL,
  `tanggal_hari_ini` varchar(29) NOT NULL,
  `tanggal_hijriah` varchar(29) NOT NULL,
  `kepala_sd` varchar(29) NOT NULL,
  `no_surat` varchar(35) NOT NULL,
  `tanggal_surat` varchar(30) NOT NULL,
  `alamat_sekolah` varchar(40) NOT NULL,
  `kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mutasi_masuk`
--

INSERT INTO `mutasi_masuk` (`no_urut`, `tanggal_hari_ini`, `tanggal_hijriah`, `kepala_sd`, `no_surat`, `tanggal_surat`, `alamat_sekolah`, `kecamatan`) VALUES
(1, '29 September 2023', '14 Robiul Awwal 1445', 'SD N KATULAMPA 1', '122.1/SD.KAL/XX/2023', '29 Septermber 2023', 'Jl Parung Banteng No.70', 'Bogor Timur'),
(2, '30 September 2023', '14 Robiul Awwal 1445', 'SD NEGERI TAJUR 2', '122.1/SD.KAL/XX/2023', '29 Septermber 2023', 'Jl. Raya Tajur Gg. Bale Desa', 'Bogor Timur'),
(3, '12 Januari 2024', '', 'SD BUDI MULIA', '421.2/186/SDR/VIII/2023', '4 November 2023', 'Jl. Kapten Muslihat No. 22', 'Bogor Tengah'),
(4, '24 Januari 2024', '13 Rajab 1445', 'SD BUDI MULIA', '421.1/SD/VIII/2023', '20 Januari 2024', 'Jl. Kapten Muslihat No. 22', 'Bogor Tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pejabat`
--

CREATE TABLE `pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama_pejabat` varchar(67) NOT NULL,
  `nip` char(67) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan_mutasi`
--

CREATE TABLE `permintaan_mutasi` (
  `no` int(11) NOT NULL,
  `nama_siswa` varchar(60) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `jenis_mutasi` varchar(40) NOT NULL,
  `surat_ket_pind_sch` blob NOT NULL,
  `akta` blob NOT NULL,
  `rapor` blob NOT NULL,
  `kartu_keluarga` char(45) NOT NULL,
  `tanggal_disurat` char(45) NOT NULL,
  `id_login` int(11) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`nama_provinsi`) VALUES
('Aceh'),
('Sumatera Utara'),
('Sumatera Barat'),
('Riau'),
('Kepulauan Riau'),
('Jambi'),
('Bengkulu'),
('Sumatera Selatan'),
('Kepulauan Bangka Belitung'),
('Lampung'),
('Banten'),
('DKI Jakarta'),
('Jawa Barat'),
('Jawa Tengah'),
('DI Yogyakarta'),
('Jawa Timur'),
('Bali'),
('Nusa Tenggara Barat'),
('Nusa Tenggara Timur'),
('Kalimantan Barat'),
('Kalimantan Tengah'),
('Kalimantan Selatan'),
('Kalimantan Timur'),
('Kalimantan Utara'),
('Gorontalo'),
('Sulawesi Barat'),
('Sulawesi Utara'),
('Sulawesi Tengah'),
('Sulawesi Selatan'),
('Sulawesi Tenggara'),
('Maluku'),
('Maluku Utara'),
('Papua'),
('Papua Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekertaris`
--

CREATE TABLE `sekertaris` (
  `nip` varchar(45) NOT NULL,
  `nama` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `sekertaris`
--

INSERT INTO `sekertaris` (`nip`, `nama`) VALUES
('197205012000032003', 'Hj. Rini Mulyani, M.Pd'),
('197506062008011009', 'Siswanto, S.E., M.Si.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `no_urut` int(11) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(40) NOT NULL,
  `provinsi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`no_urut`, `nama_sekolah`, `alamat`, `kota`, `provinsi`) VALUES
(1, 'SD AL GHAZALY', 'Jln. Cempaka No.6 Kotaparis', 'Bogor Tengah', 'Jawa Barat'),
(2, 'SD AL GHAZALY', 'Jln. Cempaka No.6 Kotaparis', 'Bogor Tengah', 'Jawa Barat'),
(3, 'SD BPK PENABUR', 'Jl. Paledang, Gg. Buntu No. 1', 'Bogor Tengah', 'Jawa Barat'),
(4, 'SD BUDI MULIA', 'Jl. Kapten Muslihat No. 22', 'Bogor Tengah', 'Jawa Barat'),
(5, 'SD DIAN HARAPAN', 'Jl. Raya Pajajaran No. 27 RT 001 RW 004', 'Bogor Tengah', 'Jawa Barat'),
(6, 'SD KRISTEN SATU BAKTI', 'Jln Kartini No 3 Bogor', 'Bogor Tengah', 'Jawa Barat'),
(7, 'SD N BARANANGSIANG', 'Jalan Malabar No 2', 'Bogor Tengah', 'Jawa Barat'),
(8, 'SD N DEWI SARTIKA 1', 'Jl. RE. Martadinata No. 7', 'Bogor Tengah', 'Jawa Barat'),
(9, 'SD N DEWI SARTIKA 2', 'Jl. R.E Martadinata No. 7', 'Bogor Tengah', 'Jawa Barat'),
(10, 'SD N DEWI SARTIKA 3', 'Jl. RE. Martadinata No 7', 'Bogor Tengah', 'Jawa Barat'),
(11, 'SD N GUNUNG GEDE', 'Jl. Pajajaran No. 86', 'Bogor Tengah', 'Jawa Barat'),
(12, 'SD N KAMPUNG RAMBUTAN', 'Jalan Sempur Kaler Nomor 86', 'Bogor Tengah', 'Jawa Barat'),
(13, 'SD N KEBON KOPI', 'Jl. Kebon Kopi Rt. 03 Rw. 09 No. 22', 'Bogor Tengah', 'Jawa Barat'),
(14, 'SD N MALABAR', 'Jl. Malabar Ujung No 2', 'Bogor Tengah', 'Jawa Barat'),
(15, 'SD N PANARAGAN 3 BOGOR', 'Jl. Veteran No.33', 'Bogor Tengah', 'Jawa Barat'),
(16, 'SD N PAPANDAYAN', 'Jl Papandayan No.25', 'Bogor Tengah', 'Jawa Barat'),
(17, 'SD N PENGADILAN 1 BOGOR', 'Jl. Pengadilan No.4 Bogor', 'Bogor Tengah', 'Jawa Barat'),
(18, 'SD N PENGADILAN 2', 'Jl. Pengadilan No. 12', 'Bogor Tengah', 'Jawa Barat'),
(19, 'SD N PENGADILAN 3', 'Jalan Pengadilan No.8 Rt 03/01', 'Bogor Tengah', 'Jawa Barat'),
(20, 'SD N PERWIRA', 'Jl. Perwira No. 4', 'Bogor Tengah', 'Jawa Barat'),
(21, 'SD N SEMPUR KIDUL', 'Jalan Sempur Kidul', 'Bogor Tengah', 'Jawa Barat'),
(22, 'SD N TEGALLEGA 1', 'Tegallega', 'Bogor Tengah', 'Jawa Barat'),
(23, 'SD N TEGALLEGA 2', 'Jl.tegallega No.16', 'Bogor Tengah', 'Jawa Barat'),
(24, 'SD NEGERI BABAKAN', 'Jln. Malabar Ujung No.7', 'Bogor Tengah', 'Jawa Barat'),
(25, 'SD NEGERI CIMANGGU KECIL', 'Jl. Cimanggu Kecil No.35', 'Bogor Tengah', 'Jawa Barat'),
(26, 'SD NEGERI GANG AUT', 'Surya Kencana', 'Bogor Tengah', 'Jawa Barat'),
(27, 'SD NEGERI PABRIK ES I', 'Jl.ciwaringin No.20', 'Bogor Tengah', 'Jawa Barat'),
(28, 'SD NEGERI PANARAGAN 1', 'Jl. Veteran No. 37', 'Bogor Tengah', 'Jawa Barat'),
(29, 'SD NEGERI PANARAGAN 2', 'Jl.veteran No.35', 'Bogor Tengah', 'Jawa Barat'),
(30, 'SD NEGERI PANARAGAN KIDUL BOGO', 'Jl. Panaragan Kidul No. 14 Bogor', 'Bogor Tengah', 'Jawa Barat'),
(31, 'SD NEGERI PENGADILAN 5', 'Jl. Pengadilan No. 10', 'Bogor Tengah', 'Jawa Barat'),
(32, 'SD NEGERI POLISI 1', 'Jl. Paledang  No.45', 'Bogor Tengah', 'Jawa Barat'),
(33, 'SD NEGERI POLISI 4', 'Jl Polisi No 1', 'Bogor Tengah', 'Jawa Barat'),
(34, 'SD NEGERI POLISI 5', 'Jl. Polisi 1 No. 7 Bogor', 'Bogor Tengah', 'Jawa Barat'),
(35, 'SD NEGERI SEMPUR KALER', 'Jl. Sempur Kaler', 'Bogor Tengah', 'Jawa Barat'),
(36, 'SD NEGERI SINDANGSARI (BOTENG)', 'Jl. Ledeng Sindangsari No. 50', 'Bogor Tengah', 'Jawa Barat'),
(37, 'SD REGINA PACIS', 'Jl. Ir. H. Juanda No. 2', 'Bogor Tengah', 'Jawa Barat'),
(38, 'SD TAMANSISWA', 'Jl. Merdeka No. 172', 'Bogor Tengah', 'Jawa Barat'),
(39, 'SDN EMPANG 1', 'Jln R Saleh Syarief Bustaman No 13', 'Bogor Tengah', 'Jawa Barat'),
(40, 'SDN EMPANG 2', 'Jl. R. Saleh Syarief Bustaman No. 13 Bogor', 'Bogor Tengah', 'Jawa Barat'),
(41, 'SDN POLISI 2', 'Jl.Polisi 2 No.9 Rt 04/01', 'Bogor Tengah', 'Jawa Barat'),
(42, 'SDN RODA', 'Jalan Roda No 25', 'Bogor Tengah', 'Jawa Barat'),
(43, 'SD AL IRSYAD ISLAMYYAH', 'Jalan Sedane No.11', 'Bogor Selatan', 'Jawa Barat'),
(44, 'SD AL-AZHAR SYIFA BUDI', 'BOGOR NIRWANA RESIDENCE KAV.XII-B', 'Bogor Selatan', 'Jawa Barat'),
(45, 'SD ANANDA', 'Jl. Lawanggintung Komp.KPKN Rt06/06 No.25', 'Bogor Selatan', 'Jawa Barat'),
(46, 'SD HIGHSCOPE INDONESIA RANCAMA', 'JALAN GRAHA YASA KAV SH NO 01 RANCAMAYA ESTATE', 'Bogor Selatan', 'Jawa Barat'),
(47, 'SD IT AL QUDS', 'Jl.Sadane No.48 RT.06 RW.03', 'Bogor Selatan', 'Jawa Barat'),
(48, 'SD Kinderfield Bogor', 'Jalan Lawanggintung No. 55 RT 002 RW 006', 'Bogor Selatan', 'Jawa Barat'),
(49, 'SD KRISTEN TUNAS HARAPAN', 'Jl. Pahlawan No. 140 Bogor', 'Bogor Selatan', 'Jawa Barat'),
(50, 'SD MARDI WALUYA', 'Jl. Pahlawan No. 96 Bogor', 'Bogor Selatan', 'Jawa Barat'),
(51, 'SD MUHAMMADIYAH', 'Jln. Dreded No.20 A', 'Bogor Selatan', 'Jawa Barat'),
(52, 'SD N BATUTULIS 3', 'Jl. Batutulis Gg. Nv Sidik No.17', 'Bogor Selatan', 'Jawa Barat'),
(53, 'SD N CIBEUREUM 1', 'Jl.raya Cibeureum No.12 RT.003 RW.003', 'Bogor Selatan', 'Jawa Barat'),
(54, 'SD N CIPAKU 1', 'Jl. Raya Cipaku No.45', 'Bogor Selatan', 'Jawa Barat'),
(55, 'SD N CIPAKU 2', 'Jalan Gunung Gadung No 32', 'Bogor Selatan', 'Jawa Barat'),
(56, 'SD N CIRANJANG', 'Jl. Ciranjang Rt 04/03', 'Bogor Selatan', 'Jawa Barat'),
(57, 'SD N KERTAMAYA', 'Jl. Marga Bhakti No. 24 Rt. 03 / Rw. 01', 'Bogor Selatan', 'Jawa Barat'),
(58, 'SD N LAWANG GINTUNG 2', 'Jalan Lawanggintung No. 28', 'Bogor Selatan', 'Jawa Barat'),
(59, 'SD N LAWANG GINTUNG 4', 'Jl. Lawanggintung No. 20', 'Bogor Selatan', 'Jawa Barat'),
(60, 'SD N MUARASARI 1', 'Kp. Anyar Rt 01 Rw 06', 'Bogor Selatan', 'Jawa Barat'),
(61, 'SD N MUARASARI 3', 'Kp. Anyar Rt 02 Rw 06', 'Bogor Selatan', 'Jawa Barat'),
(62, 'SD N MULYAHARJA 2', 'Jl. Pabuaran Pasir No. 2', 'Bogor Selatan', 'Jawa Barat'),
(63, 'SD N MULYAHARJA I', 'Jl. Cibeureum Sunting No 49 Rt02/07', 'Bogor Selatan', 'Jawa Barat'),
(64, 'SD N PABUARAN', 'Bogor', 'Bogor Selatan', 'Jawa Barat'),
(65, 'SD N PAKUAN', 'Jl Dahlia No 1', 'Bogor Selatan', 'Jawa Barat'),
(66, 'SD N PAMOYANAN 3', 'Jl. Ranggamekar', 'Bogor Selatan', 'Jawa Barat'),
(67, 'SD N RANCAMAYA 1', 'JL. Rancamaya No. 23', 'Bogor Selatan', 'Jawa Barat'),
(68, 'SD N RANCAMAYA 2', 'Jl. Rancamaya Gg. Pabuaran RT 02/10', 'Bogor Selatan', 'Jawa Barat'),
(69, 'SD NEGERI BATUTULIS 1', 'Bogor', 'Bogor Selatan', 'Jawa Barat'),
(70, 'SD NEGERI BATUTULIS 2', 'Jln. Batutulis Gg. NV Sidik No. 14', 'Bogor Selatan', 'Jawa Barat'),
(71, 'SD NEGERI BOJONG KERTA', 'Jln Bojong Pesantren', 'Bogor Selatan', 'Jawa Barat'),
(72, 'SD NEGERI BONDONGAN', 'Jl. Pahlawan blk No. 35 F', 'Bogor Selatan', 'Jawa Barat'),
(73, 'SD NEGERI CIBEUREUM 2', 'Jl. Cibeureum Gg. Sate Rt.03/11 Mulyaharja', 'Bogor Selatan', 'Jawa Barat'),
(74, 'SD NEGERI CIBEUREUM 4', 'Cibeureum Pongpok', 'Bogor Selatan', 'Jawa Barat'),
(75, 'SD NEGERI CIKARET 1', 'Jl. Amasandi Muara No.07', 'Bogor Selatan', 'Jawa Barat'),
(76, 'SD NEGERI CIKARET 2', 'Jl. R Kosasih No. 86', 'Bogor Selatan', 'Jawa Barat'),
(77, 'SD NEGERI CIPAKU 4', 'Kp.babakan Baru Kel Cipaku', 'Bogor Selatan', 'Jawa Barat'),
(78, 'SD NEGERI CIPAKU PERUMDA', 'Jalan Perumda II RT.02 RW.02', 'Bogor Selatan', 'Jawa Barat'),
(79, 'SD NEGERI GENTENG', 'Jl. Dekeng No. 42', 'Bogor Selatan', 'Jawa Barat'),
(80, 'SD NEGERI HARJASARI I', 'Jln Rulita No 40', 'Bogor Selatan', 'Jawa Barat'),
(81, 'SD NEGERI HARJASARI II', 'KP. Girang Sari Rt 05/08 Kel. Harjasari Kec. Bogor', 'Bogor Selatan', 'Jawa Barat'),
(82, 'SD NEGERI LAWANG GINTUNG 1', 'Jl. Lawanggintung No. 22', 'Bogor Selatan', 'Jawa Barat'),
(83, 'SD NEGERI LAYUNGSARI 1', 'Jl. Layungsari III No.43', 'Bogor Selatan', 'Jawa Barat'),
(84, 'SD NEGERI LAYUNGSARI 2', 'Jln. Layungsari 3', 'Bogor Selatan', 'Jawa Barat'),
(85, 'SD NEGERI MUARASARI 2', 'Kp Balubursari', 'Bogor Selatan', 'Jawa Barat'),
(86, 'SD NEGERI PAMOYANAN 1', 'Jl. Rangga Mekar No. 1', 'Bogor Selatan', 'Jawa Barat'),
(87, 'SD NEGERI PAMOYANAN 2', 'Jl. Pabuaran', 'Bogor Selatan', 'Jawa Barat'),
(88, 'SD NEGERI RANGGA MEKAR', 'Rangga Mekar Bogor Selatan', 'Bogor Selatan', 'Jawa Barat'),
(89, 'SD PERWANIDA', 'Jalan Pahlawan No. 15', 'Bogor Selatan', 'Jawa Barat'),
(90, 'SD S MARDI YUANA', 'Jl. Siliwangi No.50', 'Bogor Selatan', 'Jawa Barat'),
(91, 'SD SRIKANDI', 'Jalan Pahlawan Gang Raden Saleh Nomor 53', 'Bogor Selatan', 'Jawa Barat'),
(92, 'SDIT BIRRU WATTAQWA', 'Jl. Re.Sumantadiredja Bojong No.114 RT.002 RW.008', 'Bogor Selatan', 'Jawa Barat'),
(93, 'SDIT NURUL FATA', 'Jl. Pabuaran No. 43 RT 01 RW 05', 'Bogor Selatan', 'Jawa Barat'),
(94, 'SDIT PERMATA BUNDA', 'JALAN RULITA NO. 45', 'Bogor Selatan', 'Jawa Barat'),
(95, 'SD ALAM AL GIVA', 'JL.PARFI 3 RT 003 RW 007', 'Bogor Barat', 'Jawa Barat'),
(96, 'SD ALAM CENDEKIA', 'Jl. Cilubang Nagrak No. 54 C RT 01 RW 04', 'Bogor Barat', 'Jawa Barat'),
(97, 'SD CAUSA PRIMA', 'Jl. Bambu Raya, Taman Yasmin No. 42 RT. 005 RW. 01', 'Bogor Barat', 'Jawa Barat'),
(98, 'SD DHARMA IBU', 'Gang Mesjid No.25', 'Bogor Barat', 'Jawa Barat'),
(99, 'SD INSAN KAMIL', 'Jl. Raya Dramaga Km. 6', 'Bogor Barat', 'Jawa Barat'),
(100, 'SD ISLAM AL MUSTARIH', 'Jl. R.Aria Surialaga No 111 Bogor', 'Bogor Barat', 'Jawa Barat'),
(101, 'SD ISLAM TERPADU ALIYA', 'Jl. Gardu Raya', 'Bogor Barat', 'Jawa Barat'),
(102, 'SD IT BUNDA SYAHIR', 'JL. BATU HULUNG RT03 RW01', 'Bogor Barat', 'Jawa Barat'),
(103, 'SD IT ZAID BIN TSABIT', 'KP. BOJONG NEROS', 'Bogor Barat', 'Jawa Barat'),
(104, 'SD N BALUNGBANG JAYA 2', 'Jl Swadaya Babakan Lebak Rt 01 Rw 06', 'Bogor Barat', 'Jawa Barat'),
(105, 'SD N BALUNGBANG JAYA 3', 'Cilubang', 'Bogor Barat', 'Jawa Barat'),
(106, 'SD N BUBULAK 2', 'Jl. Raya Cifor No. 33', 'Bogor Barat', 'Jawa Barat'),
(107, 'SD N CEMPLANG', 'Cemplang Baru Rt. 01/10', 'Bogor Barat', 'Jawa Barat'),
(108, 'SD N CIBALAGUNG 2', 'JALAN R. ARIA SURIALAGA', 'Bogor Barat', 'Jawa Barat'),
(109, 'SD N CIBALAGUNG 3', 'R.Aria Surialaga', 'Bogor Barat', 'Jawa Barat'),
(110, 'SD N CIBALAGUNG 4', 'Jl.r. Aria Surialaga', 'Bogor Barat', 'Jawa Barat'),
(111, 'SD N CIBALAGUNG 5', 'Jln Aria Surialaga No 137b', 'Bogor Barat', 'Jawa Barat'),
(112, 'SD N CIJAHE CURUG', 'Jl. Cijahe No.23', 'Bogor Barat', 'Jawa Barat'),
(113, 'SD N CILENDEK 4', 'Jl. Brigjen Saptadji H. Gg. Cendana Rt 03 Rw 03', 'Bogor Barat', 'Jawa Barat'),
(114, 'SD N CILENDEK I', 'Jl.Brigjend H. Saptadji Hadiprawira No. 25', 'Bogor Barat', 'Jawa Barat'),
(115, 'SD N CILENDEK TIMUR 2', 'Jalan Nurul Palah No 77 Rt 04/05', 'Bogor Barat', 'Jawa Barat'),
(116, 'SD N CURUG 3', 'Bogor', 'Bogor Barat', 'Jawa Barat'),
(117, 'SD N LOJI 2', 'Jln. Komplek IPB 1 Sindang Barang Loji RT 04 /08', 'Bogor Barat', 'Jawa Barat'),
(118, 'SD N LOJI 3', 'Kp Sindang Barang RT 02/05', 'Bogor Barat', 'Jawa Barat'),
(119, 'SD N MARGAJAYA 4', 'Dramaga Loceng No.3 Rt.03/04', 'Bogor Barat', 'Jawa Barat'),
(120, 'SD N MERDEKA 1', 'Jl. Merdeka No. 131', 'Bogor Barat', 'Jawa Barat'),
(121, 'SD N NEGLASARI BOGOR', 'Jln Raya Semplak', 'Bogor Barat', 'Jawa Barat'),
(122, 'SD N PABUARAN CILENDEK', 'Jl. Cilendek Timur', 'Bogor Barat', 'Jawa Barat'),
(123, 'SD N SELAKOPI', 'Jl Komp Kehutanan Rt03/6', 'Bogor Barat', 'Jawa Barat'),
(124, 'SD N SEMERU 1', 'Bumi Menteng Asri', 'Bogor Barat', 'Jawa Barat'),
(125, 'SD N SINDANG BARANG 3', 'Jl.K.H.M Syarifudin Sindangbarang', 'Bogor Barat', 'Jawa Barat'),
(126, 'SD N SINDANGBARANG 1', 'Jalan H.M Syarifuddin No. 10', 'Bogor Barat', 'Jawa Barat'),
(127, 'SD N SITU GEDE 2', 'Cilubang Tonggoh RT. 02 RW. 10', 'Bogor Barat', 'Jawa Barat'),
(128, 'SD NEGERI BALUNGBANG JAYA 1', 'Jl. Swadaya I Babakan Lebak', 'Bogor Barat', 'Jawa Barat'),
(129, 'SD NEGERI BUBULAK 1', 'Jl. Raya Cifor No 47', 'Bogor Barat', 'Jawa Barat'),
(130, 'SD NEGERI BUBULAK 3', 'Jl. Babakan Gardu Bogor', 'Bogor Barat', 'Jawa Barat'),
(131, 'SD NEGERI CIBALAGUNG 1', 'Jl. Raya Cibalagung', 'Bogor Barat', 'Jawa Barat'),
(132, 'SD NEGERI CILENDEK 2', 'Kp. Pahlawan', 'Bogor Barat', 'Jawa Barat'),
(133, 'SD NEGERI CILENDEK TIMUR 1', 'Jalan Gang Mesjid Cilendek Timur', 'Bogor Barat', 'Jawa Barat'),
(134, 'SD NEGERI GUNUNG BATU 1', 'Jl. Mayjend Ishak Djuarsa No.1', 'Bogor Barat', 'Jawa Barat'),
(135, 'SD NEGERI LOJI I', 'Jl Siaga No 7', 'Bogor Barat', 'Jawa Barat'),
(136, 'SD NEGERI MARGAJAYA 1', 'Jl.pemuda No. 6', 'Bogor Barat', 'Jawa Barat'),
(137, 'SD NEGERI MARGAJAYA 2', 'Jl Pemuda No 6', 'Bogor Barat', 'Jawa Barat'),
(138, 'SD NEGERI MARGAJAYA 3', 'Jl.pemuda caringin no.06', 'Bogor Barat', 'Jawa Barat'),
(139, 'SD NEGERI MENTENG', 'Jln. Manunggal No. 20', 'Bogor Barat', 'Jawa Barat'),
(140, 'SD NEGERI SEMERU 5', 'Jl. MANUNGGAL NO. 16', 'Bogor Barat', 'Jawa Barat'),
(141, 'SD NEGERI SEMERU 6', 'Jl. Dr. Semeru Gang Kelor No. 2 - 4', 'Bogor Barat', 'Jawa Barat'),
(142, 'SD NEGERI SEMPLAK 1', 'Jl. Raya Semplak', 'Bogor Barat', 'Jawa Barat'),
(143, 'SD NEGERI SEMPLAK 2', 'Jl. Raya Semplak', 'Bogor Barat', 'Jawa Barat'),
(144, 'SD NEGERI SINDANG BARANG 2', 'Jl.  Letjen Ibrahim Adjie No. 1 Kel. Sindang Baran', 'Bogor Barat', 'Jawa Barat'),
(145, 'SD NEGERI SINDANGRASA', 'Jl. Rante Kampung Sindangrasa', 'Bogor Barat', 'Jawa Barat'),
(146, 'SD NEGERI SITU GEDE 5', 'Kampung Rawa Jaha', 'Bogor Barat', 'Jawa Barat'),
(147, 'SD NEGERI SITUGEDE 3', 'Jl. Cilubang Tonggoh RT.02/RW.10', 'Bogor Barat', 'Jawa Barat'),
(148, 'SD NEGERI SITUGEDE 4', 'Kp. Jawa RT. 03 RW. 07', 'Bogor Barat', 'Jawa Barat'),
(149, 'SD PLUS BINA BANGSA SEJAHTERA', 'Jalan Raya Dramaga KM.7', 'Bogor Barat', 'Jawa Barat'),
(150, 'SD RIMBA PUTRA', 'Jalan Rimba Mulya I', 'Bogor Barat', 'Jawa Barat'),
(151, 'SDIT AL HIKMAH', 'Jl. Masjid Al-hikmah', 'Bogor Barat', 'Jawa Barat'),
(152, 'SDIT AL-YASMIN', 'Jl.Raya Sindangbarang No.16B', 'Bogor Barat', 'Jawa Barat'),
(153, 'SDIT BUNAYA', 'JALAN IBRAHIM ADJIE NO. 167 A', 'Bogor Barat', 'Jawa Barat'),
(154, 'SDIT INSANTAMA', 'Jl. Hegarmanah IV No. 47 Rt 01 Rw 08', 'Bogor Barat', 'Jawa Barat'),
(155, 'SDIT KEMUNING', 'Jl. Brigjen H. Saptadji Hadiprawira No. 93', 'Bogor Barat', 'Jawa Barat'),
(156, 'SDIT QA BAITUSSALAAM', 'Perum Bogor Raya Permai Blok F.F1 No.1', 'Bogor Barat', 'Jawa Barat'),
(157, 'SDIT SHOLAHUDDIN', 'Jl. Jabaru 1 RT 01 RW 05', 'Bogor Barat', 'Jawa Barat'),
(158, 'SDN CURUG 1', 'Jl.flamboyan No.31', 'Bogor Barat', 'Jawa Barat'),
(159, 'SDN GUNUNG BATU 2', 'Jl. Mayjen Ishak Djuarsa No.2', 'Bogor Barat', 'Jawa Barat'),
(160, 'SDN PURBASARI', 'Jl. Purbasari No.38', 'Bogor Barat', 'Jawa Barat'),
(161, 'SDN SINDANG BARANG 4', 'Jln. H M. Syarifudin', 'Bogor Barat', 'Jawa Barat'),
(162, 'SDN SITU GEDE I', 'Kp. Cilubang Tonggoh Rt. 02 Rw. 10', 'Bogor Barat', 'Jawa Barat'),
(163, 'SD ADVENT', 'Jl. Pajajaran No. 39', 'Bogor Timur', 'Jawa Barat'),
(164, 'SD AMAL KASIH', 'Jl. Danau Bogor Raya Blok Q No. 8', 'Bogor Timur', 'Jawa Barat'),
(165, 'SD ISLAM IBNU HAJAR', 'Jalan Katulampa Rt. 01/01 Kelurahan Katulampa, Bog', 'Bogor Timur', 'Jawa Barat'),
(166, 'SD KESATUAN', 'Jl. Raya Pajajaran, Komplek Pulo Armen No. 57', 'Bogor Timur', 'Jawa Barat'),
(167, 'SD N BABAKAN ASEM', 'Jl. Ciburial Indah', 'Bogor Timur', 'Jawa Barat'),
(168, 'SD N CIHEULEUT 1', 'Jl. R.H Soelaeman A Kartadjoemena, No. 42', 'Bogor Timur', 'Jawa Barat'),
(169, 'SD N DUTA PAKUAN', 'Jl. Baranangsiang Indah V/14', 'Bogor Timur', 'Jawa Barat'),
(170, 'SD N KATULAMPA 1', 'Jl Parung Banteng No.70', 'Bogor Timur', 'Jawa Barat'),
(171, 'SD N KATULAMPA 3', 'Jl. Bendung Katulampa', 'Bogor Timur', 'Jawa Barat'),
(172, 'SD NEGERI BANGKA 3', 'Jl. Otto Iskandardinata No.78 Bogor', 'Bogor Timur', 'Jawa Barat'),
(173, 'SD NEGERI BANTARKEMANG 1', 'Jl. Raya Bantarkemang No. 318, Rt. 01/13', 'Bogor Timur', 'Jawa Barat'),
(174, 'SD NEGERI BANTARKEMANG 2', 'Jl. Bantarkemang Rt. 03/07', 'Bogor Timur', 'Jawa Barat'),
(175, 'SD NEGERI BANTARKEMANG 3', 'Jl. Bantarkemang', 'Bogor Timur', 'Jawa Barat'),
(176, 'SD NEGERI BANTARKEMANG 6', 'Jl.bantarkemang Rt.02 / 07', 'Bogor Timur', 'Jawa Barat'),
(177, 'SD NEGERI CIHEULEUT 2', 'Jl. R.H. Soelaeman A. Kartadjoemena', 'Bogor Timur', 'Jawa Barat'),
(178, 'SD NEGERI KATULAMPA 2', 'Jl. Katulampa', 'Bogor Timur', 'Jawa Barat'),
(179, 'SD NEGERI KATULAMPA 5', 'Jalan Carita I Blok B5, Perumumahan Baranangsiang ', 'Bogor Timur', 'Jawa Barat'),
(180, 'SD NEGERI OTISTA', 'Jl. Otto Iskandardinata No. 78', 'Bogor Timur', 'Jawa Barat'),
(181, 'SD NEGERI PAJAJARAN', 'Jalan Raya Pajajaran No. 26', 'Bogor Timur', 'Jawa Barat'),
(182, 'SD NEGERI SINDANGRASA', 'Kp. Muara RT 004/09', 'Bogor Timur', 'Jawa Barat'),
(183, 'SD NEGERI SINDANGSARI 1', 'Jl. Lebak Kongsi Rt 003 Rw 007', 'Bogor Timur', 'Jawa Barat'),
(184, 'SD NEGERI SINDANGSARI 2', 'Jl. Lebak Kongsi Rt. 03 Rw. 07', 'Bogor Timur', 'Jawa Barat'),
(185, 'SD NEGERI TAJUR 1', 'Jl. Raya Tajur Gg. Bale Desa NO 12', 'Bogor Timur', 'Jawa Barat'),
(186, 'SD NEGERI TAJUR 2', 'Jl. Raya Tajur Gg. Bale Desa', 'Bogor Timur', 'Jawa Barat'),
(187, 'SD NEGERI TAJUR 3', 'Jl.raya Tajur, Gg.Tanuwijaya Rt.01/04', 'Bogor Timur', 'Jawa Barat'),
(188, 'SD PELANGI KASIH', 'Jl. Siliwangi No.51 Bogor', 'Bogor Timur', 'Jawa Barat'),
(189, 'SD PERTIWI', 'Jl. Sukasari III No. 4', 'Bogor Timur', 'Jawa Barat'),
(190, 'SD Sekolah Pintu Cerdas', 'Jl. Siliwangi No. 23 RT 002 RW 002', 'Bogor Timur', 'Jawa Barat'),
(191, 'SDIT AL KHAIRIYAH', 'Jl. Jagung No 14. Komplek IPB Kelurahan Barangsian', 'Bogor Timur', 'Jawa Barat'),
(192, 'SDIT BENING', 'Gg. Kurcaci, Kp. Cikondang. Baranangsiang Indah Bl', 'Bogor Timur', 'Jawa Barat'),
(193, 'SDN SUKASARI', 'Jl. Siliwangi No. 25', 'Bogor Timur', 'Jawa Barat'),
(194, 'SD CIPTA CENDIKIA', 'Bogor Baru Blok B1 No. 29', 'Bogor Utara', 'Jawa Barat'),
(195, 'SD N BANTARJATI 9', 'Jl. Dalurung No. 20 Bogor', 'Bogor Utara', 'Jawa Barat'),
(196, 'SD N CILUAR 1', 'Jl. BATARA Kp. Tarikolot Rt 01/04', 'Bogor Utara', 'Jawa Barat'),
(197, 'SD N KAUMSARI', 'Jl. Kaumsari Rt 02/05', 'Bogor Utara', 'Jawa Barat'),
(198, 'SD N KEDUNG HALANG 2', 'Jl. Pesantren No.4 Rt 01 / 06', 'Bogor Utara', 'Jawa Barat'),
(199, 'SD N TUNGGILIS', 'Jl. Kedunghalang Kp. Tunggilis Rt 04/13', 'Bogor Utara', 'Jawa Barat'),
(200, 'SD NEGERI BANTAR JATI 6', 'Jl.taweuran Raya No. 6 Perumnas Bantarjati Bogor', 'Bogor Utara', 'Jawa Barat'),
(201, 'SD NEGERI BANTARJATI 5 BOGOR', 'Jl. Ahmad Sobana (Bangbarung) Raya No. 49', 'Bogor Utara', 'Jawa Barat'),
(202, 'SD NEGERI BANTARJATI 7', 'Jl. Pamikul Raya Nomor 2', 'Bogor Utara', 'Jawa Barat'),
(203, 'SD NEGERI BANTARJATI 8', 'Jl. Pamikul Raya No.4 RT.2 RW.6', 'Bogor Utara', 'Jawa Barat'),
(204, 'SD NEGERI BANTARJATI I', 'Jl. Ceremai Ujung No. 70', 'Bogor Utara', 'Jawa Barat'),
(205, 'SD NEGERI BHAYANGKARI', 'Komplek Asrama Brimob KS.TUBUN RT.004 RW.007', 'Bogor Utara', 'Jawa Barat'),
(206, 'SD NEGERI BOGOR BARU', 'Jalan Lodaya Blok B.II No.22', 'Bogor Utara', 'Jawa Barat'),
(207, 'SD NEGERI CEGER 1', 'Jl. Flamboyan 2, Gg. Sekolah No 1 Rt/rw : 05/04', 'Bogor Utara', 'Jawa Barat'),
(208, 'SD NEGERI CIBULUH 1', 'Jl. K.S Tubun No.222', 'Bogor Utara', 'Jawa Barat'),
(209, 'SD NEGERI CIBULUH 2', 'ASRAMA BRIMOB KP KS TUBUN RT 06/09', 'Bogor Utara', 'Jawa Barat'),
(210, 'SD NEGERI CIBULUH 3', 'Jl. Mandala Rt 06/02 No. 38', 'Bogor Utara', 'Jawa Barat'),
(211, 'SD NEGERI CIBULUH 4', 'Jl. Ciburial RT 04/04', 'Bogor Utara', 'Jawa Barat'),
(212, 'SD NEGERI CIBULUH 5', 'Komp. Asrama Brimob Ks Tubun Rt 03/07', 'Bogor Utara', 'Jawa Barat'),
(213, 'SD NEGERI CIBULUH 6', 'Komplek Asrama Brimob Ks Tubun', 'Bogor Utara', 'Jawa Barat'),
(214, 'SD NEGERI CILUAR 2', 'Jl. Sukaraja No. 36', 'Bogor Utara', 'Jawa Barat'),
(215, 'SD NEGERI CILUAR 3', 'Jln. Sukaraja No. 40', 'Bogor Utara', 'Jawa Barat'),
(216, 'SD NEGERI CIMAHPAR 1', 'Jln.tumenggung Wiradiredja 105', 'Bogor Utara', 'Jawa Barat'),
(217, 'SD NEGERI CIMAHPAR 2', 'Jl. Tumenggung Wiradireja No. 107', 'Bogor Utara', 'Jawa Barat'),
(218, 'SD NEGERI CIMAHPAR 3', 'Jl. Guru Muchtar NO 1 RT.01/16', 'Bogor Utara', 'Jawa Barat'),
(219, 'SD NEGERI CIMAHPAR 4', 'Kp. Belentuk Rt 01 Rw 01', 'Bogor Utara', 'Jawa Barat'),
(220, 'SD NEGERI CIMAHPAR 5', 'Jl. Guru Muchtar RT 03 RW 04', 'Bogor Utara', 'Jawa Barat'),
(221, 'SD NEGERI CIPARIGI', 'Jl. Ciburial Rt. 04/04 No. 10', 'Bogor Utara', 'Jawa Barat'),
(222, 'SD NEGERI KAMPUNG SAWAH', 'Jl. Danau Bogor Raya No. 23', 'Bogor Utara', 'Jawa Barat'),
(223, 'SD NEGERI KEDUNG HALANG 1', 'Jl. Kedunghalang No. 06', 'Bogor Utara', 'Jawa Barat'),
(224, 'SD NEGERI KEDUNGHALANG 3', 'Jl. Pesantren RT 01/RW 06', 'Bogor Utara', 'Jawa Barat'),
(225, 'SD NEGERI NEGLASARI', 'Jl.lhokseumawe Asrama Brimob Ks.tubun Rt. 02/04', 'Bogor Utara', 'Jawa Barat'),
(226, 'SD NEGERI SELAAWI', 'Jln. Pangeran Sogiri No. 138 Rt. 06/04', 'Bogor Utara', 'Jawa Barat'),
(227, 'SD NEGERI SINDANGSARI', 'Jl. Pangeran Sogiri No. 376', 'Bogor Utara', 'Jawa Barat'),
(228, 'SD SEKOLAH ALAM BOGOR', 'Jl. Pangeran As-shogiri No. 150 Rt 01 Rw 04', 'Bogor Utara', 'Jawa Barat'),
(229, 'SDIT ALKAUTSAR', 'Jl. Ceremai Ujung', 'Bogor Utara', 'Jawa Barat'),
(230, 'SDIT Anak Shalih Bogor Islamic', 'Jl. Tumenggung Wiradiredja, Kp. Kebon Awi Rt 02/06', 'Bogor Utara', 'Jawa Barat'),
(231, 'SDN CEGER 2', 'Jl. Villa Citra Bantarjati RT. 03/11', 'Bogor Utara', 'Jawa Barat'),
(232, 'SDN KAWUNGLUWUK', 'Jl. Kresna II No. 20', 'Bogor Utara', 'Jawa Barat'),
(233, 'SDN KEDUNG HALANG 5', 'Jl Pemda Pangkalan 2', 'Bogor Utara', 'Jawa Barat'),
(234, 'SD BINA INSANI', 'Jl. Kh. Sholeh Iskandar', 'Tanah Sareal', 'Jawa Barat'),
(235, 'SD ISLAM TERPADU AT TAUFIQ', 'JL. CIMANGU PERMAI I', 'Tanah Sareal', 'Jawa Barat'),
(236, 'SD IT AL MUNAWAR BOGOR', 'JL. PEMUDA NO. 40', 'Tanah Sareal', 'Jawa Barat'),
(237, 'SD IT UTSMANIL HAKIM', 'Kp. Munjul RT 002 RW 006', 'Tanah Sareal', 'Jawa Barat'),
(238, 'SD KREATIVA', 'Jl Kranji Ujung No.71  Kel. Sukaresmi Kec. Tanah S', 'Tanah Sareal', 'Jawa Barat'),
(239, 'SD N KAYUMANIS 1', 'Jalan Pool Binamarga No.01 RT.001 RW.005', 'Tanah Sareal', 'Jawa Barat'),
(240, 'SD N KEBON PEDES 5', 'Jl. Kebon Pedes No.31', 'Tanah Sareal', 'Jawa Barat'),
(241, 'SD N KEDUNG BADAK 2', 'Jl. Kolonel Enjo Martadisastra No. 3', 'Tanah Sareal', 'Jawa Barat'),
(242, 'SD N KEDUNG JAYA 2', 'Jl Cimanggu Permai I No 32', 'Tanah Sareal', 'Jawa Barat'),
(243, 'SD N KEDUNG WARINGIN', 'Jalan Johar Gg. Masjid No 2 Rt 05 Rw 04', 'Tanah Sareal', 'Jawa Barat'),
(244, 'SD N KENCANA 2', 'Jl. Kebon Kelapa Rt 02/03', 'Tanah Sareal', 'Jawa Barat'),
(245, 'SD N KUKUPU 2', 'Kukupu Rt.04/08 , Kel.cibadak', 'Tanah Sareal', 'Jawa Barat'),
(246, 'SD N SITUPETE', 'Jl Sukadamai  , Tanah Sareal', 'Tanah Sareal', 'Jawa Barat'),
(247, 'SD NEGERI CIBADAK', 'Jl. KH Sholeh Iskandar, Kp. Kayumanis RT 04/01', 'Tanah Sareal', 'Jawa Barat'),
(248, 'SD NEGERI CIMANGGU', 'Jl. Perikanan Darat', 'Tanah Sareal', 'Jawa Barat'),
(249, 'SD NEGERI JULANG', 'Jl. Julang No. 5 Kota Bogor', 'Tanah Sareal', 'Jawa Barat'),
(250, 'SD NEGERI KEBON PEDES 1', 'Jl. Kebon Pedes No.65', 'Tanah Sareal', 'Jawa Barat'),
(251, 'SD NEGERI KEBON PEDES 3', 'Jl. Raya Kebon Pedes No. 31', 'Tanah Sareal', 'Jawa Barat'),
(252, 'SD NEGERI KEBON PEDES 7', 'Jl Nusa Indah No 18', 'Tanah Sareal', 'Jawa Barat'),
(253, 'SD NEGERI KEDUNG BADAK 1', 'Jl. Kol. Enjo Martadisastra Iii', 'Tanah Sareal', 'Jawa Barat'),
(254, 'SD NEGERI KEDUNG BADAK 3', 'Jl. BHAYANGKARA RAYA NO 33 A', 'Tanah Sareal', 'Jawa Barat'),
(255, 'SD NEGERI KEDUNG BADAK 4', 'Jl Portibi Cimanggu Permai 1', 'Tanah Sareal', 'Jawa Barat'),
(256, 'SD NEGERI KEDUNG JAYA 1', 'Jl.Cimanggu Permai 1 No.1 Kec Tanah Sareal Kota Bo', 'Tanah Sareal', 'Jawa Barat'),
(257, 'SD NEGERI KENCANA 1', 'Jl.Ahmad Syayani', 'Tanah Sareal', 'Jawa Barat'),
(258, 'SD NEGERI KENCANA 3', 'Bukit Cimanggu City Blok R.10  Kec. Tanah Sareal', 'Tanah Sareal', 'Jawa Barat'),
(259, 'SD NEGERI KUKUPU 1', 'Jl. Prapatan Rt 02 RW 02', 'Tanah Sareal', 'Jawa Barat'),
(260, 'SD NEGERI KUKUPU 3', 'Jln. Baru Kp. Seremped Kota Bogor', 'Tanah Sareal', 'Jawa Barat'),
(261, 'SD NEGERI SUKADAMAI 1', 'Situ Pete Pulo', 'Tanah Sareal', 'Jawa Barat'),
(262, 'SD NEGERI SUKADAMAI 2', 'Jl. Sukadamai Indah No. 5', 'Tanah Sareal', 'Jawa Barat'),
(263, 'SD NEGERI SUKARESMI', 'Jl. Kedung Halang Sentral', 'Tanah Sareal', 'Jawa Barat'),
(264, 'SD NEGERI TANAH SAREAL 1 BOGOR', 'Jl..A.Yani Blk.No. 56 Bogor', 'Tanah Sareal', 'Jawa Barat'),
(265, 'SD NEGERI TANAH SAREAL 4', 'Jl.mirah Delima No.01 Pabaton Indah', 'Tanah Sareal', 'Jawa Barat'),
(266, 'SD SENTANA MONTESORI SCHOOL', 'Jalan Beo No. 9', 'Tanah Sareal', 'Jawa Barat'),
(267, 'SD SINAR INDONESIA', 'Jl. Kukupu No 72a', 'Tanah Sareal', 'Jawa Barat'),
(268, 'SD YAPIS', 'Jl Ahmad Yani blk. 48 Kecamatan Tanah Sareal', 'Tanah Sareal', 'Jawa Barat'),
(269, 'SDIT AL IKHLAS', 'Perumahan Tamansari Persada Blok E RT. 003 RW. 015', 'Tanah Sareal', 'Jawa Barat'),
(270, 'SDIT AL-AKHYAR', 'KP. KALIMURNI RT 001 RW 001', 'Tanah Sareal', 'Jawa Barat'),
(271, 'SDIT AL-AZHHAR', 'Jl. Ahmad Yani I No. 21 RT. 03/04', 'Tanah Sareal', 'Jawa Barat'),
(272, 'SDIT AL-YASMIN 2', 'JL. CILEBUT JEMBATAN 01 RT 001 RW 004', 'Tanah Sareal', 'Jawa Barat'),
(273, 'SDIT AR ROHMANIYAH', 'Jln Kh Ahmad Syahyani Rt 3/5, Mekarwangi, Tanah Sa', 'Tanah Sareal', 'Jawa Barat'),
(274, 'SDIT BINA ANAK INDONESIA', 'Kampung Kali Murni RT 002 RW 001', 'Tanah Sareal', 'Jawa Barat'),
(275, 'SDITA eL MAMUR', 'JL. CIMANGGU BARATA NO. 02', 'Tanah Sareal', 'Jawa Barat'),
(276, 'SDN BUBULAK', 'Jl. Bubulak No.47', 'Tanah Sareal', 'Jawa Barat'),
(277, 'SDN KAYUMANIS 2', 'Jl. Sumurwangi', 'Tanah Sareal', 'Jawa Barat'),
(278, 'SDN PONDOK RUMPUT', 'Jalan Pondok Rumput No.44', 'Tanah Sareal', 'Jawa Barat'),
(279, 'SDN SUKADAMAI 3', 'Jalan Perdana No. 8 Budi Agung', 'Tanah Sareal', 'Jawa Barat'),
(280, 'SDS BINA TUNAS CEMERLANG', 'JLN RE MARTADINATA NO 8A', 'Tanah Sareal', 'Jawa Barat'),
(281, 'SDS IT ABDULLAH BIN NUH (SDIT ', 'JL. RAYA TAMAN CIMANGGU RT 02 RW 015', 'Tanah Sareal', 'Jawa Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_masuk`
--

CREATE TABLE `siswa_masuk` (
  `no` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `ttl` varchar(35) NOT NULL,
  `masuk_kelas` varchar(15) NOT NULL,
  `tahun` varchar(25) NOT NULL,
  `asal_sekolah` varchar(32) NOT NULL,
  `nisn` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `siswa_masuk`
--

INSERT INTO `siswa_masuk` (`no`, `no_urut`, `nama_siswa`, `ttl`, `masuk_kelas`, `tahun`, `asal_sekolah`, `nisn`) VALUES
(0, 3, 'Shalomita Keni Christina Sirait ', 'Sukabumi, 04 April 2015', '1 (Satu)', '2023', 'SD HARAPAN NEGERI', 98842),
(0, 1, 'Diah ', 'Venus, 12 Juni 2003', '1 (Satu)', '2005', 'Dimana aja', 123456),
(0, 1, 'Zaki Akbar', 'Bogor, 20 Januari 2002', '1 (Satu)', '2005', 'SDN Katulampa', 1234554),
(0, 2, 'Cahya Ivan Marshall, G.B.Lk', 'Venus, 12 Juni 2001 SM', '1 (Satu)', '2004 SM', 'Gak tau', 12345678),
(0, 2, 'Akbar', 'Planet Citeureup, 12 Agustus 2002', '1 (Satu)', '2006', 'SDN Citeurup', 123456789),
(0, 3, 'Apa', 'Bogor, 14 April 2014', '1 (Satu)', '2023', 'SD HARAPAN NEGERI', 2134142432),
(0, 3, 'Ziapa Aja', 'Bogor, 20 Januari 1998', '2 (Dua)', '2023', 'SD HARAPAN NEGERI', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan_sekolah`
--

CREATE TABLE `tujuan_sekolah` (
  `no_urut` int(11) NOT NULL,
  `tujuan_sekolah` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tujuan_sekolah`
--

INSERT INTO `tujuan_sekolah` (`no_urut`, `tujuan_sekolah`, `kota`, `provinsi`) VALUES
(1, 'SD AL GHAZALY', 'Kota Bogor Tengah', 'Jawa Barat'),
(2, 'SD AL GHAZALY', 'Kota Bogor Tengah', 'Jawa Barat'),
(3, 'SD BPK PENABUR', 'Kota Bogor Tengah', 'Jawa Barat'),
(4, 'SD BUDI MULIA', 'Kota Bogor Tengah', 'Jawa Barat'),
(5, 'SD DIAN HARAPAN', 'Kota Bogor Tengah', 'Jawa Barat'),
(6, 'SD KRISTEN SATU BAKTI', 'Kota Bogor Tengah', 'Jawa Barat'),
(7, 'SD N BARANANGSIANG', 'Kota Bogor Tengah', 'Jawa Barat'),
(8, 'SD N DEWI SARTIKA 1', 'Kota Bogor Tengah', 'Jawa Barat'),
(9, 'SD N DEWI SARTIKA 2', 'Kota Bogor Tengah', 'Jawa Barat'),
(10, 'SD N DEWI SARTIKA 3', 'Kota Bogor Tengah', 'Jawa Barat'),
(11, 'SD N GUNUNG GEDE', 'Kota Bogor Tengah', 'Jawa Barat'),
(12, 'SD N KAMPUNG RAMBUTAN', 'Kota Bogor Tengah', 'Jawa Barat'),
(13, 'SD N KEBON KOPI', 'Kota Bogor Tengah', 'Jawa Barat'),
(14, 'SD N MALABAR', 'Kota Bogor Tengah', 'Jawa Barat'),
(15, 'SD N PANARAGAN 3 BOGOR', 'Kota Bogor Tengah', 'Jawa Barat'),
(16, 'SD N PAPANDAYAN', 'Kota Bogor Tengah', 'Jawa Barat'),
(17, 'SD N PENGADILAN 1 BOGOR', 'Kota Bogor Tengah', 'Jawa Barat'),
(18, 'SD N PENGADILAN 2', 'Kota Bogor Tengah', 'Jawa Barat'),
(19, 'SD N PENGADILAN 3', 'Kota Bogor Tengah', 'Jawa Barat'),
(20, 'SD N PERWIRA', 'Kota Bogor Tengah', 'Jawa Barat'),
(21, 'SD N SEMPUR KIDUL', 'Kota Bogor Tengah', 'Jawa Barat'),
(22, 'SD N TEGALLEGA 1', 'Kota Bogor Tengah', 'Jawa Barat'),
(23, 'SD N TEGALLEGA 2', 'Kota Bogor Tengah', 'Jawa Barat'),
(24, 'SD NEGERI BABAKAN', 'Kota Bogor Tengah', 'Jawa Barat'),
(25, 'SD NEGERI CIMANGGU KECIL', 'Kota Bogor Tengah', 'Jawa Barat'),
(26, 'SD NEGERI GANG AUT', 'Kota Bogor Tengah', 'Jawa Barat'),
(27, 'SD NEGERI PABRIK ES I', 'Kota Bogor Tengah', 'Jawa Barat'),
(28, 'SD NEGERI PANARAGAN 1', 'Kota Bogor Tengah', 'Jawa Barat'),
(29, 'SD NEGERI PANARAGAN 2', 'Kota Bogor Tengah', 'Jawa Barat'),
(30, 'SD NEGERI PANARAGAN KIDUL BOGO', 'Kota Bogor Tengah', 'Jawa Barat'),
(31, 'SD NEGERI PENGADILAN 5', 'Kota Bogor Tengah', 'Jawa Barat'),
(32, 'SD NEGERI POLISI 1', 'Kota Bogor Tengah', 'Jawa Barat'),
(33, 'SD NEGERI POLISI 4', 'Kota Bogor Tengah', 'Jawa Barat'),
(34, 'SD NEGERI POLISI 5', 'Kota Bogor Tengah', 'Jawa Barat'),
(35, 'SD NEGERI SEMPUR KALER', 'Kota Bogor Tengah', 'Jawa Barat'),
(36, 'SD NEGERI SINDANGSARI (BOTENG)', 'Kota Bogor Tengah', 'Jawa Barat'),
(37, 'SD REGINA PACIS', 'Kota Bogor Tengah', 'Jawa Barat'),
(38, 'SD TAMANSISWA', 'Kota Bogor Tengah', 'Jawa Barat'),
(39, 'SDN EMPANG 1', 'Kota Bogor Tengah', 'Jawa Barat'),
(40, 'SDN EMPANG 2', 'Kota Bogor Tengah', 'Jawa Barat'),
(41, 'SDN POLISI 2', 'Kota Bogor Tengah', 'Jawa Barat'),
(42, 'SDN RODA', 'Kota Bogor Tengah', 'Jawa Barat'),
(43, 'SD AL IRSYAD ISLAMYYAH', 'Kota Bogor Selatan', 'Jawa Barat'),
(44, 'SD AL-AZHAR SYIFA BUDI', 'Kota Bogor Selatan', 'Jawa Barat'),
(45, 'SD ANANDA', 'Kota Bogor Selatan', 'Jawa Barat'),
(46, 'SD HIGHSCOPE INDONESIA RANCAMA', 'Kota Bogor Selatan', 'Jawa Barat'),
(47, 'SD IT AL QUDS', 'Kota Bogor Selatan', 'Jawa Barat'),
(48, 'SD Kinderfield Bogor', 'Kota Bogor Selatan', 'Jawa Barat'),
(49, 'SD KRISTEN TUNAS HARAPAN', 'Kota Bogor Selatan', 'Jawa Barat'),
(50, 'SD MARDI WALUYA', 'Kota Bogor Selatan', 'Jawa Barat'),
(51, 'SD MUHAMMADIYAH', 'Kota Bogor Selatan', 'Jawa Barat'),
(52, 'SD N BATUTULIS 3', 'Kota Bogor Selatan', 'Jawa Barat'),
(53, 'SD N CIBEUREUM 1', 'Kota Bogor Selatan', 'Jawa Barat'),
(54, 'SD N CIPAKU 1', 'Kota Bogor Selatan', 'Jawa Barat'),
(55, 'SD N CIPAKU 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(56, 'SD N CIRANJANG', 'Kota Bogor Selatan', 'Jawa Barat'),
(57, 'SD N KERTAMAYA', 'Kota Bogor Selatan', 'Jawa Barat'),
(58, 'SD N LAWANG GINTUNG 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(59, 'SD N LAWANG GINTUNG 4', 'Kota Bogor Selatan', 'Jawa Barat'),
(60, 'SD N MUARASARI 1', 'Kota Bogor Selatan', 'Jawa Barat'),
(61, 'SD N MUARASARI 3', 'Kota Bogor Selatan', 'Jawa Barat'),
(62, 'SD N MULYAHARJA 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(63, 'SD N MULYAHARJA I', 'Kota Bogor Selatan', 'Jawa Barat'),
(64, 'SD N PABUARAN', 'Kota Bogor Selatan', 'Jawa Barat'),
(65, 'SD N PAKUAN', 'Kota Bogor Selatan', 'Jawa Barat'),
(66, 'SD N PAMOYANAN 3', 'Kota Bogor Selatan', 'Jawa Barat'),
(67, 'SD N RANCAMAYA 1', 'Kota Bogor Selatan', 'Jawa Barat'),
(68, 'SD N RANCAMAYA 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(69, 'SD NEGERI BATUTULIS 1', 'Kota Bogor Selatan', 'Jawa Barat'),
(70, 'SD NEGERI BATUTULIS 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(71, 'SD NEGERI BOJONG KERTA', 'Kota Bogor Selatan', 'Jawa Barat'),
(72, 'SD NEGERI BONDONGAN', 'Kota Bogor Selatan', 'Jawa Barat'),
(73, 'SD NEGERI CIBEUREUM 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(74, 'SD NEGERI CIBEUREUM 4', 'Kota Bogor Selatan', 'Jawa Barat'),
(75, 'SD NEGERI CIKARET 1', 'Kota Bogor Selatan', 'Jawa Barat'),
(76, 'SD NEGERI CIKARET 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(77, 'SD NEGERI CIPAKU 4', 'Kota Bogor Selatan', 'Jawa Barat'),
(78, 'SD NEGERI CIPAKU PERUMDA', 'Kota Bogor Selatan', 'Jawa Barat'),
(79, 'SD NEGERI GENTENG', 'Kota Bogor Selatan', 'Jawa Barat'),
(80, 'SD NEGERI HARJASARI I', 'Kota Bogor Selatan', 'Jawa Barat'),
(81, 'SD NEGERI HARJASARI II', 'Kota Bogor Selatan', 'Jawa Barat'),
(82, 'SD NEGERI LAWANG GINTUNG 1', 'Kota Bogor Selatan', 'Jawa Barat'),
(83, 'SD NEGERI LAYUNGSARI 1', 'Kota Bogor Selatan', 'Jawa Barat'),
(84, 'SD NEGERI LAYUNGSARI 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(85, 'SD NEGERI MUARASARI 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(86, 'SD NEGERI PAMOYANAN 1', 'Kota Bogor Selatan', 'Jawa Barat'),
(87, 'SD NEGERI PAMOYANAN 2', 'Kota Bogor Selatan', 'Jawa Barat'),
(88, 'SD NEGERI RANGGA MEKAR', 'Kota Bogor Selatan', 'Jawa Barat'),
(89, 'SD PERWANIDA', 'Kota Bogor Selatan', 'Jawa Barat'),
(90, 'SD S MARDI YUANA', 'Kota Bogor Selatan', 'Jawa Barat'),
(91, 'SD SRIKANDI', 'Kota Bogor Selatan', 'Jawa Barat'),
(92, 'SDIT BIRRU WATTAQWA', 'Kota Bogor Selatan', 'Jawa Barat'),
(93, 'SDIT NURUL FATA', 'Kota Bogor Selatan', 'Jawa Barat'),
(94, 'SDIT PERMATA BUNDA', 'Kota Bogor Selatan', 'Jawa Barat'),
(95, 'SD ALAM AL GIVA', 'Kota Bogor Barat', 'Jawa Barat'),
(96, 'SD ALAM CENDEKIA', 'Kota Bogor Barat', 'Jawa Barat'),
(97, 'SD CAUSA PRIMA', 'Kota Bogor Barat', 'Jawa Barat'),
(98, 'SD DHARMA IBU', 'Kota Bogor Barat', 'Jawa Barat'),
(99, 'SD INSAN KAMIL', 'Kota Bogor Barat', 'Jawa Barat'),
(100, 'SD ISLAM AL MUSTARIH', 'Kota Bogor Barat', 'Jawa Barat'),
(101, 'SD ISLAM TERPADU ALIYA', 'Kota Bogor Barat', 'Jawa Barat'),
(102, 'SD IT BUNDA SYAHIR', 'Kota Bogor Barat', 'Jawa Barat'),
(103, 'SD IT ZAID BIN TSABIT', 'Kota Bogor Barat', 'Jawa Barat'),
(104, 'SD N BALUNGBANG JAYA 2', 'Kota Bogor Barat', 'Jawa Barat'),
(105, 'SD N BALUNGBANG JAYA 3', 'Kota Bogor Barat', 'Jawa Barat'),
(106, 'SD N BUBULAK 2', 'Kota Bogor Barat', 'Jawa Barat'),
(107, 'SD N CEMPLANG', 'Kota Bogor Barat', 'Jawa Barat'),
(108, 'SD N CIBALAGUNG 2', 'Kota Bogor Barat', 'Jawa Barat'),
(109, 'SD N CIBALAGUNG 3', 'Kota Bogor Barat', 'Jawa Barat'),
(110, 'SD N CIBALAGUNG 4', 'Kota Bogor Barat', 'Jawa Barat'),
(111, 'SD N CIBALAGUNG 5', 'Kota Bogor Barat', 'Jawa Barat'),
(112, 'SD N CIJAHE CURUG', 'Kota Bogor Barat', 'Jawa Barat'),
(113, 'SD N CILENDEK 4', 'Kota Bogor Barat', 'Jawa Barat'),
(114, 'SD N CILENDEK I', 'Kota Bogor Barat', 'Jawa Barat'),
(115, 'SD N CILENDEK TIMUR 2', 'Kota Bogor Barat', 'Jawa Barat'),
(116, 'SD N CURUG 3', 'Kota Bogor Barat', 'Jawa Barat'),
(117, 'SD N LOJI 2', 'Kota Bogor Barat', 'Jawa Barat'),
(118, 'SD N LOJI 3', 'Kota Bogor Barat', 'Jawa Barat'),
(119, 'SD N MARGAJAYA 4', 'Kota Bogor Barat', 'Jawa Barat'),
(120, 'SD N MERDEKA 1', 'Kota Bogor Barat', 'Jawa Barat'),
(121, 'SD N NEGLASARI BOGOR', 'Kota Bogor Barat', 'Jawa Barat'),
(122, 'SD N PABUARAN CILENDEK', 'Kota Bogor Barat', 'Jawa Barat'),
(123, 'SD N SELAKOPI', 'Kota Bogor Barat', 'Jawa Barat'),
(124, 'SD N SEMERU 1', 'Kota Bogor Barat', 'Jawa Barat'),
(125, 'SD N SINDANG BARANG 3', 'Kota Bogor Barat', 'Jawa Barat'),
(126, 'SD N SINDANGBARANG 1', 'Kota Bogor Barat', 'Jawa Barat'),
(127, 'SD N SITU GEDE 2', 'Kota Bogor Barat', 'Jawa Barat'),
(128, 'SD NEGERI BALUNGBANG JAYA 1', 'Kota Bogor Barat', 'Jawa Barat'),
(129, 'SD NEGERI BUBULAK 1', 'Kota Bogor Barat', 'Jawa Barat'),
(130, 'SD NEGERI BUBULAK 3', 'Kota Bogor Barat', 'Jawa Barat'),
(131, 'SD NEGERI CIBALAGUNG 1', 'Kota Bogor Barat', 'Jawa Barat'),
(132, 'SD NEGERI CILENDEK 2', 'Kota Bogor Barat', 'Jawa Barat'),
(133, 'SD NEGERI CILENDEK TIMUR 1', 'Kota Bogor Barat', 'Jawa Barat'),
(134, 'SD NEGERI GUNUNG BATU 1', 'Kota Bogor Barat', 'Jawa Barat'),
(135, 'SD NEGERI LOJI I', 'Kota Bogor Barat', 'Jawa Barat'),
(136, 'SD NEGERI MARGAJAYA 1', 'Kota Bogor Barat', 'Jawa Barat'),
(137, 'SD NEGERI MARGAJAYA 2', 'Kota Bogor Barat', 'Jawa Barat'),
(138, 'SD NEGERI MARGAJAYA 3', 'Kota Bogor Barat', 'Jawa Barat'),
(139, 'SD NEGERI MENTENG', 'Kota Bogor Barat', 'Jawa Barat'),
(140, 'SD NEGERI SEMERU 5', 'Kota Bogor Barat', 'Jawa Barat'),
(141, 'SD NEGERI SEMERU 6', 'Kota Bogor Barat', 'Jawa Barat'),
(142, 'SD NEGERI SEMPLAK 1', 'Kota Bogor Barat', 'Jawa Barat'),
(143, 'SD NEGERI SEMPLAK 2', 'Kota Bogor Barat', 'Jawa Barat'),
(144, 'SD NEGERI SINDANG BARANG 2', 'Kota Bogor Barat', 'Jawa Barat'),
(145, 'SD NEGERI SINDANGRASA', 'Kota Bogor Barat', 'Jawa Barat'),
(146, 'SD NEGERI SITU GEDE 5', 'Kota Bogor Barat', 'Jawa Barat'),
(147, 'SD NEGERI SITUGEDE 3', 'Kota Bogor Barat', 'Jawa Barat'),
(148, 'SD NEGERI SITUGEDE 4', 'Kota Bogor Barat', 'Jawa Barat'),
(149, 'SD PLUS BINA BANGSA SEJAHTERA', 'Kota Bogor Barat', 'Jawa Barat'),
(150, 'SD RIMBA PUTRA', 'Kota Bogor Barat', 'Jawa Barat'),
(151, 'SDIT AL HIKMAH', 'Kota Bogor Barat', 'Jawa Barat'),
(152, 'SDIT AL-YASMIN', 'Kota Bogor Barat', 'Jawa Barat'),
(153, 'SDIT BUNAYA', 'Kota Bogor Barat', 'Jawa Barat'),
(154, 'SDIT INSANTAMA', 'Kota Bogor Barat', 'Jawa Barat'),
(155, 'SDIT KEMUNING', 'Kota Bogor Barat', 'Jawa Barat'),
(156, 'SDIT QA BAITUSSALAAM', 'Kota Bogor Barat', 'Jawa Barat'),
(157, 'SDIT SHOLAHUDDIN', 'Kota Bogor Barat', 'Jawa Barat'),
(158, 'SDN CURUG 1', 'Kota Bogor Barat', 'Jawa Barat'),
(159, 'SDN GUNUNG BATU 2', 'Kota Bogor Barat', 'Jawa Barat'),
(160, 'SDN PURBASARI', 'Kota Bogor Barat', 'Jawa Barat'),
(161, 'SDN SINDANG BARANG 4', 'Kota Bogor Barat', 'Jawa Barat'),
(162, 'SDN SITU GEDE I', 'Kota Bogor Barat', 'Jawa Barat'),
(163, 'SD ADVENT', 'Kota Bogor Timur', 'Jawa Barat'),
(164, 'SD AMAL KASIH', 'Kota Bogor Timur', 'Jawa Barat'),
(165, 'SD ISLAM IBNU HAJAR', 'Kota Bogor Timur', 'Jawa Barat'),
(166, 'SD KESATUAN', 'Kota Bogor Timur', 'Jawa Barat'),
(167, 'SD N BABAKAN ASEM', 'Kota Bogor Timur', 'Jawa Barat'),
(168, 'SD N CIHEULEUT 1', 'Kota Bogor Timur', 'Jawa Barat'),
(169, 'SD N DUTA PAKUAN', 'Kota Bogor Timur', 'Jawa Barat'),
(170, 'SD N KATULAMPA 1', 'Kota Bogor Timur', 'Jawa Barat'),
(171, 'SD N KATULAMPA 3', 'Kota Bogor Timur', 'Jawa Barat'),
(172, 'SD NEGERI BANGKA 3', 'Kota Bogor Timur', 'Jawa Barat'),
(173, 'SD NEGERI BANTARKEMANG 1', 'Kota Bogor Timur', 'Jawa Barat'),
(174, 'SD NEGERI BANTARKEMANG 2', 'Kota Bogor Timur', 'Jawa Barat'),
(175, 'SD NEGERI BANTARKEMANG 3', 'Kota Bogor Timur', 'Jawa Barat'),
(176, 'SD NEGERI BANTARKEMANG 6', 'Kota Bogor Timur', 'Jawa Barat'),
(177, 'SD NEGERI CIHEULEUT 2', 'Kota Bogor Timur', 'Jawa Barat'),
(178, 'SD NEGERI KATULAMPA 2', 'Kota Bogor Timur', 'Jawa Barat'),
(179, 'SD NEGERI KATULAMPA 5', 'Kota Bogor Timur', 'Jawa Barat'),
(180, 'SD NEGERI OTISTA', 'Kota Bogor Timur', 'Jawa Barat'),
(181, 'SD NEGERI PAJAJARAN', 'Kota Bogor Timur', 'Jawa Barat'),
(182, 'SD NEGERI SINDANGRASA', 'Kota Bogor Timur', 'Jawa Barat'),
(183, 'SD NEGERI SINDANGSARI 1', 'Kota Bogor Timur', 'Jawa Barat'),
(184, 'SD NEGERI SINDANGSARI 2', 'Kota Bogor Timur', 'Jawa Barat'),
(185, 'SD NEGERI TAJUR 1', 'Kota Bogor Timur', 'Jawa Barat'),
(186, 'SD NEGERI TAJUR 2', 'Kota Bogor Timur', 'Jawa Barat'),
(187, 'SD NEGERI TAJUR 3', 'Kota Bogor Timur', 'Jawa Barat'),
(188, 'SD PELANGI KASIH', 'Kota Bogor Timur', 'Jawa Barat'),
(189, 'SD PERTIWI', 'Kota Bogor Timur', 'Jawa Barat'),
(190, 'SD Sekolah Pintu Cerdas', 'Kota Bogor Timur', 'Jawa Barat'),
(191, 'SDIT AL KHAIRIYAH', 'Kota Bogor Timur', 'Jawa Barat'),
(192, 'SDIT BENING', 'Kota Bogor Timur', 'Jawa Barat'),
(193, 'SDN SUKASARI', 'Kota Bogor Timur', 'Jawa Barat'),
(194, 'SD CIPTA CENDIKIA', 'Kota Bogor Utara', 'Jawa Barat'),
(195, 'SD N BANTARJATI 9', 'Kota Bogor Utara', 'Jawa Barat'),
(196, 'SD N CILUAR 1', 'Kota Bogor Utara', 'Jawa Barat'),
(197, 'SD N KAUMSARI', 'Kota Bogor Utara', 'Jawa Barat'),
(198, 'SD N KEDUNG HALANG 2', 'Kota Bogor Utara', 'Jawa Barat'),
(199, 'SD N TUNGGILIS', 'Kota Bogor Utara', 'Jawa Barat'),
(200, 'SD NEGERI BANTAR JATI 6', 'Kota Bogor Utara', 'Jawa Barat'),
(201, 'SD NEGERI BANTARJATI 5 BOGOR', 'Kota Bogor Utara', 'Jawa Barat'),
(202, 'SD NEGERI BANTARJATI 7', 'Kota Bogor Utara', 'Jawa Barat'),
(203, 'SD NEGERI BANTARJATI 8', 'Kota Bogor Utara', 'Jawa Barat'),
(204, 'SD NEGERI BANTARJATI I', 'Kota Bogor Utara', 'Jawa Barat'),
(205, 'SD NEGERI BHAYANGKARI', 'Kota Bogor Utara', 'Jawa Barat'),
(206, 'SD NEGERI BOGOR BARU', 'Kota Bogor Utara', 'Jawa Barat'),
(207, 'SD NEGERI CEGER 1', 'Kota Bogor Utara', 'Jawa Barat'),
(208, 'SD NEGERI CIBULUH 1', 'Kota Bogor Utara', 'Jawa Barat'),
(209, 'SD NEGERI CIBULUH 2', 'Kota Bogor Utara', 'Jawa Barat'),
(210, 'SD NEGERI CIBULUH 3', 'Kota Bogor Utara', 'Jawa Barat'),
(211, 'SD NEGERI CIBULUH 4', 'Kota Bogor Utara', 'Jawa Barat'),
(212, 'SD NEGERI CIBULUH 5', 'Kota Bogor Utara', 'Jawa Barat'),
(213, 'SD NEGERI CIBULUH 6', 'Kota Bogor Utara', 'Jawa Barat'),
(214, 'SD NEGERI CILUAR 2', 'Kota Bogor Utara', 'Jawa Barat'),
(215, 'SD NEGERI CILUAR 3', 'Kota Bogor Utara', 'Jawa Barat'),
(216, 'SD NEGERI CIMAHPAR 1', 'Kota Bogor Utara', 'Jawa Barat'),
(217, 'SD NEGERI CIMAHPAR 2', 'Kota Bogor Utara', 'Jawa Barat'),
(218, 'SD NEGERI CIMAHPAR 3', 'Kota Bogor Utara', 'Jawa Barat'),
(219, 'SD NEGERI CIMAHPAR 4', 'Kota Bogor Utara', 'Jawa Barat'),
(220, 'SD NEGERI CIMAHPAR 5', 'Kota Bogor Utara', 'Jawa Barat'),
(221, 'SD NEGERI CIPARIGI', 'Kota Bogor Utara', 'Jawa Barat'),
(222, 'SD NEGERI KAMPUNG SAWAH', 'Kota Bogor Utara', 'Jawa Barat'),
(223, 'SD NEGERI KEDUNG HALANG 1', 'Kota Bogor Utara', 'Jawa Barat'),
(224, 'SD NEGERI KEDUNGHALANG 3', 'Kota Bogor Utara', 'Jawa Barat'),
(225, 'SD NEGERI NEGLASARI', 'Kota Bogor Utara', 'Jawa Barat'),
(226, 'SD NEGERI SELAAWI', 'Kota Bogor Utara', 'Jawa Barat'),
(227, 'SD NEGERI SINDANGSARI', 'Kota Bogor Utara', 'Jawa Barat'),
(228, 'SD SEKOLAH ALAM BOGOR', 'Kota Bogor Utara', 'Jawa Barat'),
(229, 'SDIT ALKAUTSAR', 'Kota Bogor Utara', 'Jawa Barat'),
(230, 'SDIT Anak Shalih Bogor Islamic', 'Kota Bogor Utara', 'Jawa Barat'),
(231, 'SDN CEGER 2', 'Kota Bogor Utara', 'Jawa Barat'),
(232, 'SDN KAWUNGLUWUK', 'Kota Bogor Utara', 'Jawa Barat'),
(233, 'SDN KEDUNG HALANG 5', 'Kota Bogor Utara', 'Jawa Barat'),
(234, 'SD BINA INSANI', 'Tanah Sareal', 'Jawa Barat'),
(235, 'SD ISLAM TERPADU AT TAUFIQ', 'Tanah Sareal', 'Jawa Barat'),
(236, 'SD IT AL MUNAWAR BOGOR', 'Tanah Sareal', 'Jawa Barat'),
(237, 'SD IT UTSMANIL HAKIM', 'Tanah Sareal', 'Jawa Barat'),
(238, 'SD KREATIVA', 'Tanah Sareal', 'Jawa Barat'),
(239, 'SD N KAYUMANIS 1', 'Tanah Sareal', 'Jawa Barat'),
(240, 'SD N KEBON PEDES 5', 'Tanah Sareal', 'Jawa Barat'),
(241, 'SD N KEDUNG BADAK 2', 'Tanah Sareal', 'Jawa Barat'),
(242, 'SD N KEDUNG JAYA 2', 'Tanah Sareal', 'Jawa Barat'),
(243, 'SD N KEDUNG WARINGIN', 'Tanah Sareal', 'Jawa Barat'),
(244, 'SD N KENCANA 2', 'Tanah Sareal', 'Jawa Barat'),
(245, 'SD N KUKUPU 2', 'Tanah Sareal', 'Jawa Barat'),
(246, 'SD N SITUPETE', 'Tanah Sareal', 'Jawa Barat'),
(247, 'SD NEGERI CIBADAK', 'Tanah Sareal', 'Jawa Barat'),
(248, 'SD NEGERI CIMANGGU', 'Tanah Sareal', 'Jawa Barat'),
(249, 'SD NEGERI JULANG', 'Tanah Sareal', 'Jawa Barat'),
(250, 'SD NEGERI KEBON PEDES 1', 'Tanah Sareal', 'Jawa Barat'),
(251, 'SD NEGERI KEBON PEDES 3', 'Tanah Sareal', 'Jawa Barat'),
(252, 'SD NEGERI KEBON PEDES 7', 'Tanah Sareal', 'Jawa Barat'),
(253, 'SD NEGERI KEDUNG BADAK 1', 'Tanah Sareal', 'Jawa Barat'),
(254, 'SD NEGERI KEDUNG BADAK 3', 'Tanah Sareal', 'Jawa Barat'),
(255, 'SD NEGERI KEDUNG BADAK 4', 'Tanah Sareal', 'Jawa Barat'),
(256, 'SD NEGERI KEDUNG JAYA 1', 'Tanah Sareal', 'Jawa Barat'),
(257, 'SD NEGERI KENCANA 1', 'Tanah Sareal', 'Jawa Barat'),
(258, 'SD NEGERI KENCANA 3', 'Tanah Sareal', 'Jawa Barat'),
(259, 'SD NEGERI KUKUPU 1', 'Tanah Sareal', 'Jawa Barat'),
(260, 'SD NEGERI KUKUPU 3', 'Tanah Sareal', 'Jawa Barat'),
(261, 'SD NEGERI SUKADAMAI 1', 'Tanah Sareal', 'Jawa Barat'),
(262, 'SD NEGERI SUKADAMAI 2', 'Tanah Sareal', 'Jawa Barat'),
(263, 'SD NEGERI SUKARESMI', 'Tanah Sareal', 'Jawa Barat'),
(264, 'SD NEGERI TANAH SAREAL 1 BOGOR', 'Tanah Sareal', 'Jawa Barat'),
(265, 'SD NEGERI TANAH SAREAL 4', 'Tanah Sareal', 'Jawa Barat'),
(266, 'SD SENTANA MONTESORI SCHOOL', 'Tanah Sareal', 'Jawa Barat'),
(267, 'SD SINAR INDONESIA', 'Tanah Sareal', 'Jawa Barat'),
(268, 'SD YAPIS', 'Tanah Sareal', 'Jawa Barat'),
(269, 'SDIT AL IKHLAS', 'Tanah Sareal', 'Jawa Barat'),
(270, 'SDIT AL-AKHYAR', 'Tanah Sareal', 'Jawa Barat'),
(271, 'SDIT AL-AZHHAR', 'Tanah Sareal', 'Jawa Barat'),
(272, 'SDIT AL-YASMIN 2', 'Tanah Sareal', 'Jawa Barat'),
(273, 'SDIT AR ROHMANIYAH', 'Tanah Sareal', 'Jawa Barat'),
(274, 'SDIT BINA ANAK INDONESIA', 'Tanah Sareal', 'Jawa Barat'),
(275, 'SDITA eL MAMUR', 'Tanah Sareal', 'Jawa Barat'),
(276, 'SDN BUBULAK', 'Tanah Sareal', 'Jawa Barat'),
(277, 'SDN KAYUMANIS 2', 'Tanah Sareal', 'Jawa Barat'),
(278, 'SDN PONDOK RUMPUT', 'Tanah Sareal', 'Jawa Barat'),
(279, 'SDN SUKADAMAI 3', 'Tanah Sareal', 'Jawa Barat'),
(280, 'SDS BINA TUNAS CEMERLANG', 'Tanah Sareal', 'Jawa Barat'),
(281, 'SDS IT ABDULLAH BIN NUH (SDIT ', 'Tanah Sareal', 'Jawa Barat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_mutasi`
--
ALTER TABLE `data_mutasi`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `format_no_surat`
--
ALTER TABLE `format_no_surat`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `kepala_pejabat`
--
ALTER TABLE `kepala_pejabat`
  ADD PRIMARY KEY (`no_urut`),
  ADD KEY `id_login` (`id_login`) USING BTREE;

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `mutasi_masuk`
--
ALTER TABLE `mutasi_masuk`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id_pejabat`),
  ADD KEY `id_login` (`id_login`);

--
-- Indeks untuk tabel `permintaan_mutasi`
--
ALTER TABLE `permintaan_mutasi`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_login` (`id_login`);

--
-- Indeks untuk tabel `sekertaris`
--
ALTER TABLE `sekertaris`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `siswa_masuk`
--
ALTER TABLE `siswa_masuk`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `FOREIGN` (`no_urut`) USING BTREE;

--
-- Indeks untuk tabel `tujuan_sekolah`
--
ALTER TABLE `tujuan_sekolah`
  ADD PRIMARY KEY (`no_urut`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `format_no_surat`
--
ALTER TABLE `format_no_surat`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kepala_pejabat`
--
ALTER TABLE `kepala_pejabat`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mutasi_masuk`
--
ALTER TABLE `mutasi_masuk`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  MODIFY `id_pejabat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permintaan_mutasi`
--
ALTER TABLE `permintaan_mutasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT untuk tabel `tujuan_sekolah`
--
ALTER TABLE `tujuan_sekolah`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kepala_pejabat`
--
ALTER TABLE `kepala_pejabat`
  ADD CONSTRAINT `kepala_pejabat_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Ketidakleluasaan untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  ADD CONSTRAINT `pejabat_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Ketidakleluasaan untuk tabel `permintaan_mutasi`
--
ALTER TABLE `permintaan_mutasi`
  ADD CONSTRAINT `permintaan_mutasi_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);

--
-- Ketidakleluasaan untuk tabel `siswa_masuk`
--
ALTER TABLE `siswa_masuk`
  ADD CONSTRAINT `siswa_masuk_ibfk_1` FOREIGN KEY (`no_urut`) REFERENCES `mutasi_masuk` (`no_urut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
