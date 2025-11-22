-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Nov 2025 pada 11.03
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
-- Basis data: `muc__activity__miniproject`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `serviceused`
--

CREATE TABLE `serviceused` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('pending','ongoing','done') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `serviceused`
--

INSERT INTO `serviceused` (`id`, `proposal_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Konsultasi Pajak Bulanan', 'ongoing', '2025-01-01 00:00:00', '2025-01-01 00:00:00'),
(2, 2, 'Konsultasi pajak bulanan untuk klien A', 'ongoing', '2025-01-01 00:00:00', '2025-01-01 00:00:00'),
(3, 3, 'Review kepatuhan pajak dokumen klien B', 'pending', '2025-01-02 01:00:00', '2025-01-02 01:00:00'),
(4, 4, 'Audit Kepatuhan Pajak', 'done', '2025-01-03 02:00:00', '2025-01-03 02:00:00'),
(5, 5, 'Perencanaan Pajak Tahunan', 'ongoing', '2025-01-04 03:00:00', '2025-01-04 03:00:00'),
(6, 6, 'Pengurusan Restitusi PPN', 'pending', '2025-01-04 03:00:00', '2025-01-04 03:00:00'),
(7, 7, 'Pelatihan Perpajakan Internal', 'done', '2025-01-05 04:00:00', '2025-01-05 04:00:00'),
(8, 8, 'Review Laporan Keuangan', 'pending', '2025-01-06 05:00:00', '2025-01-06 05:00:00'),
(9, 9, 'Penyusunan SPT Tahunan Badan klien D', 'pending', '2025-01-05 04:15:00', '2025-01-06 07:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `timesheet`
--

CREATE TABLE `timesheet` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `timestart` time NOT NULL,
  `timefinish` time NOT NULL,
  `employees_id` int(11) NOT NULL,
  `serviceused_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `timesheet`
--

INSERT INTO `timesheet` (`id`, `date`, `timestart`, `timefinish`, `employees_id`, `serviceused_id`, `description`) VALUES
(1, '2025-01-03', '09:00:00', '12:00:00', 1, 2, 'Konsultasi pajak bulanan untuk klien A'),
(2, '2025-01-03', '13:00:00', '16:30:00', 2, 3, 'Review kepatuhan pajak dokumen klien B'),
(3, '2025-01-04', '08:30:00', '11:45:00', 3, 5, 'Pendampingan pemeriksaan pajak di kantor KPP'),
(4, '2025-01-04', '12:45:00', '15:30:00', 4, 6, 'Analisis awal perencanaan pajak tahunan'),
(5, '2025-01-05', '09:00:00', '11:00:00', 5, 8, 'Pengurusan restitusi PPN klien C'),
(6, '2025-01-05', '11:15:00', '14:30:00', 1, 9, 'Penyusunan SPT Tahunan Badan klien D'),
(7, '2025-01-06', '08:00:00', '12:00:00', 2, 2, 'Konsultasi pajak lanjutan bulan berjalan'),
(8, '2025-01-06', '13:00:00', '17:00:00', 3, 3, 'Review dokumen transaksi untuk kepatuhan PPh'),
(9, '2025-01-07', '09:30:00', '12:30:00', 4, 5, 'Pendampingan pemeriksaan pajak lanjutan'),
(10, '2025-01-07', '13:00:00', '16:00:00', 5, 6, 'Tax planning untuk optimalisasi beban pajak');

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `serviceused`
--
ALTER TABLE `serviceused`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `serviceused`
--
ALTER TABLE `serviceused`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
