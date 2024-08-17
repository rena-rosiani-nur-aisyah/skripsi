-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 14 Agu 2024 pada 13.23
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `jawabanUser` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ya',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fact_collections`
--

CREATE TABLE `fact_collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalas`
--

CREATE TABLE `gejalas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('gejala','signs') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gejala',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `diagnosis_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_25_022203_create_posts_table', 1),
(6, '2022_07_14_120509_create_gejalas_table', 1),
(7, '2023_02_09_001056_create_riwayats_table', 1),
(8, '2023_04_07_035535_create_rules_table', 1),
(9, '2023_09_12_011403_created_diagnosis_table', 1),
(10, '2024_05_01_041033_artikel', 1),
(11, '2024_05_10_104120_create_hasil_table', 1),
(12, '2024_05_15_055411_create_fact_collections_table', 1),
(13, '2024_06_05_043307_create_questions_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Solusi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `name`, `deskripsi`, `Solusi`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 'Istihadhah ghoiru mubtada’ah mumayyizah', 'Dalam ilmu medis terdapat hal-hal yang mengganggu haid atau menstruasi yang disebut sebagai hypermenorea atau biasa disebut sebagai istihadhah adapun gangguan menstruasi lain itu dikategorikan ke dalam haid abnormal. Hal ini disebabkan ketidakseimbangan hormonal, permasalahan pada struktur organ reproduksi, adanya infeksi dan faktor lain yang hanya bisa diketahui setelah pemeriksaan dengan dokter atau ahlinya. Sementara dalam sudut pandang Islam Istihadhah adalah darah yang keluar dari bagian rahim terluar di selain hari-hari haid dan nifas. \r\n\r\nIstihadhah terbagi menjadi beberapa bagian, Istihadhah ghoiru mubtada’ah mumayyizah sendiri memiliki arti wanita yang mengalami istihadhah disaat belum pernah mengalami haid yang berarti ini adalah darah yang pertama kali dialami dan warna, kekentalan, serta volume darahnya sama selama keluar alias tidak bisa dibedakan.', 'Ketentuan ibadah wanita yang mengalami istihadhah sama seperti orang yang tidak mengelami haid dan nifas dalam artian wanita yang mengalami istihadhah tetap harus melakukan ibadah wajib, seperti puasa dan sholat, begitupun dengan thowaf menyentuh dan membawa mushaf, Memasuki, melewati dan menetap di masjid dan ibadah lainnya. hanya saja ada hal-hal yang harus diperhatikan yaitu : \r\n1. Membasuh area kewanitaan sebelum berwudhu\r\n2. Menyumbat daerah kewanitaan dengan kapas untuk menghambat atau memperingan najis\r\n3. Memakai pembalut. Hukumnya wajib dengan syarat: \r\n   a. darah tetap mengalir setelah kedua langkah dilakukan. jika darah tidak mengalir \r\n      setelah disumbat maka langkah iini tak wajib dilakukan.\r\n   b. tidak merasa kesakitan yang berlebihan. jika merasa kesakitan maka hukumnya tidak wajib', NULL, '2024-08-14 01:00:08', '2024-08-14 01:00:08'),
(3, 'Istihadhah', 'Dalam ilmu medis terdapat hal-hal yang mengganggu haid atau menstruasi yang disebut sebagai hypermenorea atau biasa disebut sebagai istihadhah adapun gangguan menstruasi lain itu dikategorikan ke dalam haid abnormal. Hal ini disebabkan ketidakseimbangan hormonal, permasalahan pada struktur organ reproduksi, adanya infeksi dan faktor lain yang hanya bisa diketahui setelah pemeriksaan dengan dokter atau ahlinya. Sementara dalam sudut pandang Islam Istihadhah adalah darah yang keluar dari bagian rahim terluar di selain hari-hari haid dan nifas.', 'Ketentuan ibadah wanita yang mengalami istihadhah sama seperti orang yang tidak mengelami haid dan nifas dalam artian wanita yang mengalami istihadhah tetap harus melakukan ibadah wajib, seperti puasa dan sholat, begitupun dengan thowaf menyentuh dan membawa mushaf, Memasuki, melewati dan menetap di masjid dan ibadah lainnya. hanya saja ada hal-hal yang harus diperhatikan yaitu : \r\n1. Membasuh area kewanitaan sebelum berwudhu \r\n2. Menyumbat daerah kewanitaan dengan kapas untuk menghambat atau memperingan najis \r\n3. Memakai pembalut. Hukumnya wajib dengan syarat: \r\na. darah tetap mengalir setelah kedua langkah dilakukan. jika darah tidak mengalir setelah disumbat maka langkah iini tak wajib dilakukan. \r\nb. tidak merasa kesakitan yang berlebihan. jika merasa kesakitan maka hukumnya tidak wajib.\r\n4. Berwudhu dilakukan setelah masuk waktu sholat. Tidak boleh berwudhu masuk waktu sholat karena ia bersuci dalam keadaan darurat. \r\n5. Wajib segera menyumbat kemaluan setelah membasuhnya. Kemudian ia segera memakai pembalut, lalu berwudhu dan sholat. \r\n6. Berwudhu disetiap sholat fardhu, begitu pula ia wajib mengulangi membasuh kemaluan, menyumbat, dan memakai pembalut disetiap sholat fardhu.', NULL, '2024-08-14 01:48:27', '2024-08-14 01:48:27'),
(4, 'Haid', 'Dalam medis haid atau menstruasi adalah suatu proses pembersihan rahim terhadap pembuluh darah, kelenjar-kelenjar, dan sel-sel yang tidak terpakai karena tidak adanya pembuahan atau kehamilan. Sementara dalam sudut pandang Islam haid adalah darah alami yang keluar dari rahim wanita yang terdalam dengan cara yang normal, tanpa ada sebab, dan dimasa-masa tertentu.', 'Ketentuan ibadah yang tidak boleh dilakukan : \r\n1. Sholat \r\n2. Thowaf \r\n3. Menyentuh dan membawa mushaf \r\n4. Puasa \r\n5. Memasuki, melewati dan menetap di masjid \r\n6. Cerai \r\n7. Tidak boleh berhubungan intim dari pusar sampai lutut \r\n8. Sujud syukur dan sujud tilawah \r\n9. Jima’ (berhubungan suami istri). \r\n\r\nKetentuan ibadah yang bisa dilakukan: \r\n1. Dzikir \r\n2. Sholawat \r\n3. Bersedekah \r\n4. Datang ke majlis taklim yang ruangannya terpisah dari masjid ataupun musholla \r\n5. mengajar ngaji tanpa membawa dan menyentuh mushaf dan sejenisnya', NULL, '2024-08-14 01:50:05', '2024-08-14 01:50:05'),
(5, 'Haid Abnormal', 'Yang dimaksud dengan haid abnormal adalah berlangsungnya darah haid ditandai dengan gejala-gejala seperti nyeri berlebihan, darah yang keluar terkadang banyak dan terkadang pula sedikit, warna darah tidak seperti warna darah haid seperti biasanya atau sebelumnya. Adapun penyebabnya bisa diakibatkan oleh fungsi hormon yang terganggu, kelainan sistemik, stres, kelenjar gondok, hormon prolaktin yang berlebihan atau bisa juga disebabkan oleh alat kontrasepsi seperti KB. Tentu saja hal ini perlu ditindak lanut oleh kedokteran.', 'Ketentuan ibadah yang tidak boleh dilakukan : \r\n1. Sholat \r\n2. Thowaf \r\n3. Menyentuh dan membawa mushaf \r\n4. Puasa \r\n5. Memasuki, melewati dan menetap di masjid \r\n6. Cerai \r\n7. Tidak boleh berhubungan intim dari pusar sampai lutut \r\n8. Sujud syukur dan sujud tilawah \r\n9. Jima’ (berhubungan suami istri). \r\n\r\nKetentuan ibadah yang bisa dilakukan: \r\n1. Dzikir \r\n2. Sholawat \r\n3. Bersedekah \r\n4. Datang ke majlis taklim yang ruangannya terpisah dari masjid ataupun musholla \r\n5. mengajar ngaji tanpa membawa dan menyentuh mushaf dan sejenisnya', NULL, '2024-08-14 02:09:20', '2024-08-14 02:09:20'),
(6, 'Istihadhah Penyempurna Suci', 'Istihadhah Penyempurna Suci adalah darah yang keluar dari bagian rahim terluar di selain hari-hari haid dan nifas. Istihadhah penyempurna suci ini terjadi ketika  darah kembali keluar di masa minimal haid atau lebih, kemudian darah berhenti, lalu mengeluarkan darah kembali setelah 15 hari. Dalam pandangan sisi medis lamanya haid normal itu dalam rentang waktu 6-14 hari, dan minimalnya seseorang bersih dari haid adalah selama 15 hari setelah hari terakhir haid, jika haid yang dialami seseorang sudah berhenti lalu dalam 15 hari jarak haid normal itu kembali mengeluarkan darah, maka darah tersebut adalah istihadhah penyempurna suci.', 'Ketentuan Ibadahnya selama berada di dalam rentang waktu haid maka ada jenis ibadah yang tidak bisa dilakukan yaitu:  \r\n1. Sholat \r\n2. Thowaf \r\n3. Menyentuh dan membawa mushaf \r\n4. Puasa \r\n5. Memasuki, melewati dan menetap di masjid \r\n6. Cerai \r\n7. Tidak boleh berhubungan intim dari pusar sampai lutut \r\n8. Sujud syukur dan sujud tilawah \r\n9. Jima’ (berhubungan suami istri). \r\n\r\nAdapun ketika darah Istihadhah penyempurna suci yang keluar maka harus melakukan serangkaian ibadah diatas dengan ketentuan seperti berikut: \r\n1. Membasuh area kewanitaan sebelum berwudhu \r\n2. Menyumbat daerah kewanitaan dengan kapas untuk menghambat atau memperingan najis \r\n3. Memakai pembalut. Hukumnya wajib dengan syarat: \r\na. darah tetap mengalir setelah kedua langkah dilakukan. jika darah tidak mengalir setelah disumbat maka langkah iini tak wajib dilakukan. \r\nb. tidak merasa kesakitan yang berlebihan. jika merasa kesakitan maka hukumnya tidak wajib.\r\n4. Berwudhu dilakukan setelah masuk waktu sholat. Tidak boleh berwudhu masuk waktu sholat karena ia bersuci dalam keadaan darurat. \r\n5. Wajib segera menyumbat kemaluan setelah membasuhnya. Kemudian ia segera memakai pembalut, lalu berwudhu dan sholat. \r\n6. Berwudhu disetiap sholat fardhu, begitu pula ia wajib mengulangi membasuh kemaluan, menyumbat, dan memakai pembalut disetiap sholat fardhu.', NULL, '2024-08-14 02:24:57', '2024-08-14 02:24:57'),
(7, 'Istihadhah ghoiru mumayyizah', 'Dalam ilmu medis Istihadhah adalah hal-hal yang mengganggu haid atau menstruasi atau adanya pendarahan di dalam rahim terluar dari seorang wanita. Adapun dalam Islam itihadhah adalah darah yang keluar dari bagian rahim terluar di selain hari-hari haid dan nifas. Istihadhah dibagi menjadi beberapa bagian salah satunya adalah Istihadhah ghoiru mumayyizah adalah darah istihadhah yang dialami oleh seorang wanita yang pertama kali haid dan warna serta sifat darahnya sama sehingga tidak bisa dibedakan antara darah kuat atau darah lemah.', '1. Membasuh area kewanitaan sebelum berwudhu \r\n2. Menyumbat daerah kewanitaan dengan kapas untuk menghambat atau memperingan najis \r\n3. Memakai pembalut. Hukumnya wajib dengan syarat: \r\na. darah tetap mengalir setelah kedua langkah dilakukan. jika darah tidak mengalir setelah disumbat maka langkah iini tak wajib dilakukan. \r\nb. tidak merasa kesakitan yang berlebihan. jika merasa kesakitan maka hukumnya tidak wajib.\r\n4. Berwudhu dilakukan setelah masuk waktu sholat. Tidak boleh berwudhu masuk waktu sholat karena ia bersuci dalam keadaan darurat. \r\n5. Wajib segera menyumbat kemaluan setelah membasuhnya. Kemudian ia segera memakai pembalut, lalu berwudhu dan sholat. \r\n6. Berwudhu disetiap sholat fardhu, begitu pula ia wajib mengulangi membasuh kemaluan, menyumbat, dan memakai pembalut disetiap sholat fardhu.', NULL, '2024-08-14 02:33:36', '2024-08-14 02:33:36'),
(8, 'Istihadhah Mutahayyiroh', 'Istihadhah adalah jenis darah yang keluar diselain hari-hari haid dan nifas. Adapun Istihadhah Mutahayyiroh adalah sesorang yang sudah pernah mengalami haid dan nifas namun tidak mengingat kapan terakhir kali haid dan nifas dan pada waktu apa mereka mengalami haid dan nifas, waktu yang dimaksud adalah waktu-waktu sholat seperti misalnya sesorang mengalami haid sebelum waktu sholat dzuhur dan sebagainya. \r\n\r\nUntuk mengetahui jumlah haid atau nifasnya dengan jumlah Istihadhahnya pengguna dapat mengikuti keyakinan hati, jika yakin haid maka darah tersebut dihukumi haid, jika yakin darah tersebut istihadhah, maka darah tersebut dihukumi istihadhah mutahayyiroh.', 'Jika yang diyakini satu hari tersebut adanya haid maka ketentuan ibadah yang tidak bisa dilaksanakan adalah sebagai berikut: \r\n1. Sholat \r\n2. Thowaf \r\n3. Menyentuh dan membawa mushaf \r\n4. Puasa \r\n5. Memasuki, melewati dan menetap di masjid \r\n6. Cerai \r\n7. Tidak boleh berhubungan intim dari pusar sampai lutut \r\n8. Sujud syukur dan sujud tilawah \r\n9. Jima’ (berhubungan suami istri). \r\n\r\nSementara jika meyakini dihari lainnya adalah Istihadhah atau merasa ragu maka dijwabkan untuk bersuci atau mandi besar di setiap sholat fardhu karena ada kemungkinan darah haid telah berhenti sebelumnya.', NULL, '2024-08-14 02:41:31', '2024-08-14 02:41:31'),
(9, 'Istihadhah Mutahayyiroh', 'Istihadhah adalah jenis darah yang keluar diselain hari-hari haid dan nifas. Adapun Istihadhah Mutahayyiroh adalah sesorang yang sudah pernah mengalami haid dan nifas namun tidak mengingat kapan terakhir kali haid dan nifas dan pada waktu apa mereka mengalami haid dan nifas, waktu yang dimaksud adalah waktu-waktu sholat seperti misalnya sesorang mengalami haid sebelum waktu sholat dzuhur dan sebagainya. \r\n\r\nKetentuan darahnya adalah mengikuti adat haid setempat atau berhati-hati pada darah tersebut yaitu antara haid atau istihadhah.', 'Ketentuan Ibadahnya adalah wajib berhati-hati karena setiap waktu ia miliki kemungkinan haid dan istihadhah. Makna berhati-hati adalah tidak diperkenankannya melakukan sebagai berikut: \r\n1. Berhubungan suami istri (jima) antara pusar hingga lutut. \r\n2. Membaca Al-qur\'an diluar sholat\r\n3. Menyentuh Al-qur\'an\r\n4. Membawa Al-qur\'an\r\n5. Menetap di masjid \r\n6. Melewati masjid jika kuatir mengotorinya \r\n\r\nTetapi diperbolehkannya melakukan hal-hal sebagai berikut: \r\n1. Sholat\r\n2. Thowaf \r\n3. Puasa \r\n4, Bercerai \r\n5. Mandi dengan niat ibadah', NULL, '2024-08-14 02:59:50', '2024-08-14 02:59:50'),
(11, 'Istihadhah mubtada’ah mumayyizah', 'Dalam ilmu medis terdapat hal-hal yang mengganggu haid atau menstruasi yang disebut sebagai hypermenorea atau biasa disebut sebagai istihadhah yang berarti terdapat pendarahan lebih banyak dan lebih lama dari biasanya. Hal ini disebabkan ketidakseimbangan hormonal, permasalahan pada struktur organ reproduksi, adanya infeksi dan faktor lain yang hanya bisa diketahui setelah pemeriksaan dengan dokter atau ahlinya. \r\nSementara dalam sudut pandang Islam Istihadhah adalah darah yang keluar dari bagian rahim terluar di selain hari-hari haid dan nifas. Sementara arti dari Istihadhah mumayyizah sendiri adalah darah istihadhah yang dialami oleh seorang wanita yang pertama kali mengeluarkan darah haid dan darah yang keluar bisa dibedakan antara kuat (berwarna hitam atau merah gelap, yang kental dan berbau) dengan darah lemah (berwarna lebih cerah, cair dan tidak berbau).', 'Ketentuan ibadah wanita yang mengalami istihadhah sama seperti orang yang tidak mengelami haid dan nifas dalam artian wanita yang mengalami istihadhah tetap harus melakukan ibadah wajib, seperti puasa dan sholat, begitupun dengan thowaf menyentuh dan membawa mushaf, Memasuki, melewati dan menetap di masjid dan ibadah lainnya. hanya saja ada hal-hal yang harus diperhatikan yaitu : \r\n1. Membasuh area kewanitaan sebelum berwudhu \r\n2. Menyumbat daerah kewanitaan dengan kapas untuk menghambat atau memperingan najis \r\n3. Memakai pembalut. Hukumnya wajib dengan syarat: \r\na. darah tetap mengalir setelah kedua langkah dilakukan. jika darah tidak mengalir setelah disumbat maka langkah iini tak wajib dilakukan. \r\nb. tidak merasa kesakitan yang berlebihan. jika merasa kesakitan maka hukumnya tidak wajib.\r\n4. Berwudhu dilakukan setelah masuk waktu sholat. Tidak boleh berwudhu masuk waktu sholat karena ia bersuci dalam keadaan darurat. \r\n5. Wajib segera menyumbat kemaluan setelah membasuhnya. Kemudian ia segera memakai pembalut, lalu berwudhu dan sholat. \r\n6. Berwudhu disetiap sholat fardhu, begitu pula ia wajib mengulangi membasuh kemaluan, menyumbat, dan memakai pembalut disetiap sholat fardhu.', NULL, '2024-08-14 03:12:52', '2024-08-14 03:12:52'),
(12, 'Nifas', 'Nifas adalah darah yang keluar dari dalam rahim setelah kosongnya rahim baik diakibatkan oleh melahirkan maupun dikarenakan keguguran baik baru segumpal darah maupun segumpal daging yang bentuknya belum jelas. Darah tersebut juga bisa dikatakan nifas jika keluar sebelum 15 hari setelah melahirkan dan darahnya tidak melebihi dari 60 hari.', 'Ketentuan ibadah yang tidak boleh dilakukan : \r\n1. Sholat \r\n2. Thowaf \r\n3. Menyentuh dan membawa mushaf \r\n4. Puasa \r\n5. Memasuki, melewati dan menetap di masjid \r\n6. Cerai \r\n7. Tidak boleh berhubungan intim dari pusar sampai lutut \r\n8. Sujud syukur dan sujud tilawah \r\n9. Jima’ (berhubungan suami istri). \r\n\r\nKetentuan ibadah yang bisa dilakukan: \r\n1. Dzikir \r\n2. Sholawat \r\n3. Bersedekah \r\n4. Datang ke majlis taklim yang ruangannya terpisah dari masjid ataupun musholla \r\n5. mengajar ngaji tanpa membawa dan menyentuh mushaf dan sejenisnya', NULL, '2024-08-14 03:23:42', '2024-08-14 03:23:42'),
(13, 'Nifas dan Haid', 'Darah yang dialami ada 2 yaitu haid dan nifas berikut perinciannya: \r\n- Masa darah sebelum suci atau sebelum berhenti dikategorikan nifas.\r\n- Masa berhenti darah nifas dikategorikan masa suci.\r\n- Masa darah keluar setelah nifas dan masa suci dikategorikan haid.', 'Ketentuan ibadah yang tidak boleh dilakukan : \r\n1. Sholat \r\n2. Thowaf \r\n3. Menyentuh dan membawa mushaf \r\n4. Puasa \r\n5. Memasuki, melewati dan menetap di masjid \r\n6. Cerai \r\n7. Tidak boleh berhubungan intim dari pusar sampai lutut \r\n8. Sujud syukur dan sujud tilawah \r\n9. Jima’ (berhubungan suami istri). \r\n\r\nKetentuan ibadah yang bisa dilakukan: \r\n1. Dzikir \r\n2. Sholawat \r\n3. Bersedekah \r\n4. Datang ke majlis taklim yang ruangannya terpisah dari masjid ataupun musholla \r\n5. mengajar ngaji tanpa membawa dan menyentuh mushaf dan sejenisnya', NULL, '2024-08-14 03:28:59', '2024-08-14 03:28:59'),
(14, 'Istihadhah Mumayyizah', 'Dalam ilmu medis terdapat hal-hal yang mengganggu haid atau menstruasi yang disebut sebagai hypermenorea atau biasa disebut sebagai istihadhah yang berarti terdapat pendarahan lebih banyak dan lebih lama dari biasanya. Hal ini disebabkan ketidakseimbangan hormonal, permasalahan pada struktur organ reproduksi, adanya infeksi dan faktor lain yang hanya bisa diketahui setelah pemeriksaan dengan dokter atau ahlinya. Sementara dalam sudut pandang Islam Istihadhah adalah darah yang keluar dari bagian rahim terluar di selain hari-hari haid dan nifas.\r\n\r\nIstihadhah mumayyizah sendiri mempunyai arti darah yang keluar dan bukan bagian dari darah nifas dimana darahnya dapat dibedakan yaitu darah kuat (berwarna gelap, kental, dan berbau atau memiliki kedua ciri dari 3 ciri tersebut) dan darah lemah (berwarna lebih terang, cair, dan  tidak berbau. \r\n\r\nKetentuan darah tersebut adalah darah nifas yang merupakan darah kuat dan darah lemahnya adalah istihadhah', 'Ketentuan Ibadah dalam masa nifas adalah sebagai berikut: \r\nKetentuan ibadah yang tidak boleh dilakukan : \r\n1. Sholat \r\n2. Thowaf \r\n3. Menyentuh dan membawa mushaf \r\n4. Puasa \r\n5. Memasuki, melewati dan menetap di masjid \r\n6. Cerai \r\n7. Tidak boleh berhubungan intim dari pusar sampai lutut \r\n8. Sujud syukur dan sujud tilawah \r\n9. Jima’ (berhubungan suami istri). \r\n\r\nKetentuan ibadah yang bisa dilakukan: \r\n1. Dzikir \r\n2. Sholawat \r\n3. Bersedekah \r\n4. Datang ke majlis taklim yang ruangannya terpisah dari masjid ataupun musholla \r\n5. mengajar ngaji tanpa membawa dan menyentuh mushaf dan sejenisnya\r\n\r\nKetentuan ibadah wanita yang mengalami istihadhah sama seperti orang yang tidak mengelami haid dan nifas dalam artian wanita yang mengalami istihadhah tetap harus melakukan ibadah wajib, seperti puasa dan sholat, begitupun dengan thowaf menyentuh dan membawa mushaf, Memasuki, melewati dan menetap di masjid dan ibadah lainnya. hanya saja ada hal-hal yang harus diperhatikan yaitu : \r\n1. Membasuh area kewanitaan sebelum berwudhu \r\n2. Menyumbat daerah kewanitaan dengan kapas untuk menghambat atau memperingan najis \r\n3. Memakai pembalut. Hukumnya wajib dengan syarat: \r\na. darah tetap mengalir setelah kedua langkah dilakukan. jika darah tidak mengalir setelah disumbat maka langkah iini tak wajib dilakukan. \r\nb. tidak merasa kesakitan yang berlebihan. jika merasa kesakitan maka hukumnya tidak wajib.\r\n4. Berwudhu dilakukan setelah masuk waktu sholat. Tidak boleh berwudhu masuk waktu sholat karena ia bersuci dalam keadaan darurat. \r\n5. Wajib segera menyumbat kemaluan setelah membasuhnya. Kemudian ia segera memakai pembalut, lalu berwudhu dan sholat. \r\n6. Berwudhu disetiap sholat fardhu, begitu pula ia wajib mengulangi membasuh kemaluan, menyumbat, dan memakai pembalut disetiap sholat fardhu.', NULL, '2024-08-14 03:43:46', '2024-08-14 03:43:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayats`
--

CREATE TABLE `riwayats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hasil_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rules`
--

CREATE TABLE `rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `operator` enum('AND','OR') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'AND',
  `signs_id` bigint(20) UNSIGNED NOT NULL,
  `value` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ya',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('expert','user') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fact_collections`
--
ALTER TABLE `fact_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayats`
--
ALTER TABLE `riwayats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rules_gejala_id_foreign` (`gejala_id`),
  ADD KEY `rules_signs_id_foreign` (`signs_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fact_collections`
--
ALTER TABLE `fact_collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayats`
--
ALTER TABLE `riwayats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rules`
--
ALTER TABLE `rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rules_signs_id_foreign` FOREIGN KEY (`signs_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
