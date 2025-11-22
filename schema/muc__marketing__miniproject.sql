-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Nov 2025 pada 11.05
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
-- Basis data: `muc__marketing__miniproject`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `proposal`
--

CREATE TABLE `proposal` (
  `id` int(11) NOT NULL,
  `number` text NOT NULL,
  `description` text NOT NULL,
  `year` int(11) NOT NULL,
  `status` enum('pending','agreed','rejected') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `proposal`
--

INSERT INTO `proposal` (`id`, `number`, `description`, `year`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PR-2025-001', 'Penyusunan laporan keuangan tahunan PT Arwana Jaya', 2025, 'pending', '2025-11-19 11:16:27', '2025-11-19 11:16:27'),
(2, 'PR-2025-002', 'Pengembangan sistem manajemen dokumen internal', 2025, 'agreed', '2025-11-19 11:16:27', '2025-11-19 11:16:27'),
(3, 'PR-2025-003', 'Audit operasional cabang Jakarta Selatan', 2025, 'pending', '2025-11-19 11:16:27', '2025-11-19 11:16:27'),
(4, 'PR-2025-004', 'Penilaian risiko dan compliance untuk divisi finance', 2025, 'pending', '2025-11-19 11:16:27', '2025-11-19 11:16:27'),
(5, 'PR-2025-005', 'Implementasi aplikasi absensi berbasis web', 2025, 'rejected', '2025-11-19 11:16:27', '2025-11-19 11:16:27'),
(6, 'PR-2024-006', 'Revisi kontrak layanan dan kebutuhan legal support', 2024, 'agreed', '2025-11-19 11:16:27', '2025-11-19 11:16:27'),
(7, 'PR-2024-007', 'Maintenance dan peningkatan server internal', 2024, 'agreed', '2025-11-19 11:16:27', '2025-11-19 11:16:27'),
(8, 'PR-2023-008', 'Pengadaan perangkat IT untuk kantor pusat', 2023, 'rejected', '2025-11-19 11:16:27', '2025-11-19 11:16:27'),
(9, 'PR-2023-009', 'Pendampingan persiapan ISO 9001:2015', 2023, 'agreed', '2025-11-19 11:16:27', '2025-11-19 11:16:27'),
(10, 'PR-2022-010', 'Layanan pelatihan akuntansi berbasis SAK EMKM', 2022, 'pending', '2025-11-19 11:16:27', '2025-11-19 11:16:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
